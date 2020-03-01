<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryModel;

class Country extends Controller
{
    function Country(Request $request){
    return response()->json(CountryModel::get(),200);
    }
}
