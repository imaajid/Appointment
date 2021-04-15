<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function projects(){
        return view('frontend.pages.out_projects');
    }
    public function faq(){
        return view('frontend.pages.faq');
    }
    public function hair_loss(){
        return view('frontend.pages.treatment.hair_loss');
    }
    public function premature_ejaculation(){
        return view('frontend.pages.treatment.premature_ejaculation');
    }   
    public function erectile_dysfunction(){
        return view('frontend.pages.treatment.erectile_dysfunction');
    }
    public function login_modal(){
        return view('frontend.pages.login');
    }
    public function products(){
        $products = Product::all();
       
        return view('frontend.pages.products.product',compact('products'));
    }
    public function products_list($id){
        $products = Product::findOrFail($id);
      return view('frontend.pages.products.product_detail',compact('products'));
    }
    public function cart(){
      
        return view('frontend.pages.products.cart');
    }
      public function checkout(){
      
        return view('frontend.pages.products.checkout');
    }


}
