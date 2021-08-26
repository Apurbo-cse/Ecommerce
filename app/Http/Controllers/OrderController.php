<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use App\Models\Orderitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use smasif\ShurjopayLaravelPackage\ShurjopayService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
//use PDF;


use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    //
    function user_order(Request $req)
    {
        $order = new Order();
        
        $order->name = $req->input('name');
        $order->address = $req->input('address');
        $order->city = $req->input('city');
        $order->phone = $req->input('phone');
        $order->price = $req->input('price');
        $order->del_charge = $req->input('del_charge');
        $order->coupon_move = $req->input('coupon_move');
        $order->amount = $req->input('gtotal');
        $order->status = 'COD';

        date_default_timezone_set("Asia/Dhaka");
        $order->time =  date("d/m/y h:i:sa");



        $gtotal = $order->amount;

        $order->save();


        $last_order_id = $order->id;

        // order_item, from cookie

        if(Cookie::get('shopping_cart'))
        {

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $items_in_cart = $cart_data;

        foreach($items_in_cart as $data)
        {
            Orderitem::create([
                'order_id' => $last_order_id,
                'item_id' => $data['item_id'],
                'quantity' => $data['item_quantity'],
                'size' => $data['size'],
                'color' => $data['test'],
                'price' => $data['item_price'],
                'vendor_id' => $data['vendor_id']
            ]);
        }


        Cookie::queue(Cookie::forget('shopping_cart'));

    }



        $order = Order::where('id','=',$last_order_id)->get();


        $details = [
            'title' => 'Your Order has confirmed!',
            'body' => $gtotal,
            'order_id' => $last_order_id
        ];



        Mail::to(Auth::user()->email)->send(new TestMail($details));
        //return "Email Has been Sent!!";

        $admin_mail = [
            'title' => 'New Order Alert!',
            'body' => $gtotal,
            'order_id' => $last_order_id
        ];

        Mail::to('shahaliplaza@gmail.com')->send(new TestMail($admin_mail));


        return view('frontend.order_success')->with('order',$order);

    }




    function guest_order(Request $req)
    {
        $order = new Order();

        $order->name = $req->input('name');
        $order->address = $req->input('address');
        $order->city = $req->input('city');
        $order->phone = $req->input('phone');
        $order->price = $req->input('price');
        $order->del_charge = $req->input('del_charge');
        $order->coupon_move = $req->input('coupon_move');
        $order->amount = $req->input('gtotal');
        $order->status = 'COD';

        date_default_timezone_set("Asia/Dhaka");
        $order->time =  date("d/m/y h:i:sa");



        $gtotal = $order->amount;

        $order->save();


        $last_order_id = $order->id;

        // order_item, from cookie

        if(Cookie::get('shopping_cart'))
        {

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $items_in_cart = $cart_data;

        foreach($items_in_cart as $data)
        {
            Orderitem::create([
                'order_id' => $last_order_id,
                'item_id' => $data['item_id'],
                'quantity' => $data['item_quantity'],
                'size' => $data['size'],
                'color' => $data['test'],
                'price' => $data['item_price'],
                'vendor_id' => $data['vendor_id']
            ]);
        }


        Cookie::queue(Cookie::forget('shopping_cart'));

    }

        $order = Order::where('id','=',$last_order_id)->get();


        $details = [
            'title' => 'Your Order has confirmed!',
            'body' => $gtotal,
            'order_id' => $last_order_id
        ];



        //Mail::to($req->input('email'))->send(new TestMail($details));
        //return "Email Has been Sent!!";

        $admin_mail = [
            'title' => 'New Order Alert!',
            'body' => $gtotal,
            'order_id' => $last_order_id
        ];

        Mail::to('shahaliplaza@gmail.com')->send(new TestMail($admin_mail));


        //return "Success on COD";
        return view('frontend.order_success')->with('order',$order);


    }




    function order_success()
    {
        $order = Order::where('user_id','=',Auth::user()->id)->get();

        $order_item = Orderitem::where('user_id','=',Auth::user()->id)->get();


        foreach ($order_item as $data)
        {
            Orderitem::create([
                'user_id' => $data['user_id'],
                'item_id' => $data['item_id'],
                'quantity' => $data['quantity'],
            ]);

            Cart::destroy($data);
        }

        //$id = Cart::where('user_id','=',Auth::user()->id)->get();
        //Cart::destroy($id);

        return view('frontend.order_success')->with('order',$order);
    }

    function m_order_success()
    {
        $order = Order::where('user_id','=',Auth::user()->id)->get();

        $order_item = Orderitem::where('user_id','=',Auth::user()->id)->get();


        foreach ($order_item as $data)
        {
            Orderitem::create([
                'user_id' => $data['user_id'],
                'item_id' => $data['item_id'],
                'quantity' => $data['quantity'],
            ]);

            Cart::destroy($data);
        }

        //$id = Cart::where('user_id','=',Auth::user()->id)->get();
        //Cart::destroy($id);

        return view('frontend.new.mobile.order_success')->with('order',$order);
    }

    function user_order_show()
    {
        $order = Order::where('user_id','=',Auth::user()->id)->latest()->paginate(2);

        return view('user.order')->with('order',$order);
    }

    function admin_invoice($id)
    {
        $order = Order::find($id);

        $order_item = Orderitem::where('order_id','=',$order->id)->get();

        //return view('pdf.invoice')->with('item',$order)->with('order_item',$order_item);

        $data = [
            'item' => $order,
            'order_item' => $order_item
        ];
        $pdf = PDF::loadView('pdf.invoice', $data);

        return $pdf->stream('invoice.pdf');

    }
}
