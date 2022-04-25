<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Staff;

class Shift extends Model
{
    protected $fillable =[
       'shift','shift_timing',
    ];

        // Relation ships 
        public function staffs3(){
            return $this->hasMany(Staff::Class,'shift_id','id');
        }
}
