<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function couch(){
        return $this->belongsTo('App\Couch');
    }
    public function athlete(){
        return $this->hasMany('App\Athlete');
    }
}
