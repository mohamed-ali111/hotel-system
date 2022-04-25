<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Staff;
use App\Model\Customer;

class Id_card_type extends Model
{
    protected $fillable =[
       'id_card_type',
    ];
         // Relation ships 
         public function staffs2(){
            return $this->hasMany(Staff::Class,'id_card_typeid','id');
        }


            // Relation ships 
            public function customers2(){
               return $this->hasMany(Customer::Class,'id_card_type_id','id');
           }
}
