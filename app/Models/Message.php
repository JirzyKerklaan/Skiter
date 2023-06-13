<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{

    protected $fillable = [
        'titel',
        'text',
        'file',
        'user_id'
    ];

    public function getFileAttribute($value)
    {
        return str_replace('public', 'storage', $value);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

}
