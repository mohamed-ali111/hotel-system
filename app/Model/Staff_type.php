<?php

namespace App\Model;
use App\Model\Staff;

use Illuminate\Database\Eloquent\Model;

class Staff_type extends Model
{
    protected $fillable =[
       'name' ,'staff_type',
    ];
       // Relation ships 
       public function staffs(){
        return $this->hasMany(Staff::Class,'staff_type_id','id');
    }
}
