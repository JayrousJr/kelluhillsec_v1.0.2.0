<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequest extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $fillable = [
        'Customer_Name',
        'Customer_Email',
        'Customer_Phone',
        'Service_Requested',
        'Short_Description',
        'deleted_at',
        'client_id'
    ];
    // public function serviceRequestsRelation(): HasOne
    // {
    //     return $this->hasOne(ServiceOrder::class, 'request_id', 'id');
    // }

}
