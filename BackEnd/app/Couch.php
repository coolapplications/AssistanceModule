<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couch extends Model
{
    protected $table = 'couch';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'name', 'dni'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
    public function group(){
        return $this->hasMany('App\Group');
    }
}
