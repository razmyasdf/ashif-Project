<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $table ='vehicle';
    protected $primaryKey ='vcn';
    protected $fillable =['vcn'];
    public $incrementing = false;

    public function image(){

        return $this->hasMany('App\image');
    }

    public function users(){

        return $this->belongsTo('App\User');
    }
}
