<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $table = "athlete";
    protected $primaryKey = "id";
    protected $fillable = [
        'name', 'dni', 'phone'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function group(){
        return $this->belongsTo('App\Group',"group_id");
    }
    public function assistance(){
        return $this->hasMany('App\Assistance');
    }



}
