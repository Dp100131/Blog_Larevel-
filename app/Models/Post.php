<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

/**
 * Comandos:
 *
 * php artisan make:model Name -fc// crea el constructor y el factory de una
 * php artisan migrate:refresh --seed // create fakers post
 *
 */
