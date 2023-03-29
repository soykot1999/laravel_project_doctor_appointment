<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appoinment;

class AppoinmentController extends Controller
{
    public function index()
    {
        return view('appoinment.appoinment',[
            'doctor'=>Doctor::all(),
            'department'=>Department::all(),
        ]);
    }

    public function saveapp(Request $request)
    {
        Appoinment::appoinmentStore($request);
      return redirect('/appoinment')->with('message', "Doctor add successfully");

    }
}
