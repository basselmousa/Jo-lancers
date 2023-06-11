<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function skill()
    {
        return $this->belongsTo(ServiceType::class,"service_type_id");
    }

    public function provider()
    {
        return $this->belongsTo(ServiceProvider::class,"service_provider_id");
    }
}
