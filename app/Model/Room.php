<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\BookingRoom;
use App\Model\RoomType0;

class Room extends Model
{
    protected $fillable =[
        'room_no','status','roomtype_id','check_in_status','check_out_status','delete_status',
    ];
    
    // Relation ships 
    public function roomtype(){
        return $this->belongsTo(RoomType0::Class ,'roomtype_id','id');
    }
    
      // Relation ships 
    //   public function booking(){
    //     return $this->belongsTo(BookingRoom::Class ,'room_id','id');
    // }
}
