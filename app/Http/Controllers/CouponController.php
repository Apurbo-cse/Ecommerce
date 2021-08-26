<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    //
    //
    public function show_coupon()
    {
        $data = Coupon::all();
        return view('backend.coupon.index')->with('data',$data);
    }

    public function add_coupon()
    {
        return view('backend.coupon.add');
    }

    public function adding_coupon(Request $req)
    {
        $sub_category = new Coupon();
        $sub_category->name = $req->input('name');
        $sub_category->offer = $req->input('offer');
        $sub_category->code = $req->input('code');

        $sub_category->save();

        return redirect()->back()->with('status','New Coupon Added Successfully!');
    }

    function delete_coupon($id){
        Coupon::destroy($id);
        return redirect()->back()->with('status','Coupon has Deleted Successfully!');
    }
}
