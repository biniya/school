<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    protected $fillable = ['name', 'email', 'phone',
        'address', 'type', 'kind_of_school', 'curriculum', 'status','active'];
}
