<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Molequent;

class Book extends Molequent
{
    protected $collection = 'books';
    protected $fillable = ['title', 'author_name', 'pages_count'];
    public $incrementing = false;
}
