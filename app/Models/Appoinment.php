<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    public static $store;
    public static function appoinmentStore($request)
    {
        self::$store = new Appoinment();
        self::$store->name = $request->name;
        self::$store->department = $request->department;
        self::$store->doctor = $request->doctor;
        self::$store->fee = $request->fee;
        self::$store->save();
    }

}
