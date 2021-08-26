<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Category;
use App\Models\sub_Category;
use App\Models\item;
use App\Models\Brand;

class CategoryPageController extends Controller
{
    //
    public function product_category($slug)
    {
        $id = Category::where('slug','=',$slug)->first();

        $checked = '0';

        if(Request::get('sort') == 'price_asc'){
            $product = item::where('sub_category_id','=',$id->id)->orderBy('offer_price','asc')->get();
        }
        elseif(Request::get('sort') == 'price_desc')
        {
            $product = item::where('sub_category_id','=',$id->id)->orderBy('offer_price','desc')->get();
        }

        elseif(Request::get('price') == 'all')
        {
            $checked = 'all';
            $product = item::where('sub_category_id','=',$id->id)->get();
        }

        elseif(Request::get('price') == '0<')
        {
            //$checked = $_GET['filter'];
            //$product = item::whereIn('sub_category_id','=',$id->id)->where('featured','=','1')->get();
            $checked = 'zero';
            $from = '1';
            $to = '10000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }

        elseif(Request::get('price') == '1')
        {
            //$checked = $_GET['filter'];
            //$product = item::whereIn('sub_category_id','=',$id->id)->where('featured','=','1')->get();
            $checked = '1';
            $from = '10000';
            $to = '20000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }


        elseif(Request::get('price') == '2')
        {
            //$checked = $_GET['filter'];
            //$product = item::whereIn('sub_category_id','=',$id->id)->where('featured','=','1')->get();
            $checked = '2';
            $from = '20000';
            $to = '30000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }

        elseif(Request::get('price') == '3')
        {

            $checked = '3';
            $from = '30000';
            $to = '40000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }


        elseif(Request::get('price') == '4')
        {
            $checked = '4';
            $from = '40000';
            $to = '50000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }

        elseif(Request::get('price') == '5')
        {

            $checked = '5';
            $from = '50000';
            $to = '60000';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }

        elseif(Request::get('price') == '6')
        {
            //$checked = $_GET['filter'];
            //$product = item::whereIn('sub_category_id','=',$id->id)->where('featured','=','1')->get();
            $checked = '6';
            $from = '60000';
            $to = '99999999';
            $product = item::where('sub_category_id','=',$id->id)->whereBetween('offer_price', [$from, $to])->get();
        }



        else{
            $product = item::where('group_id','=',$id->id)->where('status','=','1')->latest()->paginate(20);
        }


        return view('frontend.new.category')->with('product',$product)->with('category',$id)->with('select',$checked);
    }

    public function product_subcategory($slug)
    {
        $id = Category::where('slug','=',$slug)->first();
        $product = item::where('sub_category_id','=',$id->id)->where('status','=','1')->latest()->paginate(20);

        return view('frontend.new.subcategory')->with('product',$product)->with('subcategory',$id);
    }
    
    public function shop($id)
    {
        $id = User::find($id);
        $product = item::where('vendor_id','=',$id)->where('status','=','1')->latest()->paginate(20);

        return view('frontend.new.shop')->with('product',$product)->with('shop',$id);
    }


    public function product_brand($slug)
    {
        $id = Brand::where('slug','=',$slug)->first();


        $product = item::where('brand_id','=',$id->id)->where('status','=','1')->latest()->paginate(20);



        return view('frontend.new.brand')->with('product',$product)->with('category',$id);
    }
}
