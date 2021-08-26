<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Cookie;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function profile()
    {
        return view('user.profile');
    }

    function address()
    {
        return view('user.address');
    }

    function updateUserProfile()
    {
        return view('frontend.update-user-profile');
    }

    function edit_address(Request $req)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $user->name = $req->input('name');

        $user->phone = $req->input('phone');
        $user->address = $req->input('address');
        $user->city = $req->input('city');

        $user->update();
        return redirect()->back()->with('status','Your Profile has Updated!');

    }

    function checkout(Request $req)
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $del_method = $req->input('del_method');

        $coupon = $req->input('coupon');

        $use_wallet = $req->input('use_wallet');

        $user = User::where('id','=',Auth::user()->id)->select('wallet')->first();

        return view('frontend.checkout')->with('cart_data', $cart_data)
        ->with('user',$user)
        ->with('del_method', $del_method)
        ->with('use_wallet', $use_wallet)
        ->with('coupon', $coupon);
    }

    function guest_checkout(Request $req)
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $del_method = $req->input('del_method');

        $coupon = $req->input('coupon');

        $use_wallet = $req->input('use_wallet');

        return view('frontend.guest_checkout')->with('cart_data', $cart_data)
        ->with('del_method', $del_method)
        ->with('use_wallet', $use_wallet)
        ->with('coupon', $coupon);
    }

    function account_details()
    {
        return view('user.details');
    }

    function wallet()
    {
        $wallet = User::where('id','=',Auth::user()->id)->select('wallet')->first();
        return view('user.wallet')->with('wallet',$wallet);
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('status','Your Password has changed!');
    }

    function review(Request $req)
    {
        $review = new Review;

        $review->user_name = $req->input('user_name');
        $review->item_id = $req->input('item_id');

        $review->review = $req->input('review');
        $review->ratings = $req->input('rating');

        $review->save();

        return redirect()->back()->with('status','Your review has added!');

    }




}
