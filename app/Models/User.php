<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey ='user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    public function borrowing(){
        return $this->hasMany(Borrowing::class, 'user_id');
    }

    public function review(){
        return $this->hasMany(Review::class,'user_id');
    }

    public function bookmarks()
{
    return $this->hasMany(Bookmark::class, 'user_id');
}

}
