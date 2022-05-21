<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $room_types =DB::table('room_type0s')->select('id','room_type_name','price','max_person')->get();

        $bookings =DB::table('booking_rooms')->select('id','check_in','check_out','total_price','customer_id','room_id','remaining_price','payment_status')->get();
        $actors =DB::table('booking_rooms')->where('payment_status','=','1')->get();

        $rooms =DB::table('rooms')->select('id','room_no','status','check_in_status','roomtype_id','check_out_status','delete_status') ->get();
       
        $id_card_types =DB::table('id_card_types')->select('id','id_card_type') ->get();

        // $rooms = Room::all();

        $customers =DB::table('customers')->select('id','customer_name','contact_no','email','id_card_no','address')->get();

       $staff_types =DB::table('staff_types')->get(['id','name','staff_type']);
         
        // $staff_types =Staff_type::all();
        $staffs=DB::table('staff1s')
                    ->leftJoin('staff_types','staff_types.id','=','staff1s.staff_type_id')
                    ->select('staff1s.id','employ_name','shift_id','id_card_no','staff_type_id','id_card_typeid',
                    'address' ,'contact_no','salary','name','staff_type')->get();

        $shifts =DB::table('shifts')->select('id','shift','shift_timing')->get();

// return $staffs ;

return view('home',get_defined_vars());


    //     return view('home' , ['bookings' => $bookings ,'room_types' => $room_types , 'rooms'=>$rooms ,
    // 'customers'=>$customers , 'staff_types'=>$staff_types ,'staffs'=>$staffs ,'shifts'=>$shifts ,
    //  'id_card_types'=>$id_card_types ]);


    }
}
