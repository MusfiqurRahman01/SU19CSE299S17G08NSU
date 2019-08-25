<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subs;


class SubsController extends Controller
{
    public function store(){
        dd('done');
        $info =request()->validate([
               'date'=>'required',
               'user_name'=>'required',
               'user_id'=>'required',
               'prefix'=>'required',
               'department'=>'required',
               'contact'=>'required',
               'semester'=>'required',
               'vehicle_reg'=>'required',
               'car_info'=>'required',
            //    'dlicense'=>'required',
            //    'pphoto'=>'required',
            //    'iphoto'=>'required',
               'signature'=>'required',
           ]);
           Subs::create($info);
          
          dd('done');
       }
}
