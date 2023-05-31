<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function currency()
    {
        return $this->belongsTo(Currency::class,"currency_id");
    }

    public function skills()
    {
        return $this->hasMany(PostSkill::class,"post_id");
    }
}
