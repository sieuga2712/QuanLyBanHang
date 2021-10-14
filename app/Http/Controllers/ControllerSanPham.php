<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
class ControllerSanPham extends Controller
{
    //
    public function view(){
        /*for($i=5;$i<13;$i++)
        {   $pr=rand(1,3);
            $p="";
            
            if($pr==1)
                {$p="pro";
                
                }
            elseif($pr==2)
                $p="promax";
            else 
                $p="N";
                
            $sanpham=new sanpham;
            $ma="AP"."_".$i."_".$p;
            if($pr!=3)
                $ten="iphone ".$i." ".$p;
            else
            $ten="iphone ".$i;
            $sanpham->mahang=$ma;
            $sanpham->name=$ten;
            $sanpham->dongia=rand(15,30)*1000000;
            $sanpham->soluong=rand(20,70);
            $sanpham->mota="dien thoai samsung galaxy S".$i;
            $sanpham->save();
            
        }*/
        

    }
}
