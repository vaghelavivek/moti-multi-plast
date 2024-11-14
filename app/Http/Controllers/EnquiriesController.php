<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    public function show() {
        return view('app.enquiries');
    }

    public function add(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'mobile_number' => 'required|max:12|min:10',
            'message' => 'required',
        ]);

        $enquirie = new Enquiry();
        $enquirie->email = $request->email;
        $enquirie->mobile_number = $request->mobile_number;
        $enquirie->message = $request->message;

        if ($enquirie->save()) {
            return redirect()->back()->with('message', 
            'Thank you for your inquiry. We have received your request for product information and will get back to you shortly.');
        }else {
            return redirect()->back()->with('message', 'Error! Kindly attempt again.');
        }
    }
    public function quickadd(Request $request) {
        $request->validate([
            'mobile_number' => 'required|max:12|min:10',
            'message' => 'required',
        ]);

        $enquirie = new Enquiry();
        // $enquirie->email = $request->email;
        $enquirie->mobile_number = $request->mobile_number;
        $enquirie->message = $request->message;

        if ($enquirie->save()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for your inquiry. We have received your request for product information and will get back to you shortly.'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error! Kindly attempt again.'
            ], 500);
        }
    }

    public function get(){
        if(request()->query('keyword')){
            return Enquiry::where('email', 'like', '%'. request()->query('keyword') .'%')->orderBy('id', 'DESC')->paginate(10);
        }else{
            return Enquiry::orderBy('id', 'DESC')->paginate(10);
        }
    }

    public function approve(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $enquirie = Enquiry::find($request->id);

        if ($enquirie) {
            # code...
            $enquirie->status = 'approve' ;

            if ($enquirie->save()) {
                return redirect()->back()->with('success', 'Inquiry approve successfully.');
            }else {
                return redirect()->back()->with('error', 'Error');
            }
        }

        return redirect()->back()->with('error', 'Data not found');
    }

    public function remove(Request $request) {
        $request->validate([
            'id' => 'required',
        ]);

        $enquirie = Enquiry::find($request->id);

        if ($enquirie->delete()) {
            return redirect()->back()->with('success', 'Inquiry remove successfully.');
        }else {
            return redirect()->back()->with('error', 'Error');
        }
    }
}
