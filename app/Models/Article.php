<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre', 'contenu', 'author_id'
    ];

    function user(){
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
