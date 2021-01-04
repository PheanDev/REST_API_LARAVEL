<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseResponse extends Controller
{
    protected $code_fail=1;
    protected $code_success=0;
    protected $message_fail="Something went wrong";

    protected function responseSuccess($data){
        $dataResponse['code']=0;
        $dataResponse['message']="success";
        $dataResponse['data']=$data;
        return \response()->json($dataResponse);
    }

    protected function responseFail($code,$message,$data){
        $dataResponse['code']=$code;
        $dataResponse['message']=$message;
        $dataResponse['data']=null;

        return \response()->json($dataResponse);
    }
}
