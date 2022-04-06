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
        
        
        foreach($request->session()->get("cart")->product as $pro){
            $chitiet=new chitietdonhang;
            $chitiet->iddonhang=$idct;
            $chitiet->sanpham=$pro['productinfo']->mahang;
            $chitiet->soluong=$pro['quanty'];
            $sql = DB::update("UPDATE sanphams SET soluong=soluong-".$pro['quanty']." WHERE mahang='".$pro['productinfo']->mahang."'");
            $chitiet->giatien=$pro['price'];
            $chitiet->save();

        }
        $oldcart= Session("cart")?Session("cart"):null; 
        $newcart= new cart($oldcart);
        $newcart->deletecart();
        $request->session()->forget('cart');
         return redirect('home');
        
    }
}
