<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'details',
        'postimage'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function veo()
    {
        return $this->belongsTo('App\Models\Veo');
    }
}
