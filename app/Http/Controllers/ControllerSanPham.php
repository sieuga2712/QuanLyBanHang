<?php

namespace App\Http\Controllers;

use App\loaihang as AppLoaihang;
use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\loaihang;

class ControllerSanPham extends Controller
{
    public function view(){
        //$this->themsanpham();
    }
    //
    public function themsanpham()
    {
        for ($i = 5; $i < 13; $i++) {
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
        for ($i = 1; $i < 10; $i++) {
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
        for ($i = 1; $i < 10; $i++) {
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
        for ($i = 1; $i < 10; $i++) {
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
        for ($i = 1; $i < 10; $i++) {
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
            for ($i = 1; $i < 5; $i++) {
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
            for ($i = 1; $i < 5; $i++) {
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
            for ($i = 1; $i < 5; $i++) {
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
            for ($i = 1; $i < 5; $i++) {
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
            for ($i = 1; $i < 5; $i++) {
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
                for ($i = 1; $i < 5; $i++) {
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
}
