<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home() {
        $heroBanner = Banner::where('type', 'hero')->get();
        $productBanner = Banner::where('type', 'product')->get();
        $clientLogo = Logo::all();
        $categories = Category::orderBy('id')->take(4)->get();
        $hotProduct = Product::where('is_hot', 1)->get();

        return view('pages.home', [
            'heroBanner' => $heroBanner,
            'productBanner' => $productBanner, 
            'clientLogo' => $clientLogo,
            'categories' => $categories,
            'hotProduct' => $hotProduct
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function product() {
        $categories = Category::orderBy('title')->get();

        return view('pages.product', [
            'categories' => $categories,
        ]);
    }

    public function single($slug) {
        $product = Product::with('category', 'images')->where('slug', $slug)->first();
        
        if ($product) {
            $relatedProducts = Product::with('category', 'images')->where('category_id',$product->category_id)->where('id', '<>', $product->id)->take(4)->get();
            return view('pages.single', ['product' => $product, 'relatedProducts' => $relatedProducts]);
        }else{
            return abort(404);
        }
    }
}
