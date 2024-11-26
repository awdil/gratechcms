<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sidebar Menu Items
    |--------------------------------------------------------------------------
    |
    | Here you can change the sidebar menu items
    |
    */

    [
        'menus' => [
            [
                'label' => 'Dashboard',
                'icon' => 'dashboard',
                'class' => 'mb-0',
                'type' => 'single',
                'route' => 'admin.dashboard',
                'permission' => 'dashboard-view',
            ],
        ],
    ],
    [
        'label' => 'Manage Users',
        'menus' => [
            [
                'label' => 'Users',
                'icon' => 'users',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Active Users',
                        'icon' => 'active-users',
                        'route' => 'admin.users.active',
                        'permission' => 'user-list',
                    ],
                    [
                        'label' => 'Banned Users',
                        'icon' => 'banned-users',
                        'route' => 'admin.users.banned',
                        'permission' => 'user-list',
                    ],
                    [
                        'label' => 'Unverified Users',
                        'icon' => 'not-verified',
                        'route' => 'admin.users.unverified',
                        'permission' => 'user-list',
                    ],
                    [
                        'label' => 'All Users',
                        'icon' => 'list-1',
                        'route' => 'admin.users.all',
                        'permission' => 'user-list',
                    ],
                ],
            ],
            [
                'label' => 'Send Notification',
                'icon' => 'send',
                'type' => 'single',
                'route' => 'admin.users.send-notification',
                'permission' => 'user-send-notification',
            ],
        ],
    ],
    [
        'label' => 'Manage Staff',
        'menus' => [
            [
                'label' => 'Staff',
                'icon' => 'badge-account',
                'type' => 'single',
                'route' => 'admin.staff.index',
                'permission' => 'staff-list',
            ],
            [
                'label' => 'Roles & Permissions',
                'icon' => 'role',
                'type' => 'single',
                'route' => 'admin.role.index',
                'permission' => 'role-list',
            ],
        ],
    ],
    [
        'label' => 'Essentials',
        'menus' => [
            [
                'label' => 'Payment Gateways',
                'icon' => 'payment',
                'type' => 'single',
                'route' => 'admin.payment.gateway.index',
                'permission' => 'payment-gateway-list',
            ],

            [
                'label' => 'Deposit',
                'icon' => 'wallet-plus',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Automatic Methods',
                        'icon' => 'auto-payment',
                        'route' => 'admin.deposit.method.type',
                        'params' => ['type' => 'auto'],
                        'permission' => 'deposit-method-list',
                    ],

                    [
                        'label' => 'Manual Methods',
                        'icon' => 'manual-payment',
                        'route' => 'admin.deposit.method.type',
                        'params' => ['type' => 'manual'],
                        'permission' => 'deposit-method-list',
                    ],
                    [
                        'label' => 'Manual Deposit Request',
                        'icon' => 'manual-deposit',
                        'route' => 'admin.deposit.manual-request',
                        'permission' => 'deposit-list',
                    ],
                    [
                        'label' => 'Deposit History',
                        'icon' => 'deposit-history',
                        'route' => 'admin.deposit.history',
                        'permission' => 'deposit-list',
                    ],
                ],
            ],
            [
                'label' => 'Order',
                'icon' => 'order',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Manual Payment',
                        'icon' => 'manual-deposit',
                        'route' => 'admin.order.manual-payment',
                        'permission' => 'order-list',
                    ],
                    [
                        'label' => 'Order Request',
                        'icon' => 'request',
                        'route' => 'admin.order.request',
                        'permission' => 'order-list',
                    ],
                    [
                        'label' => 'Working Order',
                        'icon' => 'work',
                        'route' => 'admin.order.working',
                        'permission' => 'order-list',
                    ],
                    [
                        'label' => 'Order History',
                        'icon' => 'history',
                        'route' => 'admin.order.history',
                        'permission' => 'order-list',
                    ],
                ],
            ],
            [
                'label' => 'Subscription',
                'icon' => 'subscription',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Manual Payment',
                        'icon' => 'manual-deposit',
                        'route' => 'admin.subscription.manual-payment',
                        'permission' => 'subscription-list',
                    ],
                    [
                        'label' => 'Running Subscription',
                        'icon' => 'running',
                        'route' => 'admin.subscription.running',
                        'permission' => 'subscription-list',
                    ],
                    [
                        'label' => 'Expired Subscription',
                        'icon' => 'expire',
                        'route' => 'admin.subscription.expired',
                        'permission' => 'subscription-list',
                    ],
                    [
                        'label' => 'Subscription History',
                        'icon' => 'history',
                        'route' => 'admin.subscription.history',
                        'permission' => 'subscription-list',
                    ],
                ],
            ],
            [
                'label' => 'Transaction',
                'icon' => 'tnx',
                'type' => 'single',
                'route' => 'admin.transaction',
                'permission' => 'transaction-list',
            ],
        ],
    ],
    [
        'label' => 'Plan & Services',
        'menus' => [
            [
                'label' => 'Plan',
                'icon' => 'plan',
                'type' => 'single',
                'route' => 'admin.plan.index',
                'permission' => 'plan-list',
            ],
            [
                'label' => 'Service',
                'icon' => 'service',
                'type' => 'single',
                'route' => 'admin.service.index',
                'permission' => 'service-list',
            ],
        ],
    ],
    [
        'label' => 'Site Manage',
        'menus' => [
            [
                'label' => 'Settings',
                'icon' => 'setting-1',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Site Settings',
                        'icon' => 'site-cog',
                        'route' => 'admin.settings.site.index',
                        'permission' => 'site-settings-view',
                    ],
                    [
                        'label' => 'Plugins Manage',
                        'icon' => 'cil-fork',
                        'route' => 'admin.settings.plugin.index',
                        'permission' => 'plugin-list',
                    ],
                    [
                        'label' => 'Notification Manage',
                        'icon' => 'bell-3',
                        'route' => 'admin.settings.plugin_type',
                        'params' => ['plugin_type' => 'notification'],
                        'permission' => 'notification-plugin-manage',
                    ],
                    [
                        'label' => 'Mail Provider Manage',
                        'icon' => 'mail-cog',
                        'route' => 'admin.settings.plugin_type',
                        'params' => ['plugin_type' => 'mail_provider'],
                        'permission' => 'mail-provider-manage',
                    ],
                    [
                        'label' => 'Exchange Rates',
                        'icon' => 'currency-exchange',
                        'route' => 'admin.settings.plugin_type',
                        'params' => ['plugin_type' => 'exchange_rate'],
                        'permission' => 'exchange-rate-plugin-manage',
                    ],
                ],
            ],
            [
                'label' => 'Language Settings',
                'icon' => 'language',
                'type' => 'single',
                'route' => 'admin.language.index',
                'permission' => 'language-list',
            ],

        ],
    ],
    [
        'label' => 'Notification',
        'menus' => [
            [
                'label' => 'All Notifications',
                'icon' => 'notification',
                'type' => 'single',
                'route' => 'admin.notifications.index',
                'permission' => 'list-notification',
            ],
            [
                'label' => 'Notifications Template',
                'icon' => 'template',
                'type' => 'single',
                'route' => 'admin.notifications.template',
                'permission' => 'list-notify-template',
            ],
        ],
    ],
    [
        'label' => 'Site Essential',
        'menus' => [
            [
                'label' => 'Theme Management',
                'icon' => 'color',
                'type' => 'single',
                'route' => 'admin.theme.index',
                'permission' => 'theme-list',
            ],
            [
                'label' => 'Navigation',
                'icon' => 'bar',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Manage Navigation',
                        'route' => 'admin.navigation.site.index',
                        'permission' => 'navigation-list',
                    ],
                    [
                        'label' => 'Header Navigation',
                        'route' => 'admin.navigation.type',
                        'params' => ['type' => 'header'],
                        'permission' => 'navigation-list',
                    ],
                    [
                        'label' => 'Footer Navigation',
                        'route' => 'admin.navigation.type',
                        'params' => ['type' => 'footer'],
                        'permission' => 'navigation-list',
                    ],
                ],
            ],
            [
                'label' => 'Pages',
                'icon' => 'page',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Page Manage',
                        'route' => 'admin.page.site.index',
                        'permission' => 'page-list',
                    ],
                    [
                        'label' => 'Component Manage',
                        'route' => 'admin.page.component.index',
                        'permission' => 'component-list',
                    ],
                    [
                        'label' => 'Header Manage',
                        'route' => 'admin.page.setting-type',
                        'params' => ['setting_type' => 'header'],
                        'permission' => 'page-manage',
                    ],
                    [
                        'label' => 'Footer Manage',
                        'route' => 'admin.page.setting-type',
                        'params' => ['setting_type' => 'footer'],
                        'permission' => 'page-manage',
                    ],
                    [
                        'label' => 'Breadcrumb Manage',
                        'route' => 'admin.page.setting-type',
                        'params' => ['setting_type' => 'breadcrumb_manage'],
                        'permission' => 'page-manage',
                    ],
                    [
                        'label' => '404 Error Manage',
                        'route' => 'admin.page.setting-type',
                        'params' => ['setting_type' => 'error_404'],
                        'permission' => 'page-manage',
                    ],
                ],
            ],
            [
                'label' => 'Blog',
                'icon' => 'bookmark',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Blog',
                        'route' => 'admin.blog.site.index',
                        'permission' => 'blog-list',
                    ],
                    [
                        'label' => 'Category',
                        'route' => 'admin.blog.category.index',
                        'permission' => 'blog-category-list',
                    ],
                ],
            ],
            [
                'label' => 'SEO Manage',
                'icon' => 'sparkles',
                'type' => 'single',
                'route' => 'admin.seo',
                'permission' => 'seo-list',
            ],
            [
                'label' => 'Social Links',
                'icon' => 'share',
                'type' => 'single',
                'route' => 'admin.social.index',
                'permission' => 'social-list',
            ],

        ],
    ],
    [
        'label' => 'Help Desk',
        'menus' => [
            [
                'label' => 'Support Ticket',
                'icon' => 'message',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Pending Ticket',
                        'icon' => 'chat-1',
                        'route' => 'admin.support-ticket.new',
                        'permission' => 'support-list',
                    ],
                    [
                        'label' => 'In Progress Ticket',
                        'icon' => 'chat-2',
                        'route' => 'admin.support-ticket.inprogress',
                        'permission' => 'support-list',
                    ],
                    [
                        'label' => 'Close Ticket',
                        'icon' => 'chat-3',
                        'route' => 'admin.support-ticket.close',
                        'permission' => 'support-list',
                    ],
                    [
                        'label' => 'All Ticket',
                        'icon' => 'chat-4',
                        'route' => 'admin.support-ticket.history',
                        'permission' => 'support-list',
                    ],
                ],
            ],
            [
                'label' => 'Support Category',
                'icon' => 'tags',
                'type' => 'single',
                'route' => 'admin.support-ticket.category.index',
                'permission' => 'support-category-list',
            ],
        ],
    ],
    [
        'label' => 'Others',
        'menus' => [
            [
                'label' => 'Email Subscriber',
                'icon' => 'envelope',
                'type' => 'single',
                'route' => 'admin.subscriber',
                'permission' => 'email-subscriber',
            ],
            [
                'label' => 'Site Customize',
                'icon' => 'customize',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Custom CSS',
                        'route' => 'admin.custom.type',
                        'params' => ['type' => 'css'],
                        'permission' => 'site-customize',
                    ],
                    [
                        'label' => 'Custom Script',
                        'route' => 'admin.custom.type',
                        'params' => ['type' => 'script'],
                        'permission' => 'site-customize',
                    ],
                ],
            ],
            [
                'label' => 'Optimize App',
                'icon' => 'rocket',
                'type' => 'groups',
                'sub_menus' => [
                    [
                        'label' => 'Clear Cache',
                        'route' => 'admin.clear-cache',
                        'permission' => 'app-optimize',
                    ],
                    [
                        'label' => 'Optimize Site',
                        'route' => 'admin.optimize',
                        'permission' => 'app-clear-cache',
                    ],
                ],
            ],
            [
                'label' => 'Application',
                'icon' => 'info',
                'badge' => '3.0',
                'type' => 'single',
                'route' => 'admin.app',
                'permission' => 'app-info',
            ],

        ],
    ],

];
