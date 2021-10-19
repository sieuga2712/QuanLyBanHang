<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khuyenmai;
class khuyenmaiController extends Controller
{
    //
    public function view(){
        $khuyenmai= new khuyenmai;
        $khuyenmai->masanpham="AP_7_N";
        $khuyenmai->giamgia=80;
        $khuyenmai->ngaybatdau="2021/5/12";
        $khuyenmai->ngayketthuc="2021/6/12";
        $khuyenmai->save();
    }
}
