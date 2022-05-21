<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Id_card_type;

class IdCardTypeController extends Controller
{
    public function index()
    {
        $id_card_types = Id_card_type::all();
        return view('backIdCard.index',compact('id_card_types'));
    }


    public function save(Request $request){
    
    
        $validated = $request->validate([
            'id_card_type' => 'required|max:255|min:2',
     

    
        ]);
    
        $new = Id_card_type::create([
            'id_card_type' => $request->id_card_type
         

        ]);
        return redirect()->route('home')->with('info','room type has been created');
    }
    // #######################################################################################
    

}
