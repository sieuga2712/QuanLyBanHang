<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ItemMenuController extends Controller
{
    //
   public static function View(){
    echo "awsdasaaaaaaaaaaaaaa";
    $re=DB::select('select * from  sanphams   where manhasanxuat="apple" limit 7');
    $na=array();
    foreach($re as $i){
         $na[]=$i;
    }
        echo "<pre>";
    print_r($na);
    
    
    return view("home");
   }
}
