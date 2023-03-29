<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
   public function index()
   {
    return view('doctor.doctor-add',[
      'get_all_doctor'=>Doctor::all()
    ]);
   }

   public function saveDoctor(Request $request)
   {
      Doctor::doctorStore($request);
      return redirect('/add-doctor')->with('message', "Doctor add successfully");
   }

   public function editDoctor($id)
   {
      return view('doctor.doctor-edit',[
         'get_all_doctor_edit'=>Doctor::find($id)
      ]);
   }

   

   public function updateDoctor(Request $request)
   {
      Doctor::doctorInfoUpdate($request);
      return redirect('/add-doctor');
   }

   public function deleteDoctor($id)
   {
      Doctor::find($id)->delete();
      return redirect('/add-doctor');
   }
}
