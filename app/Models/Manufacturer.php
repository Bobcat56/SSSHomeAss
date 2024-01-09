<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone'];

    function cars()
    {
        return $this->hasMany(Car::class);
    }
}
