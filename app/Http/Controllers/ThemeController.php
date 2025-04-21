<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThemeController extends Controller
{
    public function show(){

        $heroBanner = Banner::where('type', 'hero')->get();
        $productBanner = Banner::where('type', 'product')->get();
        $clientLogo = Logo::all();

        return view('app.theme', ['heroBanner' => $heroBanner, 'productBanner' => $productBanner, 'clientLogo' => $clientLogo]);
    }

    public function addBanner(Request $request){
        $request->validate([
            'file_input' => 'required',
        ]);

        if ($request->id) {
            $banner = Banner::find($request->id);

            if (!$banner) {
                $banner = new Banner();
            }
        }else {
            $banner = new Banner();
        }

        if ($request->hasFile('file_input')) {
            $avatar_url = Storage::disk('public')->putFile('banner', request()->file('file_input'), 'public');
            $banner->file = $avatar_url;
        }else {
            $banner->file = $request->file_input;
        }
        if ($request->hasFile('file_input_mobile')) {
            $avatar_url = Storage::disk('public')->putFile('banner', request()->file('file_input_mobile'), 'public');
            $banner->mobile_file = $avatar_url;
        }else {
            $banner->mobile_file = $request->file_input_mobile;
        }

        if ($request->link) {
            $banner->link = $request->link;
        }

        if ($request->isProductBanner) {
            $banner->type = 'product';
        }
        // $banner->save(); 

        if ($banner->save()) {
            return redirect()->back()->with('success', 'Banner added successfully.');
        }else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function removeBanner(Request $request) {

        $banner = Banner::find($request->id);

        if ($banner->file) {
              unlink(storage_path('app/public/' .$banner->file));
        }

        if ($banner && $banner->delete()) {
            return redirect()->back()->with('success', 'Banner remove successfully.');
        }else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function addLogo(Request $request){
        $request->validate([
            'logo_file' => 'required|image',
        ]);

        $logo = new Logo();

        if ($request->hasFile('logo_file')) {
            $logo_url = Storage::disk('public')->putFile('client', request()->file('logo_file'), 'public');;
            $logo->file = $logo_url;
        }

        if ($logo->save()) {
            return redirect()->back()->with('success', 'Client logo added successfully.');
        }else {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function removeLogo(Request $request) {

        $logo = Logo::find($request->id);

        if ($logo->file) {
                unlink(storage_path('app/public/' .$logo->file));
        }

        if ($logo && $logo->delete()) {
            return redirect()->back()->with('success', 'Logo remove successfully.');
        }else {
            return redirect()->back()->with('error', 'Error');
        }
    }
}
