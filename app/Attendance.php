<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table='attendance';
    protected $fillable=['status'];


    public function students()
    {
        return $this->belongsTo('App\Student');
    }
}
