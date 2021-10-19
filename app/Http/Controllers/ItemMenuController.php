<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ItemMenuController extends Controller
{
    //
    public function view(){
        $re=DB::select('select maloaihang,tenloaihang from  loaihangs');
        $na= array();
        foreach($re as $i){
            $na[$i->maloaihang]=$this->loai($i->maloaihang);
        }
       return view('home',['info'=>$re,'list'=>$na]);

    }
    public function loai($l){
        $na=DB::select('select manhasanxuat from  sanphams where maloai=? group by manhasanxuat',[$l]);
        $a=array();
        foreach($na as $n){
            $a[]=$n->manhasanxuat;
        }
        return $a;
       
    }
}
