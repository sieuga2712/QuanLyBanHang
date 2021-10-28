<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use DB;
use PHPUnit\Framework\Constraint\Count;
use session;
class CartController extends Controller
{
    //
    public function index(){
        $products=DB::table('sanphams')->get();
        return view("index",compact("products"));
    }
    public function addcart(Request $req,$id){
        $produc=DB::table('sanphams')->where('mahang',$id)->first();
        if($produc!=null){
            
            $oldcart= Session("cart")?Session("cart"):null; 
            $newcart= new cart($oldcart);
            $newcart->addcart($produc,$id);
            $req->session()->put("cart",$newcart);
            
            
        }
        return view('Layouts/Cart');
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

            
            
        
        return view('Layouts/Cart');
    }
    public function viewcart(){
        return view('Layouts/Cart');
    }
    public function descart(Request $req,$id){
        
            
        $oldcart= Session("cart")?Session("cart"):null; 
        $newcart= new cart($oldcart);
        $newcart->des($id);
       if(Count($newcart->product)>0){
        $req->session()->put("cart",$newcart);
       }
       else{
           $req->session()->forget('cart');
       }

        
        
    
    return view('Layouts/Cart');
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

        
        
    
    return view('Layouts/Cart');
    }
    


}
