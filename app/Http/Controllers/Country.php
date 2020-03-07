<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryModel;
use App\student_family;

class Country extends Controller
{
    function Country(Request $request){
    return response()->json(CountryModel::get(),200);
    }
    function getStudent(Request $request)
    {
        return response()->json(student_family::get(),200);
    }
    function getStudentId(Request $request,$id)
    {
        return response()->json(student_family::find($id));
    }
    function getCountryId(Request $request,$id)
    {
        return response()->json(CountryModel::find($id));
    }
}
