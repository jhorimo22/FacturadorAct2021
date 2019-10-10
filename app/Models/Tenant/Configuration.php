<?php

namespace App\Models\Tenant;

class Configuration extends ModelTenant
{
    protected $fillable = [
        'send_auto',
        'cron', 
        'stock',
        'locked_emission',
        'limit_documents',
        'locked_tenant',
        'quantity_documents',
        'date_time_start',
    ];
}