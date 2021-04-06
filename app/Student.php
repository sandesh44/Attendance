<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable = [
        'student_name', 'student_id','parent_number',
    ];


    public function attendance()
    {
        return $this->hasOne('App\Attendance');
    }
}
