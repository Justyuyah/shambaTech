<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'farmer_id',
        'commentable_id'
    ];
    public function commentable()
    {
        return $this->morphTo();
    }

    public function farmer()
    {
        return $this->hasOne('App\Models\Farmer', 'id', 'farmer_id');
    }
}
