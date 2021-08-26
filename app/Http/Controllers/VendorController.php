<?php

namespace App\Http\Controllers;
use App\Models\item;
use App\Models\Brand;
use App\Models\Orderitem;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\VendorMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class VendorController extends Controller
{
    //

    function login()
    {
        return view('vendor.index');
    }

    function registration()
    {
        return view('vendor.registration');
    }


    function vendor_apply()
    {
        return view('vendor.apply');
    }


    //Product controlling
    public function item()
    {
        $id= Auth::user()->id;

        $data = item::where('vendor_id','=',$id)->get();
        return view('vendor.item.index')->with('item',$data);

    }

     public function add_item()
    {
        $brand = Brand::orderBy('name', 'ASC')->get();
        return view('vendor.item.add')->with('brand',$brand);
    }



    public function adding_item(Request $req)
    {
        $item = new item();
        $item->sub_category_id = $req->input('category_id');
        $item->group_id = $req->input('group_id');
        $item->name = $req->input('name');
        $item->brand_id = $req->input('brand');
        $item->description = $req->input('description');
        $item->price = $req->input('price');
        $item->offer_price = $req->input('offer_price');
        $item->quantity = $req->input('quantity');
        $item->vendor_id = $req->input('vendor_id');
        $item->size = $req->input('size');
        $item->color = $req->input('color');

        $url = $req->input('vendor_id').'-'.$req->input('name');
        $item->slug = str::slug($url,'-');

        // percentage calculation
        $old = $item->price;
        $new = $item->offer_price;

        $off = ($old-$new)*100/$old;

        $item->off = $off;

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/low/'.$item->photo0;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(150,150)
            
            ->save('uploads/item/low/'.$filename, 100);

            $item->photo0 = $filename;
        }

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/'.$item->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/'.$filename, 100);


            //$file->move('uploads/item/', $filename);
            /* insert watermark at bottom-right corner with 10px offset */
            //$file->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10);

            $item->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/item/extra1/'.$item->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra1/'.$filename, 100);

            $item->photo1 = $filename;
        }

        if($req->hasfile('file2'))
        {
            $destination = 'uploads/item/extra2/'.$item->photo2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra2/'.$filename, 100);

            $item->photo2 = $filename;
        }


        $item->save();

        return redirect()->back()->with('status','New item Added Successfully!');

    }

    // editing item
    public function edit_item($id)
    {
        $data = item::find($id);

        return view('vendor.item.edit')->with('product',$data);
    }

    // updating group
    public function update_item(Request $req,$id)
    {
        $data = item::find($id);
        $data->name = $req->input('name');
        $data->brand_id = $req->input('brand');
        $data->description = $req->input('description');
        $data->price = $req->input('price');
        $data->offer_price = $req->input('offer_price');

        // percentage calculation
        $old = $data->price;
        $new = $data->offer_price;

        $off = ($old-$new)*100/$old;

        $data->off = $off;

        $url = $req->input('vendor_id').'-'.$req->input('name');
        $data->slug = str::slug($url,'-');

        $data->quantity = $req->input('quantity');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/low/'.$data->photo0;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(150,150)
            
            ->save('uploads/item/low/'.$filename, 100);


            //$file->move('uploads/item/', $filename);
            /* insert watermark at bottom-right corner with 10px offset */
            //$file->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10);

            $data->photo0 = $filename;
        }

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10)
            ->save('uploads/item/'.$filename, 100);

            $data->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/item/extra1/'.$data->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10)
            ->save('uploads/item/extra1/'.$filename, 100);

            $data->photo1 = $filename;
        }

        if($req->hasfile('file2'))
        {
            $destination = 'uploads/item/extra2/'.$data->photo2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10)
            ->save('uploads/item/extra2/'.$filename, 100);

            $data->photo2 = $filename;
        }

        $data->update();

        return redirect()->back()->with('status','Item has updated Successfully!');
    }

    function delete_item($id){
        Orderitem::where('item_id','=',$id)->delete();
        item::destroy($id);
        return redirect()->back()->with('status','Item has Deleted Successfully!');
    }


    // Order Controlling

    public function vendor_order()
    {
        $id= Auth::user()->id;

        $order = Orderitem::where('vendor_id','=',$id)->get();

        return view('vendor.order.index')->with('order',$order);
    }


    //payment

    public function vendor_payment()
    {
        $sell = User::where('id','=',Auth::user()->id)->first();

        $total = $sell->total_sell;

        $payable = $total-(($sell->commission * $total)/100);

        $due = $payable - $sell->paid;

        return view('vendor.payment')
        ->with('sell',$sell)
        ->with('payable',$payable)
        ->with('due',$due);;
    }

    public function vendor_apply_info(Request $req, $id)
    {
        $data = User::find($id);

        $data->phone = $req->input('phone');
        $data->city = $req->input('city');
        $data->address = $req->input('address');
        $data->nid = $req->input('nid');
        
        $data->shop_name = $req->input('shop_name');
        $data->shop_address = $req->input('shop_address');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/vendor/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            
            Image::make($file)->resize(200,200)
            ->save('uploads/vendor/'.$filename, 100);

            $data->photo = $filename;
        }
        
        if($req->hasfile('file1'))
        {
            $destination = 'uploads/shop/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            Image::make($file)->resize(200,200)
            ->save('uploads/shop/'.$filename, 100);

            $data->photo1 = $filename;
        }
        
        if($req->hasfile('file2'))
        {
            $destination = 'uploads/shop/banner/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            Image::make($file)->resize(250,700)
            ->save('uploads/shop/banner/'.$filename, 100);

            $data->photo2 = $filename;
        }

        $data->update();

        $details = [
            'title' => 'Your Account is under review! You will be notified after approval',
            'body' => '',
        ];

        Mail::to(Auth::user()->email)->send(new VendorMail($details));
        //return "Email Has been Sent!!";

        $mail = Auth::user()->email;

        $admin_mail = [
            'title' => 'A vendor application has been received',
            'body' => 'Vendor Mail: ' . $mail,
        ];


        Mail::to('shaliplaza@gmail.com')->send(new VendorMail($admin_mail));
        //return "Email Has been Sent!!";

        return redirect()->back()->with('status','Information Added! A confirmation mail will be send to your mail after approval.');



    }



}
