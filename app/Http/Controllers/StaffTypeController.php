<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Staff_type;

class StaffTypeController extends Controller
{
    public function index()
{
    $Staff_types =Staff_type::all();
    return view('backstaffstype.index',compact('Staff_types'));
}

}
