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
        if($newproduct['productinfo']->soluong<=$newproduct['quanty'])
        {   
            $mess="mat hang nay chi con ".$newproduct['productinfo']->soluong." san pham";
            echo "<script type='text/javascript'>alert('$mess');</script>";

        }
        else
        {
            $newproduct['quanty']++;
            $newproduct['price']=$newproduct['quanty']*$pro->dongia;
        
            $this->product[$id]=$newproduct;
            $this->totalprice+=$pro->dongia;
            $this->totalpro++;
        }
        
    }
    public function deleteproduct($id){
        $this->totalpro-=$this->product[$id]['quanty'];
        $this->totalprice-=$this->product[$id]['price'];
        unset($this->product[$id]);
    }
    public function deletecart(){
        $this->totalpro=0;
        $this->totalprice=0;
        $this->product=array();
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
        public function ChangQuantyProduct($id,$sl){
            $this->totalpro=$this->totalpro - $this->product[$id]['quanty']+  $sl;
            $this->product[$id]['quanty'] = $sl;
            $this->totalprice -= $this->product[$id]['price'];
            $this->product[$id]['price']= $this->product[$id]['productinfo']->dongia* $this->product[$id]['quanty'];
            $this->totalprice += $this->product[$id]['price'];
            
        }   
    
    
}
