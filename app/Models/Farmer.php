<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Comment;

class Farmer extends Model implements AuthenticatableContract
{
    use AuthenticableTrait;
    use HasFactory;

    protected $guard = 'farmer';

    protected $fillable = [
        'firstName',
        'lastName',
        'userName',
        'mobileNumber',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // public function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable');
    // }
}
