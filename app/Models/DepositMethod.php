<?php

namespace App\Models;

use App\Services\CurrencyConversionService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class DepositMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_gateway_id',
        'logo',
        'name',
        'type',
        'method_code', // Ensure this matches your database
        'currency',
        'currency_symbol',
        'min_deposit',
        'max_deposit',
        'conversion_rate_live',
        'conversion_rate',
        'charge_type',
        'charge',
        'fields',
        'receive_payment_details',
        'status',
    ];

    protected $casts = [
        'payment_gateway_id' => 'integer',
        'fields' => 'array',
        'status' => 'boolean',
        'min_deposit' => 'float', // Ensure this matches the table
        'max_deposit' => 'float', // Ensure this matches the table
        'conversion_rate_live' => 'boolean',
        'conversion_rate' => 'float',
        'charge' => 'float',
    ];

    /**
     * Static method to get deposit method by code with caching
     */
    public static function getByCode($code)
    {
        return Cache::rememberForever('deposit_method_'.$code, function () use ($code) {
            return self::where('method_code', $code)->first(); // Correct column name
        });
    }

    /**
     * The "booted" method of the model for cache flushing.
     */
    protected static function boot(): void
    {
        parent::boot();

        static::deleted(function ($model) {
            Cache::forget('deposit_method_'.$model->method_code);
        });

        static::updated(function ($model) {
            Cache::forget('deposit_method_'.$model->method_code);
        });

        static::created(function ($model) {
            Cache::forget('deposit_method_'.$model->method_code);
        });
    }

    /**
     * Scope for active deposit methods
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Payment gateway relation
     */
    public function paymentGateway()
    {
        return $this->belongsTo(PaymentGateway::class, 'payment_gateway_id');
    }

    /**
     * Get the logo attribute.
     * If logo is not present, fallback to the payment gateway's logo.
     */

    /**
     * Get deposit method by method_code
     */
    public function scopeGetByCode($query, $code)
    {
        return $query->where('method_code', $code)->first();
    }

    /**
     * Get the conversion rate for the deposit method.
     * Use the currency conversion service if live conversion is enabled.
     */
    public function getConversionRateAttribute(): string
    {
        if ($this->attributes['conversion_rate_live'] && $this->attributes['type'] == 'auto') {
            $currencyConversionService = app(CurrencyConversionService::class); // Use service container for dependency injection

            return number_format($currencyConversionService->convertCurrency(1, setting('site_currency'), $this->attributes['currency']), 2, '.', '');
        }

        return $this->attributes['conversion_rate'];
    }

    public function getLogoAltAttribute($value)
    {

        // Check if the 'logo' attribute exists and is not null
        if (! empty($this->attributes['logo'])) {
            return $this->attributes['logo'];
        }

        // Return the payment gateway logo only if the paymentGateway exists
        return $this->paymentGateway ? $this->paymentGateway->logo : ''; // Return empty string if both are null
    }

}
