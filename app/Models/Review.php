<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Review extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $primaryKey = 'review_id';
    protected $table = 'reviews';
    protected $fillable = [
        'user_id',
        'book_id',
        'review',
        'rating'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class,'book_id');
    }
}
