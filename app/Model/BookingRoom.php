<?php

namespace App\Model;
use App\Model\Room;
use App\Model\Customer;
use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    protected $fillable =[
       'check_in','check_out','total_price','remaining_price','customer_id','payment_status',
    ];
         // Relation ships 
         public function customers(){
            return $this->hasMany(Customer::Class,'customer_id','id');
        }
    
        // Relation ships 
        public function rooms2(){
            return $this->belongsTo(Room::Class,'room_id','id');
        }}
