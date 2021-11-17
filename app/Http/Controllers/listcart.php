<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use DB;
use PHPUnit\Framework\Constraint\Count;
use session;
class listcart extends Controller
{
    //{}
    public function view()
    {
        return view("shoppingcart");
    }
    public function deletecart(Request $req,$id){
        
            
        $oldcart= Session("cart")?Session("cart"):null; 
        $newcart= new cart($oldcart);
        $newcart->deleteproduct($id);
       if(Count($newcart->product)>0){
        $req->session()->put("cart",$newcart);
       }
       else{
           $req->session()->forget('cart');
       }

        
        
    
    return view('Layouts/shopcart');
}
public function descart(Request $req,$id){
        
            
    $oldcart= Session("cart")?Session("cart"):null; 
    $newcart= new cart($oldcart);
    $newcart->desproduct($id);
   if(Count($newcart->product)>0){
    $req->session()->put("cart",$newcart);
   }
   else{
       $req->session()->forget('cart');
   }

    
    

return view('Layouts/shopcart');
}
public function asccart(Request $req,$id){
        
            
    $oldcart= Session("cart")?Session("cart"):null; 
    $newcart= new cart($oldcart);
    $newcart->ascproduct($id);
   if(Count($newcart->product)>0){
    $req->session()->put("cart",$newcart);
   }
   else{
       $req->session()->forget('cart');
   }

    
    

return view('Layouts/shopcart');
}
public function changequanty(Request $req,$id,$sl){
    $oldcart= Session("cart")?Session("cart"):null; 
    $newcart= new cart($oldcart);
    
    $newcart->ChangQuantyProduct($id,$sl);
    if(Count($newcart->product)>0){
        $req->session()->put("cart",$newcart);
       }
       else{
           $req->session()->forget('cart');
       }
    return view('Layouts/shopcart');
}

}


