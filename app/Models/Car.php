<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $guarded = [];
    public function vendeur()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
}
