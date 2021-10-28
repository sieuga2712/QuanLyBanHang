<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class sanpham extends Model
{
    //
    protected $sanpham=[
        'mahang',
        'maloai',
        'manhasanxuat',
        'name',
        'gia',
        'soluong',
        'mota',
        'image'
    ];

    public static function get_loaihang(){
        $re=DB::select('select maloaihang,tenloaihang from  loaihangs');
        
       return $re;

    }
    public static function get_hang(){
        $re=DB::select('select maloaihang,tenloaihang from  loaihangs');
        $na= array();
        foreach($re as $i){
            $na[$i->maloaihang]=sanpham::loai($i->maloaihang);
        }
       return $na;

    }
    public static function loai($l){
        $na=DB::select('select manhasanxuat from  sanphams where maloai=? group by manhasanxuat',[$l]);
        $a=array();
        foreach($na as $n){
            $a[]=$n->manhasanxuat;
        }
        return $a;
       
    }
    public static function sanphamdt(){
        $na= array();
        foreach($re as $i){
            $na[$i->maloaihang]=sanpham::loai($i->maloaihang);
        }
       return $na;
    }
    public static function listsanpham($li,$maloaih){
        $re=DB::select('select * from  sanphams where manhasanxuat=? and maloai="'.$maloaih.'"  limit 7;',[$li]);
        $na=array();
        foreach($re as $i){
            $na[]=$i->name;
        }
        /*$a=array();
        foreach($na as $n){
            $a[]=$n->manhasanxuat;
        }*/
        
        return $re;
    }
}
