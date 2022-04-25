<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typeofroom;
use App\Model\Staff_type;

class RelationController extends Controller
{
    public function room_types()
    {
        $room_types = Typeofroom::all();
        return view('room_types', compact('room_types'));
    }
    
    public function rooms($room_type_id){
        $room_type = Typeofroom::find($room_type_id);
    
        $rooms = $room_type-> rooms;
        return view('index',compact('rooms'));
    
    }
########################################
########################################
public function staff_types()
{
    $staff_types = Staff_type::all();
    return view('staff_types', compact('staff_types'));
}

public function staffs($staff_type_id){
    $staff_type = Staff_type::find($staff_type_id);

    $staffs = $staff_type-> staffs;
    return view('index',compact('staffs'));

}

########################################
########################################
public function id_card_types()
{
    $id_card_types = Id_card_type::all();
    return view('id_card_types', compact('id_card_types'));
}

public function staffs2($id_card_typeid){
    $staffs2 = Id_card_type::find($id_card_typeid);

    $staffs = $staffs2-> staffs;
    return view('index',compact('staffs'));

}



}
