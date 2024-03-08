<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Borrowing extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'borrowing_id';
    // protected $foreignKey = 'book_id';
    protected $table = 'borrowings';
    protected $fillable = [
        'user_id',
        'book_id',
        'borrowing_date',
        'return_date',
        'book_count',
        'status',
    ];

    public function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
