<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    public function users() {
        return $this->belongsToMany('App\Users');
    }

    protected $table = 'items';


}
