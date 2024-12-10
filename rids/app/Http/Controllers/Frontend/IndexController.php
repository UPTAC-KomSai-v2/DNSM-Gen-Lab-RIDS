<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ProductDetails(){
        return view('frontend.product.product_details');
    }

    public function MyCart(){
        return view('frontend.mycart.view_mycart');
    }

    public function CheckOut(){
        return view('frontend.checkout.checkout_view');
    }

    public function Equipments(){
        return view('frontend.product.category_view');
    }
}
