<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Room;
use App\Model\RoomType0;

class RoomController extends Controller
{

    public function index()
{
    $rooms = Room::all();
    return view('backroom.index',compact('rooms'));
}


 // public function create(){
    //     return view('backbooking.create');
    // }
    public function create(){
        // $bookingRooms = Room::all();
        $roomType0s = RoomType0::all();
        // $customers = Customer::all();

        $rooms = Room::all();

        return view('backroom.createroom', ['rooms'=>$rooms , 'roomType0s'=>$roomType0s ]);
        //احنا بعتنا الكي والقيمه عشان نستقبلها هناك
    
    }
     
    
    public function save(Request $request){
    
    
        $validated = $request->validate([
            'room_no' => 'required|max:255|min:2',
            'status' => 'required|max:255|min:1',
            'check_in_status' => 'required|max:255|min:1',
            'check_out_status' => 'required|max:255|min:1',
            'delete_status' => 'required|max:255|min:1',
            'roomtype_id' => 'required',

    
        ]);
    
        $new = Room::create([
            'room_no' => $request->room_no,
            'status' => $request->status,
            'check_in_status' => $request->check_in_status,
            'check_out_status' => $request->check_out_status,
            'delete_status' => $request->delete_status,
            'roomtype_id' => $request->roomtype_id

        ]);
        return redirect()->route('home')->with('info','room type has been updated');
    }
    // #######################################################################################
    }
