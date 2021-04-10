<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'id',
        'content',
        'id_user',
        'id_article'
    ];
}
