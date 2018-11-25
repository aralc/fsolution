<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $fillable = [
        'id','nome','cnpjCpf','cidade','bairro','rua','cep','numero','descricao'
        
    ];
}

