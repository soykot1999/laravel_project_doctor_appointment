<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public static $store, $update;
    public static function doctorStore($request)
    {
        self::$store = new Doctor();
        self::$store->name = $request->name;
        self::$store->phone = $request->phone;
        self::$store->fee = $request->fee;
        self::$store->save();
    }

    public static function doctorInfoUpdate($request)
    {
        self::$update = Doctor::find($request->doctor_id);
        self::$update->name = $request->name;
        self::$update->phone = $request->phone;
        self::$update->fee = $request->fee;
        self::$update->save();


    }
}
