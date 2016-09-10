<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Molequent;

class Comment extends Molequent
{
    protected $collection = 'comments';
    protected $fillable = ['author', 'text'];
    public $incrementing = false;
}
