<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\cart;
use App\Models\chitietdonhang;
use App\Models\donhang;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use session;
class thanhtoanController extends Controller
{
    //
    public function view(){

        return view('product.thanhtoan');
    }
    public function create_hoadon(Request $request){

        $que=$request->quequan;
        $dia=$request->diachi;
        
        $email=LoginController::userlogin();
        $donhang =new donhang;
        $donhang->email_user=$email;
        $donhang->tong_gia_tien=$request->session()->get("cart")->totalprice;
        $donhang->trang_thai="chua giao hang";
        $donhang->que_quan=$que;
        $donhang->dia_chi=$dia;
        $donhang->save();
        $idct=$donhang->id;
        $chitiet=new chitietdonhang;
        $chitiet->iddonhang=$idct;
        foreach($request->session()->get("cart")->product as $pro){
            $chitiet->sanpham=$pro['productinfo']->mahang;
            $chitiet->soluong=$pro['quanty'];
            $chitiet->giatien=$pro['price'];
            $chitiet->save();

        }

        return view('product.thanhtoan');
        
    }
}