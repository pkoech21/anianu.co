<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'whatsapp',
        'social',
        'profile',
        'images',
    ];

    protected $casts = [
        'images' => 'array', // auto decode JSON
    ];
}

