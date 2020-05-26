<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    //
    protected $table = 'info_users';

    public function user() {
           return $this->belongsTo('App\User');
    }
}
