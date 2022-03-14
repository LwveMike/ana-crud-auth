<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
