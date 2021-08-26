<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\item;
use App\Models\Flash;
use Illuminate\Support\Facades\Auth;

use App\Mail\VendorMail;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(){
        $user = User::where('roll_as','=',NULL)->get();
        return view('backend.registered-user')->with('user',$user);
    }

    public function vendor_user(){
        $user = User::where('roll_as','=','vendor')->get();
        return view('backend.registered-user')->with('user',$user);
    }

    public function vendor_apply(){
        $user = User::where('roll_as','=','apply')->get();
        return view('backend.registered-user')->with('user',$user);
    }

    // registered User Edit page
    public function edit($id)
    {
        $user_roll= User::find($id);
        return view('backend.user-edit')->with('user',$user_roll);
    }

    // registered User Edit operation
    public function update(Request $req,$id)
    {
        $user= User::find($id);
        $user->name = $req->input('name');
        $user->roll_as = $req->input('role');
        $user->access = $req->input('access');


        if($req->input('role') == 'vendor')
        {
            $details = [
                'title' => 'Congratulation! Your application as vendor has been approved!',
                'body' => 'Vendor ID: '. $id,
            ];

            Mail::to($user->email)->send(new VendorMail($details));
        }

        $user->update();

        return redirect()->back()->with('status','Updated Successfully');
    }

    function delete($id){
        item::where('vendor_id','=',$id)->delete();
        Orderitem::where('vendor_id','=',$id)->delete();
        User::destroy($id);
        return redirect()->back()->with('status','Deleted Successfully');
    }

    // Order Controlling

    public function admin_order()
    {
        $order= Order::all();
        return view('backend.order.index')->with('order',$order);
    }


    public function admin_order_new()
    {
        $order= Order::where('action','=','New')->get();
        return view('backend.order.index')->with('order',$order);
    }
    public function admin_order_processing()
    {
        $order= Order::where('action','=','Processing')->get();
        return view('backend.order.index')->with('order',$order);
    }
    public function admin_order_shipped()
    {
        $order= Order::where('action','=','Shipped')->get();
        return view('backend.order.index')->with('order',$order);
    }
    public function admin_order_return()
    {
        $order= Order::where('action','=','Return')->get();
        return view('backend.order.index')->with('order',$order);
    }



    //edit order actions

    public function edit_order($id)
    {
        $order = Order::find($id);

        $order_item = Orderitem::where('order_id','=',$order->id)->get();


        return view('backend.order.edit')->with('item',$order)->with('order_item',$order_item);
    }

    public function order_action(Request $req,$id)
    {
        $order = Order::find($id);
        $user = User::where('id','=',$order->user_id)->first();

        $order->action = $req->input('action');

        if($req->input('action') == "Return")
        {
            $user->wallet = $user->wallet + $order->wallet_move;

            $user->update();
        }

        $order->update();

        return redirect()->back()->with('status','Action has updated!');
    }

    function delete_order($id){
        Orderitem::where('order_id','=',$id)->delete();
        Order::destroy($id);
        return redirect()->back()->with('status','Order has Removed Successfully!');
    }

    public function vendor(){
        $user = User::where('roll_as','=','vendor')->get();
        return view('backend.vendor.index')->with('user',$user);
    }

    public function commission(){
        $user = User::where('roll_as','=','vendor')->get();
        return view('backend.vendor.commission')->with('user',$user);
    }

    public function commission_edit($id)
    {
        $commission= User::find($id);
        return view('backend.vendor.commission-edit')->with('user',$commission);
    }

    // registered User Edit operation
    public function commission_update(Request $req,$id)
    {
        $user= User::find($id);
        $user->commission = $req->input('commission');
        $user->paid = $req->input('paid');
        $user->update();

        return redirect()->back()->with('status','Updated Successfully');
    }

    public function order_item(){
        $item = Orderitem::where('collect','=','0')->get();
        return view('backend.order.order_item')->with('item',$item);
    }

    public function collected_item(){
        $item = Orderitem::where('collect','=','1')->get();
        return view('backend.order.collected_item')->with('item',$item);
    }

    public function col_status(Request $req,$id)
    {
        $item= Orderitem::find($id);
        $item->collect = $req->input('collect');

        $total = $item->price * $item->quantity;


        if($req->input('collect') == '1')
        {
            $vendor= User::where('id','=',$item->vendor_id)->first();

            $vendor->total_sell = $vendor->total_sell + $total;

            $vendor->update();
        }

        $item->update();

        return redirect()->back()->with('status','Updated Successfully');
    }


    // Wallet

    public function show_wallet()
    {
        $user = User::where('roll_as','=',NULL)->get();
        return view('backend.wallet.index')->with('user',$user);
    }


    public function update_wallet(Request $req,$id)
    {
        $user= User::find($id);
        $user->wallet = $req->input('wallet');

        $user->update();

        return redirect()->back()->with('status','Wallet Balance Updated Successfully');
    }

    // Flah Sale

    public function flash_sale()
    {
        $item = item::all();
        return view('backend.flash_sale.index')->with('item',$item);
    }

    public function time(Request $req, $id)
    {
        $data= item::find($id);

        if($req->input('flash') == true)
        {
            $data->flash = "1";
        }
        else{
            $data->flash = '0';
        }

        $data->update();

        return redirect()->back()->with('status','Updated Successfully');

    }

    public function date(Request $req)
    {
        $flash= Flash::where('id','=',1)->first();

        $flash->date = $req->input('date');

        $flash->update();

        return redirect()->back()->with('status','Ending date Updated Successfully');

        //return $req;

    }


}
