<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'id','user_id','filename','title','description','funds','views'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
