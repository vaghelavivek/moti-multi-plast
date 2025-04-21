<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getshapes(){
        return [
            ['id' => 'rectangular', 'title' => 'Rectangular'],
            ['id' => 'square', 'title' => 'Square'],
            ['id' => 'round', 'title' => 'Round'],
            ['id' => 'oval', 'title' => 'Oval'],
            ['id' => 'triangle', 'title' => 'Triangle'],
            ['id' => 'none', 'title' => 'None'],
            // ['id' => 'keeper', 'title' => 'Keeper'],
            // ['id' => 'qwality', 'title' => 'Qwality'],
        ];
    }
    public function show()
    {
        return view('app.product.index');
    }

    public function add()
    {
        $shapes=$this->getshapes();
        return view('app.product.add', ['category' => Category::all(),'shapes'=>$shapes]);
    }

    public function edit($id)
    {
        $shapes=$this->getshapes();
        $product = Product::with('images')->find($id);

        if ($product) {
            return view('app.product.edit', ['product' => $product, 'category' => Category::all(),'shapes'=>$shapes]);
        } else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function remove(Request $request)
    {

        $request->validate([
            'id' => 'required',
        ]);

        $product = Product::find($request->id);

        if ($product) {

            // remove media
            $media = Media::where('product_id', $product->id);

            foreach ($media->get() as $image) {
                unlink(storage_path('app/public/' . $image->link));
            }

            if ($product->delete() && $media->delete()) {
                return response()->json(['success' => 'Product remove successfully.']);
            } else {
                return response()->json(['error' => 'Error']);
            }
        } else {
            return response()->json(['error' => 'Error']);
        }
    }

    public function categoryRemove(Request $request)
    {

        $request->validate([
            'id' => 'required',
        ]);

        $category = Category::find($request->id);

        if ($category->delete()) {
            return response()->json(['success' => 'Category remove successfully.']);
        } else {
            return response()->json(['error' => 'Error']);
        }
    }

    public function categoryEdit($id)
    {
        $category = Category::find($id);

        if ($category) {
            return view('app.category.edit', ['category' => $category]);
        } else {
            return abort('404');
        }
    }

    public function categoryShow()
    {
        return view('app.category.index');
    }

    public function categoryAdd()
    {
        return view('app.category.add');
    }

    public function addAction(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'order_quantity' => 'required|integer',
            // 'slug' => 'required|unique:products|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
            // 'slug' => ["required", $request->id ? '' : "unique:products", "regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/"],
            'category_id' => 'required|integer',
            // 'type' => 'required',
            'shape' => 'required',
            // 'supply_ability' => 'required',
            'media.*' => 'image'
        ]);

        if ($request->id) {
            $product = Product::find($request->id);
        } else {
            $product = new Product();
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->seo_description = $request->seo_description;
        $product->og_seo_description = $request->og_seo_description;
        $product->price = $request->price;

        if ($request->hasFile('thumbnail_media')) {
            $avatar_url = Storage::disk('public')->putFile('products', request()->file('thumbnail_media'), 'public');
            $product->media = $avatar_url;
        }

        $product->order_quantity = $request->order_quantity;
        $product->color = $request->color;
        $product->material = $request->material;
        // $product->slug = $request->slug;
        $product->category_id = $request->category_id;
        $product->type = $request->type;
        $product->shape = $request->shape;
        $product->supply_ability = $request->supply_ability;
        $product->delivery_time = $request->delivery_time;
        $product->is_hot = $request->is_hot == 'on';
        $product->is_reusable = $request->is_reusable ? true :false;
        $product->is_temper_proof = $request->is_temper_proof ? true :false;
        $product->is_material = $request->is_material ? true :false;
        $product->keyword = $request->tag_list;

        if ($product->save()) {

            if ($request->hasFile('media')) {
                foreach ($request->media as $key => $file) {
                    $img_url = Storage::disk('public')->putFile('products', $file, 'public');

                    $media = new Media();
                    $media->product_id = $product->id;
                    $media->link = $img_url;
                    $media->save();

                    // if (!$key) {
                    //     $product->media = $img_url;
                    //     $product->save();
                    // }
                }
            }

            return redirect()->back()->with('success', 'Product added successfully.');
        } else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function addCategoryAction(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        if ($request->id) {
            $category = Category::find($request->id);
        } else {
            $category = new Category();
        }

        $category->title = $request->title;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $avatar_url = Storage::disk('public')->putFile('products', request()->file('image'), 'public');;
            $category->image = $avatar_url;
        } else {
            $category->image = $request->image;
        }

        if ($category->save()) {
            return redirect()->back()->with('success', 'Category added successfully.');
        } else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function productList()
    {
        return Product::with(['category', 'images'])->where('title', 'like', '%' . request()->query('keyword') . '%')->orderBy('id', 'DESC')->paginate(10);
    }

    public function categoryList()
    {
        return Category::where('title', 'like', '%' . request()->query('keyword') . '%')->orderBy('id', 'DESC')->paginate(10);
    }

    public function productLandingList()
    {       
        if (request()->query('sort') == 'oldest') {
            $product = Product::orderBy('created_at', 'DESC');
        }else {
            $product = Product::orderBy('created_at', 'ASC');
        }

        if (request()->query('category')) {
            $product->where('category_id', request()->query('category'));
        }

        return $product->paginate(9);
    }

    public function removeMedia(Request $request)
    {

        $request->validate([
            'media_id' => 'required',
        ]);

        $media = Media::find($request->media_id);

        if ($media->link) {
            unlink(storage_path('app/public/' . $media->link));
        }

        if ($media->delete()) {
            return redirect()->back()->with('remove', 'Media remove successfully.');
        } else {
            return redirect()->back()->with('error', 'Error');
        }
    }
}
