<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    protected $guarded =[];

    public function detail(){
        return $this->hasMany(Attendance::class);
    }
}
