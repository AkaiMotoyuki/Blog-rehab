<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //タイトルと本文の一括代入を許可
    protected $fillable = ['title', 'body'];
}
