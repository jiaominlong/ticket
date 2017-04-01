<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['area_name', 'seat_number', 'meetingplace_id'];
    public function meetingplace(){
        return $this->belongsTo('App\Meetingplace');
    }

}
