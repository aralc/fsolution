<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    //
    protected $fillable = [
        'nome','especialidaded'
    ];
}


Schema::create('recursos', function (Blueprint $table) {
    $table->increments('id');
    $table->string('nome',50);
    $table->string('especialidaed',30);
    $table->integer('custoHora');
    $table->char('status',1);
    $table->timestamps();
