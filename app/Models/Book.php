<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Book extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'books';
    protected $fillable = [
        'title',
        'stock',
        'category_id',
        'publication',
        'publisher',
        'synopsis',
        'rating',
    ];

    
}
