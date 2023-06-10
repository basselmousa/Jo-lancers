<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ServiceProvider extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded =[];

    public function currency()
    {
        return $this->belongsTo(Currency::class,"currency_id");
    }

    public function skill()
    {
        return $this->hasMany(ServiceProviderType::class,"service_provider_id");
    }

    public function rate()
    {
        return $this->hasMany(Rate::class,"service_provider_id");
    }

    public function works()
    {
        return $this->hasMany(ServiceProviderWork::class,"service_provider_id");
    }
}
