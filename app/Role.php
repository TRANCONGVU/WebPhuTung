<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    public  function User(){
        return $this->hasMany('Admin\User','level',id);
    }
}
