<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstBlock extends Model
{

    protected $table = 'firstblock';
    protected $fillable = ['title_ru', 'title_en', 'title_tm', 'desc_ru', 'desc_en', 'desc_tm', 'image'];
}


