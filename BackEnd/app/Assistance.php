<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = 'assistance';
    protected $primaryKey = 'id';
    protected $fillable = [
        'date', 'assisted'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function athlete(){
        return $this->belongsTo("App\Athlete");
    }
}

