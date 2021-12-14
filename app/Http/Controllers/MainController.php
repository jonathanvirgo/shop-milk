<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function getIndex(){
        return view('home.index');
    }

    public function direction(Request $request, $slug){
        switch ($slug) {
            case 'lien-he': return view("post.contact");
            break;
            case 'shop': return view("post.shop");
            break;
            case 'news': return view("post.blog");
            break;
            case 'blog-detail': return view("post.blog-detail");
            break;
            case 'product-detail': return view("post.product-detail");
            break;
            case 'shopping-cart': return view("post.shopping-cart");
            break;
            case 'check-out': return view("post.checkout");
            break;
            default: 
                return view("post.404");
            break;
        }
    }

    public function search(Request $request){

    }
}