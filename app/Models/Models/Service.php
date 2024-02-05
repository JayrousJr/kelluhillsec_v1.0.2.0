<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $fillable = [
        'service_name',
        'service_description',
        'service_provider',
        'service_provider',
        'service_more',
        'token',
        'is_active',
        'service_code',
    ];
    public function service_orders()
    {
        return $this->hasMany(ServiceOrder::class, 'service_name', 'service_name');
    }
}
