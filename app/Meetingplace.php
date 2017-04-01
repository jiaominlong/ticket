<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetingplace extends Model
{
    protected $fillable = ['meetingplace'];
    public function area()
    {
        return $this->hasMany('App\Area');
    }
}
