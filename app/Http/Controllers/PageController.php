<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product; 
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function about(){
        return view('user.about');
    }

    public function checkout(){
        return view('user.checkout');
    }

    public function contact(){
        return view('user.contact');
    }   
    
    public function faqs(){
        return view('user.faqs');
    }

    public function index(){
        //Lấy dữ liệu sản phẩm, ở mỗi trang sẽ hiện 8 sản phẩm
      $products = Product::select('ProductID', 'ProductName', 'Image', 'PriceCoupon')
                   ->where('ProductStatus', 1)
                   ->paginate(8);
        return view('user.index', ['product' => $products]);
    }

    public function productdetail(){
        return view('user.productdetail');
    }
    
    public function products(){
        return view('user.products');
    }

    public function shoppingcart(){
        return view('user.shoppingcart');
    }

    public function contactconfirm(){
        $data = session('data');
        if(!$data){
            return redirect()->route('contact'); // chua co du lieu se quay lai form ( contact )
        }
        return view('user.contact-confirm', compact('data'));
    }

    public function postcontact(Request $request){
        $data = $request->all(['name', 'email', 'phone', 'message']);
        $data['message'] = strip_tags($data['message']);
        return redirect()->route('contact.confirm')->with('data', $data);
    }
    public function login_user(){
        return view('user.login_user');
    }

}


