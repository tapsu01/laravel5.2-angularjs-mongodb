<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Molequent;

class Employee extends Molequent
{
    protected $collection = 'employees';
    protected $fillable = ['name', 'email', 'contact_number', 'position'];
    public $incrementing = false;
}
