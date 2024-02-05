<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceOrder extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $fillable = [
        'token',
        'order_id',
        'request_id',
        'client_id',
        'Customer_Name',
        'order_id',
        'service_name',
        'project_class',
        'project_status',
        'project_role',
        'project_image',
        'date_to_start',
        'date_to_finish',
        'project_developer',
        'developer_image',
        'Developer_Comments',
        'client_id',
        'project_name',
        'paid'


    ];

    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class);
    }
}
