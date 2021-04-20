<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function blog(){
      
        $posts = Post::all();
        
        return view('frontend.pages.blog', compact('posts'));
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
    public function our_services(){
        $services = Service:: all();
        return view('frontend.pages.our_services', compact('services'));
    }
    public function appointment_work(){
        return view('frontend.pages.appointment_work');
    }
    public function first_name(){
        return view('frontend.pages.first_name');
    }
    public function email_address(){
        return view('frontend.pages.email_address');
    }
    public function audrey(){
        return view('frontend.pages.audrey');
    }
    public function after_login(){
        return view('frontend.pages.after_login');
    }
    public function gender(){
        return view('frontend.pages.gender');
    }
}
