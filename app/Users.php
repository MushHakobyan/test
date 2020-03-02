<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
