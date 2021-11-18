<?php

namespace App\Http\Controllers;

use App\loaihang as AppLoaihang;
use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\loaihang;
use DB;
class SanPhamController extends Controller
{
    public function view(){
        //$this->themsanpham();
    }
    public function upda(){
        $sanpham =  DB::select('select * from sanphams ');
        $sanpham->dongia=$sanpham->dongia/1000000;
        $sanpham->save();
    }
    //
    public function themsanpham()
    {
        for ($i = 13; $i < 18; $i++) {
            $sanpham = new sanpham;
            $ten = "iphone " . $i;
            $sanpham->mahang = "DT_IP_" . $i;
            $sanpham->name = $ten;
            $sanpham->maloai = "SMP";
            $sanpham->manhasanxuat = "apple";
            $sanpham->dongia = rand(15, 30) * 1000000;
            $sanpham->soluong = rand(20, 70);
            $sanpham->mota = "dien thoai iphone " . $i;
            $sanpham->save();
        }
        for ($i = 10; $i < 16; $i++) {
            $sanpham = new sanpham;
            $ten = "samsung " . $i;
            $sanpham->mahang = "DT_SS_" . $i;
            $sanpham->name = $ten;
            $sanpham->maloai = "SMP";
            $sanpham->manhasanxuat = "samsung";
            $sanpham->dongia = rand(15, 30) * 1000000;
            $sanpham->soluong = rand(20, 70);
            $sanpham->mota = "dien thoai samsung " . $i;
            $sanpham->save();
        }
        for ($i = 10; $i < 16; $i++) {
            $sanpham = new sanpham;
            $ten = "xiaomi " . $i;
            $sanpham->mahang = "DT_XM_" . $i;
            $sanpham->name = $ten;
            $sanpham->maloai = "SMP";
            $sanpham->manhasanxuat = "xiaomi";
            $sanpham->dongia = rand(15, 30) * 1000000;
            $sanpham->soluong = rand(20, 70);
            $sanpham->mota = "dien thoai xiaomi " . $i;
            $sanpham->save();
        }
        $na = "oppo";
        for ($i = 10; $i < 16; $i++) {
            $sanpham = new sanpham;
            $ten = $na . " " . $i;
            $sanpham->mahang = "DT_oppo_" . $i;
            $sanpham->name = $ten;
            $sanpham->maloai = "SMP";
            $sanpham->manhasanxuat = $na;
            $sanpham->dongia = rand(15, 30) * 1000000;
            $sanpham->soluong = rand(20, 70);
            $sanpham->mota = "dien thoai " . $na . " " . $i;
            $sanpham->save();
        }
        $na = "nokia";
        for ($i = 10; $i < 16; $i++) {
            $sanpham = new sanpham;
            $ten = $na . " " . $i;
            $sanpham->mahang = "DT_nokia_" . $i;
            $sanpham->name = $ten;
            $sanpham->maloai = "SMP";
            $sanpham->manhasanxuat = $na;
            $sanpham->dongia = rand(15, 30) * 1000000;
            $sanpham->soluong = rand(20, 70);
            $sanpham->mota = "dien thoai " . $na . " " . $i;
            $sanpham->save();
        }
        $nam = array("dell", "mac", "hp", "asus", "msi");
        foreach ($nam as $n) {
            for ($i = 5; $i < 15; $i++) {
                $sanpham = new sanpham;
                $ten = $na . " " . $i;
                $sanpham->mahang = "LAP_" . $n . "_" . $i;
                $sanpham->name = $ten;
                $sanpham->maloai = "LAP";
                $sanpham->manhasanxuat = $n;
                $sanpham->dongia = rand(15, 30) * 1000000;
                $sanpham->soluong = rand(20, 70);
                $sanpham->mota = "laptop " . $n . " " . $i;
                $sanpham->save();
            }
        }
        $nam = array("apple", "samsung");
        foreach ($nam as $n) {
            for ($i = 5; $i < 15; $i++) {
                $sanpham = new sanpham;
                $ten = $na . " " . $i;
                $sanpham->mahang = "TAB_" . $n . "_" . $i;
                $sanpham->name = $ten;
                $sanpham->maloai = "TAB";
                $sanpham->manhasanxuat = $n;
                $sanpham->dongia = rand(15, 30) * 1000000;
                $sanpham->soluong = rand(20, 70);
                $sanpham->mota = "tablet " . $n . " " . $i;
                $sanpham->save();
            }
        }
            $na="apple watch";
            for ($i = 5; $i < 15; $i++) {
                $sanpham = new sanpham;
                $ten = $na . " " . $i;
                $sanpham->mahang = "SMW_AW_" . $i;
                $sanpham->name = $na;
                $sanpham->maloai = "SMW";
                $sanpham->manhasanxuat = "apple";
                $sanpham->dongia = rand(15, 30) * 1000000;
                $sanpham->soluong = rand(20, 70);
                $sanpham->mota = "apple watch  " . $i;
                $sanpham->save();
            }
            $na="samsung";
            for ($i = 5; $i < 15; $i++) {
                $sanpham = new sanpham;
                $ten = $na . " " . $i;
                $sanpham->mahang = "SMW_SSW_" . $i;
                $sanpham->name = $na;
                $sanpham->maloai = "SMW";
                $sanpham->manhasanxuat = $na;
                $sanpham->dongia = rand(15, 30) * 1000000;
                $sanpham->soluong = rand(20, 70);
                $sanpham->mota = "dong ho thong minh ".$na." " . $i;
                $sanpham->save();
            }
            $na="xiaomi";
            for ($i = 5; $i < 15; $i++) {
                $sanpham = new sanpham;
                $ten = $na . " " . $i;
                $sanpham->mahang = "SMW_XMW_" . $i;
                $sanpham->name = $na;
                $sanpham->maloai = "SMW";
                $sanpham->manhasanxuat = $na;
                $sanpham->dongia = rand(15, 30) * 1000000;
                $sanpham->soluong = rand(20, 70);
                $sanpham->mota = "dong ho thong minh ".$na." " . $i;
                $sanpham->save();
            }
            $nam = array("accessories", "binoculars","digital");
            foreach ($nam as $n) {
                for ($i = 5; $i < 15; $i++) {
                    $sanpham = new sanpham;
                    $ten = $na . " " . $i;
                    $sanpham->mahang = "CAM_" . $n . "_" . $i;
                    $sanpham->name = $ten;
                    $sanpham->maloai = "CAM";
                    $sanpham->manhasanxuat = $n;
                    $sanpham->dongia = rand(15, 30) * 1000000;
                    $sanpham->soluong = rand(20, 70);
                    $sanpham->mota = "may anh " . $n . " " . $i;
                    $sanpham->save();
                }
            }
        
    }

