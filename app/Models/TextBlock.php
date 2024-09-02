<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextBlock extends Model
{
    protected $fillable = ['key', 'content'];

    protected $casts = [
        'content' => 'array', // Преобразование JSON в массив
    ];
}
