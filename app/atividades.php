<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atividades extends Model
{
    //
    protected $fillable = [
        'titulo','atividade','custo'
    ];
}

