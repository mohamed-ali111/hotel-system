<?php

namespace App\Model;
use App\Model\Booking;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        'customer_name','contact_no','email','id_card_type_id','id_card_no','address',   //هنا انا كتبت customer_id عشان اظهره في الصفحه الادمن وليس حاجه تانيه

    ];

  
              // Relation ships 
             public function bookings2(){
                   return $this->belongsTo(Booking::Class ,'customer_id','id');
                }   
   

            //  Relation ships 
            //  public function idCardType(){
            //     return $this->belongsTo(Id_card_type::Class ,'id_card_type_id','id');
            // }

                // Relation ships 
            public function id_card_types1(){
             return $this->belongsTo(Id_card_type::Class ,'id_card_type_id','id');
    }}
