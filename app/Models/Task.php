<?php

namespace App\Models;

use App\Constants\TaskStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'assigned_to',
        'name',
        'description',
        'attachment',
        'progress',
        'start_date',
        'due_date',
        'priority',
        'status',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'due_date' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Scope a query to only include tasks that are pending.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePending(Builder $query): Builder
    {
        return $query->where('status', TaskStatus::PENDING);
    }

    /**
     * Scope a query to only include tasks that are in progress.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeInProgress(Builder $query): Builder
    {
        return $query->where('status', TaskStatus::IN_PROGRESS);
    }

    /**
     * Scope a query to only include tasks that are completed.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeCompleted(Builder $query): Builder
    {
        return $query->where('status', TaskStatus::COMPLETED);
    }
}
