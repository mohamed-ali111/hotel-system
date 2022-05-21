<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\staff1s;
class Staff1sController extends Controller
{
    public function index()
    {
        $Staffs =staff1s::all();
        return view('backstaff.index',compact('Staffs'));
    }
}
