<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public static $store,$update;

    public static function departmentStore($request)
    {

        self::$store = new Department();
        self::$store->name = $request->name;
        self::$store->save();

    }

    public static function departmentInfoUpdate($request)
    {
        self::$update = Department::find($request->department_id);
        self::$update->name = $request->name;
        self::$update->save();


    }

    

}
