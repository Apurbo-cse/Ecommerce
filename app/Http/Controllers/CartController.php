<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class CartController extends Controller
{
    //

    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        //return $cart_data;

        return view('frontend.new.cart')
          ->with('cart_data',$cart_data);
    }



    public function add_to_cart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $size = $request->input('size');
        $test = $request->input('test');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $cart_data[$keys]["size"] = $request->input('size');
                    $cart_data[$keys]["test"] = $request->input('test');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart']);
                }
            }
        }
        else
        {

            $products = item::find($prod_id);
                $prod_name = $products->name;
                $prod_image = $products->photo;
                $priceval = $products->offer_price;
                $vendor_id = $products->vendor_id;
                $category_id = $products->group->cod;

                if($products)
                {
                    $item_array = array(
                        'item_id' => $prod_id,
                        'item_name' => $prod_name,
                        'item_quantity' => $quantity,
                        'size' => $size,
                        'test' => $test,
                        'item_price' => $priceval,
                        'item_image' => $prod_image,
                        'vendor_id' => $vendor_id,
                        'category' => $category_id
                    );
                    $cart_data[] = $item_array;

                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
                }
        }
    }


    public function cartloadbyajax()
    {
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
    }


    public function updatetocart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $prod_id;

            if(in_array($prod_id_is_there, $item_id_list))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $prod_id)
                    {
                        $cart_data[$keys]["item_quantity"] =  $quantity;

                        $ttprice = ($cart_data[$keys]["item_price"] * $quantity);
                        $grandtotal = number_format($ttprice);

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json([
                            'status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated',
                            'gtprice' => ''.$grandtotal.''

                            ]);
                    }
                }
            }
        }
    }


    public function deletefromcart(Request $request)
    {
        $prod_id = $request->input('product_id');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }

    public function clearcart()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'Your Cart is Cleared']);
    }

}
