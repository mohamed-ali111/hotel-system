<?php

namespace App\Http\Controllers;
use App\Model\RoomType0;

use Illuminate\Http\Request;

class RoomType0Controller extends Controller
{
    #####################################################################################
//   create crude
//  public function create(){
//      return view('backroomtype.create');
//  }

public function index()
{
    $room_types =RoomType0::all();
    return view('backroomtype.roomtype',compact('room_types'));
}


 public function create(){

    $typeofrooms = RoomType0::all();
    return view('backroomtype.create', ['typeofrooms'=>$typeofrooms ]);
    //احنا بعتنا الكي والقيمه عشان نستقبلها هناك

}
 

public function save(Request $request){


    $validated = $request->validate([
        'room_type_name' => 'required|max:255|min:2',
        'price' => 'required|min:0',
        'max_person' => 'required|max:255|min:1',
      

    ]);

    $new = RoomType0::create([
        'room_type_name' => $request->room_type_name,
        'price' => $request->price,
        'max_person' => $request->max_person
  
    ]);
    return redirect()->route('home')->with('info','room type has been updated');
}
// #######################################################################################

public function delete(Request $request)
{
    // dd($request->id);
    
    $id=$request->id;
    $features = RoomType0::findOrfail($request->id);


        $features->delete();
        return back()->with('info','product has been added to archeve');
    
}
}
