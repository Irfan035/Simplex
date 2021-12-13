<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 'email', 'phone', 'cnic','address', 'position', 'LinkedIn', 'aboutUs','Resume', 'available', 'message'
    ];
}
