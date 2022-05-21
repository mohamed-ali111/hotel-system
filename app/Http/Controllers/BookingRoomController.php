<?php

namespace App\Http\Controllers;
use App\Model\BookingRoom;
use App\Model\RoomType0;
use App\Model\Room;
use App\Model\Customer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BookingRoomController extends Controller
{
    public function index(){
        $bookings = BookingRoom::all();
        $actors =DB::table('booking_rooms')->where('payment_status','=','1')->get();
        return view('backbooking.index' , compact('bookings','actors'));
    }
    // public function create(){
    //     return view('backbooking.create');
    // }
     public function create(){
        $bookingRooms = BookingRoom::all();
        $roomType0s = RoomType0::all();
        $customers = Customer::all();

        $rooms = Room::all();

        return view('backbooking.create', ['bookingRooms'=>$bookingRooms ,
        'roomType0s'=>$roomType0s , 'rooms'=>$rooms,'customers'=>$customers ]);
        //احنا بعتنا الكي والقيمه عشان نستقبلها هناك
    
    }
     
    
    public function save(Request $request){
    
    
        $validated = $request->validate([
            'created_at' => 'required|max:255|min:2',
            'check_in' => 'required|max:255|min:1',
            'check_out' => 'required|max:255|min:1',
            'total_price' => 'required|max:255|min:1',
            'remaining_price' => 'required|max:255|min:1',
            'payment_status' => 'required|max:255|min:1',
            'customer_id' => 'required',
            'room_id' => 'required',
            
            'room_type' => 'required',

    
        ]);
    
        $new = BookingRoom::create([
            'created_at' => $request->created_at,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_price' => $request->total_price,
            'remaining_price' => $request->remaining_price,
            'payment_status' => $request->payment_status,
            'customer_id' => $request->customer_id,
            'room_id' => $request->room_id,
            'room_type' => $request->room_type

        ]);
        return redirect()->route('home')->with('info','room type has been updated');
    }
    // #######################################################################################
                        // delete operations
         public function delete(Request $request)
         {
                  $booking_room = BookingRoom::findOrfail($request-> booking_id);//name of input hidden

                  $booking_room->delete();
                  return redirect()->route('home')->with('toast_success','booking_room has been deleted');
                    
                    
         }    
  #################################################################################################
  public function edit($id){

    $booking_rooms = BookingRoom::all();
    $rooms = Room::all();

    $edit = BookingRoom::findOrfail($id);

    return view ('backbooking.edit',['booking_rooms' => $booking_rooms , 'edit' => $edit ,'rooms'=>$rooms ]);
}       

######################################################################################################
 /////show crud
 public function show($booking_id){
    //there category_id as a paramater from home category
    $booking = BookingRoom::findOrfail($booking_id); //find category or fail
    // return name of page of show ,key and value الي شايله الداتا فووق
    // $actors =DB::table('booking_rooms')->where('payment_status','=','1')->get();
    return view ('backbooking.show',['booking'=>$booking ]);

}

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
                        //    for testing status 
                        public function getproducts( $id){
                            $rooms = DB::table('rooms')->where('roomtype_id',$id)->pluck('room_no','id');//section_id = id =>that is come from rote when you pres on it and pluck product_name with id 
                            return json_encode($rooms);
                        }
                    
}
