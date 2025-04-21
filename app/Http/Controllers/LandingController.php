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
        $allCategories = Category::get();

        return view('pages.home', [
            'heroBanner' => $heroBanner,
            'productBanner' => $productBanner, 
            'clientLogo' => $clientLogo,
            'categories' => $categories,
            'hotProduct' => $hotProduct,
            'marquee' => [...$allCategories, ...$allCategories]
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function product() {

        if (request()->query('sort') == 'oldest') {
            $product = Product::orderBy('created_at', 'DESC');
        }else {
            $product = Product::orderBy('created_at', 'ASC');
        }

        if (request()->query('category')) {
            $product->where('category_id', request()->query('category'));
        }
        if (request()->query('shape')) {
            $product->where('shape', request()->query('shape'));
        }

        $shapes = [
            ['id' => 'rectangular', 'title' => 'Rectangular'],
            ['id' => 'square', 'title' => 'Square'],
            ['id' => 'round', 'title' => 'Round'],
            ['id' => 'oval', 'title' => 'Oval'],
            ['id' => 'triangle', 'title' => 'Triangle'],
            // ['id' => 'keeper', 'title' => 'Keeper'],
            // ['id' => 'qwality', 'title' => 'Qwality'],
        ];

        $categories = Category::orderBy('title')->get();

        $products = $product->paginate(9);

        return view('pages.product', [
            'categories' => $categories,
            'products' => $products,
            'paginator' => $products->links()['paginator'],
            'shapes'=>$shapes
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
