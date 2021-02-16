<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function cars()
    {
   return $this->hasMany(Car::class);
    }

}
