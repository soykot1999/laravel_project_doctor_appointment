<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.department',[
            'get_all_department'=> Department::all()

            
        ]);
    }

    public function saveDepartment(Request $request)
    {

        Department::departmentStore($request);
      return redirect('/department')->with('message', "Department add successfully");
    }


    public function editDepartment($id)
    {
        return view('department.department-edit',[
            'get_all_department_edit'=>Department::find($id)
         ]);

    }




    public function updateDepartment(Request $request)
   {
      Doctor::departmentInfoUpdate($request);
      return redirect('/add-department');
   }


   public function deleteDepartment($id)
   {
      Department::find($id)->delete();
      return redirect('/add-doctor');
   }

  
}
