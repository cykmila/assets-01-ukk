<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Book extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'book_id';
    protected $foreignKey = 'category_id';
    protected $table = 'books';
    protected $fillable = [
        'title',
        'stock',
        'category_id',
        'picture',
        'publication',
        'publisher',
        'synopsis',
        'author'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function borrowing(){
        return $this->hasMany(Borrowing::class, 'book_id');
    }

    public function review(){
        return $this->hasMany(Review::class,'book_id');
    }

    public function bookmark(){
        return $this->hasMany(Bookmark::class,'book_id');
    }

}
