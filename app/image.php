<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table ='image';
    protected $primaryKey ='img';
    protected $fillable =['img','vehicle_id'];
    public $incrementing = false;

    public function vehicle(){
        return $this->belogsTo('App\vehicle','vehicle_vcn');
    }
}
