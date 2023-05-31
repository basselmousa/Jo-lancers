<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSkill extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function skill()
    {
        return $this->belongsTo(ServiceType::class,"service_type_id");
    }

}
