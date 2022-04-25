<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typeofroom;

class RoomtypeController extends Controller
{
    #####################################################################################
//   create crude
//  public function create(){
//      return view('backroomtype.create');
//  }
//  public function create(){

//         $typeofrooms = Typeofroom::all();
//         return view('backroomtype.create', ['typeofrooms'=>$typeofrooms ]);
//         //احنا بعتنا الكي والقيمه عشان نستقبلها هناك
    
//     }
     
    
//     public function save(Request $request){
    
    
//         $validated = $request->validate([
//             'room_type_name' => 'required|max:255|min:2',
//             'price' => 'required|min:0',
//             'max_person' => 'required|max:255|min:1',
          
    
//         ]);
    
//         $new = Typeofroom::create([
//             'room_type_name' => $request->room_type_name,
//             'price' => $request->price,
//             'max_person' => $request->max_person
      
//         ]);
//         return redirect()->route('home')->with('info','room type has been updated');
//     }
    // #######################################################################################
}
