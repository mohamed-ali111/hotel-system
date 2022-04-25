<?php

namespace App\Model;
use App\Model\Room;

use Illuminate\Database\Eloquent\Model;

class RoomType0 extends Model
{
    protected $fillable =[
        'room_type_name','price','max_person',
    ];

    // Relation ships 
    public function rooms(){
        return $this->hasMany(Room::Class,'roomtype_id','id');
    }
}
