<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Molequent;

class Item extends Molequent
{
    protected $collection = 'items';
    protected $fillable = ['title', 'description'];
    public $incrementing = false;
}
