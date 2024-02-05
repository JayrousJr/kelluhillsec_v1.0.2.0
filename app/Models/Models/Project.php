<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $fillable = [
        'project_id',
        'client_id',
        'project_name',
        'request_id',
        'Service_Requested',
        'project_class',
        'project_client',
        'Project_description',
        'project_role',
        'project_image',
        'date_to_start',
        'date_to_finish',
        'status',
        'developer_name',
        'developer_image',
        'developer_comments',
        'project_image'

    ];
    // public function projectRelation(): BelongsTo
    // {
    //     return $this->belongsTo(ServiceRequest::class, 'request_id');
    // }
    // public function service_orders()
    // {
    //     return $this->hasMany(ServiceOrder::class, 'client_id', 'client_id');
    // }
    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class);
    }
}
