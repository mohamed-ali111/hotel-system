<?php

namespace App\Http\Controllers;
use App\Model\Customer;
use App\Model\Id_card_type;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    #####################################################################################
  //create crude
  public function create(){
    $customers = Customer::all();
    $id_card_types = Id_card_type::all();
    return view('backcustomer.create', ['customers'=>$customers , 'id_card_types'=>$id_card_types]);
    //احنا بعتنا الكي والقيمه عشان نستقبلها هناك

}
 

public function save(Request $request){


    $validated = $request->validate([
        'customer_name' => 'required|max:255|min:2',
        'contact_no' => 'required|max:255|min:2',
        'email' => 'required|max:255|min:2',
        'id_card_no' => 'required|max:255|min:2',
        'address' => 'required|max:255|min:1',
        'id_card_type_id' => 'required',

    ]);

    $new = Customer::create([
        'customer_name' => $request->customer_name,
        'contact_no' => $request->contact_no,
        'email' => $request->email,
        'id_card_no' => $request->id_card_no,
        'address' => $request->address,
        'id_card_type_id' => $request->id_card_type_id

    ]);
    return redirect()->route('home')->with('info','product has been updated');
}
#######################################################################################
}
