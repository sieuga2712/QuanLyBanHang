<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //
    public $product=array();
    public $totalprice=0;
    public  $totalpro=0;

    public function __construct($cart)
    {
        if($cart){
            $this->product=$cart->product;
            $this->totalprice=$cart->totalprice;
            $this->totalpro=$cart->totalpro;
        }
    }
    public function addcart($pro,$id)
    {   
        $newproduct=array('quanty' => 0,'price' => $pro->dongia,'productinfo' => $pro);
        if($this->product){
            if(array_key_exists($id,$this->product)){
                    $newproduct=$this->product[$id];

            }
        }
        $newproduct['quanty']++;
        $newproduct['price']=$newproduct['quanty']*$pro->dongia;
        $this->product[$id]=$newproduct;
        $this->totalprice+=$pro->dongia;
        $this->totalpro++;

        
    }
    public function deleteproduct($id){
        $this->totalpro-=$this->product[$id]['quanty'];
        $this->totalprice-=$this->product[$id]['price'];
        unset($this->product[$id]);
    }

        public function desproduct($id){
            if( $this->product[$id]['quanty']>1)
            {
            $this->totalpro--;
            $this->product[$id]['quanty']--;
            $this->product[$id]['price']=$this->product[$id]['productinfo']->dongia* $this->product[$id]['quanty'];
            $this->totalprice-=$this->product[$id]['productinfo']->dongia;
            }
            else
               {
                $this->totalpro-=$this->product[$id]['quanty'];
                $this->totalprice-=$this->product[$id]['price'];
                unset($this->product[$id]);
               }
            
    
        }
        public function ascproduct($id){
            
            $this->totalpro++;
            $this->product[$id]['quanty']++;
            $this->product[$id]['price']=$this->product[$id]['productinfo']->dongia* $this->product[$id]['quanty'];
            $this->totalprice+=$this->product[$id]['productinfo']->dongia;
            
            
    
        }    
    
    
}
