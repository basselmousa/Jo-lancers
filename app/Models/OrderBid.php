<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBid extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class,"post_id");
    }

    public function provider()
    {
        return $this->belongsTo(ServiceProvider::class,"service_provider_id");
    }



}