    public function index($maloaihang, $manhasanxuat)
    {
        $sanpham =  DB::select('select * from sanphams where  maloai=? and manhasanxuat =?',[$maloaihang,$manhasanxuat]);
        return view('product.index',['sanpham'=> $sanpham]);  
    }  
    public function indexs($maloaihang)
    {
        $sanpham = DB::select('select * from sanphams where  maloai=?',[$maloaihang]);
        return view('product.index',['sanpham'=> $sanpham]);  
    }  

    public function detail($id)
    {   $sanpham = DB::select('select * from sanphams where  mahang=?',[$id]);
        $ListRelatedProduct =\App\Models\sanpham::get_ListRelatedProduct($id,7); 
        return view('product.detail',['sanpham'=> $sanpham, 'ListRelatedProduct'=> $ListRelatedProduct]);     
    } 
       
    public function search($inf)
    {      
        $sanpham = DB::table('sanphams')
                    -> leftJoin('loaihangs', 'loaihangs.maloaihang', '=', 'sanphams.maloai')
                    -> leftJoin('nhasanxuats', 'nhasanxuats.manhasanxuat', '=', 'sanphams.manhasanxuat')
                    -> where('sanphams.manhasanxuat', '=', $inf)
                    -> orWhere('sanphams.name', '=', $inf)
                    -> orWhere('loaihangs.tenloaihang', '=', $inf)
                    -> select('*')
                    -> get();
        return view('product.search',['sanpham'=> $sanpham]);
    }  

    public function fillter_price($min, $max)
    {
       $sanpham = DB::select('select * from sanphams where sanphams.dongia between ? and ?', [$min, $max]); 
       //$sanpham = DB::select('select * from sanphams where sanphams.dongia between ? and ? and  maloai=? and manhasanxuat =?', [$maloaihang,$manhasanxuat,$min, $max]); 
         return view('Layouts/products',['sanpham'=> $sanpham]);  
    }
}
