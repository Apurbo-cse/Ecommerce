@extends('frontend.new.master')

@section('content')


<section class="section mb-3 container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(isset($cart_data))
                    @if(Cookie::get('shopping_cart'))
                        @php $total="0" @endphp
                        @if(Auth::user())
                        <form action="checkout" >


                        <div class="shopping-cart">
                            <div class="shopping-cart-table">
                                <div class="table-responsive">
                                    <div class="col-md-12 text-right my-3">

                                            <a href="{{ url('/') }}" class="btn btn-upper btn-warning outer-left-xs">Continue Shopping</a>

                                        <a type="button" href="javascript:void(0)" class="btn btn-danger clear_cart font-weight-bold">Clear Cart</a>
                                    </div>
                                    <table class="table table-bordered my-auto text-center">
                                        <thead>
                                            <tr>
                                                <th class="cart-description">Image</th>
                                                <th class="cart-product-name">Product Name</th>
                                                <th class="cart-price">Price</th>
                                                <th class="cart-qty">Quantity</th>
                                                <th class="cart-qty">Size</th>
                                                <th class="cart-qty">Color</th>
                                                <th class="cart-total">Grandtotal</th>
                                                <th class="cart-romove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody class="my-auto">
                                            @foreach ($cart_data as $data)
                                            <tr class="cartpage">
                                                <th class="cart-image">
                                                    <a class="entry-thumbnail" href="javascript:void(0)">
                                                        <img src="{{ asset('uploads/item/'.$data['item_image']) }}" width="70px" alt="">
                                                    </a>
                                                </th>
                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['item_name'] }}</h5>
                                                </th>
                                                <th class="cart-product-sub-total">
                                                    <span class="cart-sub-total-price">{{ number_format($data['item_price'], 0) }}</span>
                                                </th>
                                                <th class="cart-product-quantity" width="100px">

                                                    <input type="hidden" class="product_id form-control" value="{{ $data['item_id'] }}" >

                                                    <div class="input-group quantity ">

                                                        <span class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                                            <span class="btn btn-danger input-group-text">-</span>
                                                        </span>
                                                        <input type="text" class="qty-input form-control text-center" maxlength="2" max="10" value="{{ $data['item_quantity'] }}" style="width: 100px">




                                                        <span class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                                            <span class="btn btn-success input-group-text">+</span>
                                                        </span>


                                                    </div>

                                                </th>


                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['size'] }}</h5>
                                                </th>

                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['test'] }}</h5>
                                                </th>



                                                <th class="cart-product-grand-total">
                                                    <span class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 0) }}</span>
                                                </th>
                                                <th style="font-size: 20px;">
                                                    <button type="button" class="delete_cart_data btn btn-warning"><i class="fa fa-trash"></i></button>
                                                </th>
                                                @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table><!-- /table -->
                                </div>
                            </div><!-- /.shopping-cart-table -->
                            <div class="row">


                                <div class="col-md-8 col-sm-12 estimate-ship-tax">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading my-2">
                                                    <h5 class="panel-title text-primary"><i class="fa fa-truck"></i> Delivery Method</h5>
                                                </div>
                                                <hr>
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="60" name="del_method" required>
                                                            Flat shipping rate(Entire Dhaka):   <strong>60 BDT </strong></label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                                <input type="radio" value="100" name="del_method">
                                                                Flat shipping rate (Outside Dhaka): <strong>100 BDT </strong></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            
                                        </div>
                                    </div>


                                    <hr>

                                    <div class="panel-body">
                                        <h5 class="my-3">Enter your coupon here</h5>
                                        <div class="input-group">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control1" width="100%">

                                        </div>
                                    </div>



                                </div>



                                <div class="col-md-4 col-sm-12 ">



                                    <div  class="card card-body mt-3">

                                    <div id="totalajaxcall">
                                        <div class="totalpricingload">
                                            <hr>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="cart-grand-name">Total</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="cart-grand-price">
                                                            BDT
                                                            <h5 class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</h5>
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cart-checkout-btn text-center">


                                                        <button type="submit" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</button>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </>
                            </div>

                        </div><!-- /.shopping-cart -->
                    </form>
                    @else
                    <form action="guest_checkout" >


                        <div class="shopping-cart">
                            <div class="shopping-cart-table">
                                <div class="table-responsive">
                                    <div class="col-md-12 text-right my-3">

                                            <a href="{{ url('/') }}" class="btn btn-upper btn-warning outer-left-xs">Continue Shopping</a>

                                        <a type="button" href="javascript:void(0)" class="btn btn-danger clear_cart font-weight-bold">Clear Cart</a>
                                    </div>
                                    <table class="table table-bordered my-auto text-center">
                                        <thead>
                                            <tr>
                                                <th class="cart-description">Image</th>
                                                <th class="cart-product-name">Product Name</th>
                                                <th class="cart-price">Price</th>
                                                <th class="cart-qty">Quantity</th>
                                                <th class="cart-qty">Size</th>
                                                <th class="cart-qty">Color</th>
                                                <th class="cart-total">Grandtotal</th>
                                                <th class="cart-romove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody class="my-auto">
                                            @foreach ($cart_data as $data)
                                            <tr class="cartpage">
                                                <th class="cart-image">
                                                    <a class="entry-thumbnail" href="javascript:void(0)">
                                                        <img src="{{ asset('uploads/item/'.$data['item_image']) }}" width="70px" alt="">
                                                    </a>
                                                </th>
                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['item_name'] }}</h5>
                                                </th>
                                                <th class="cart-product-sub-total">
                                                    <span class="cart-sub-total-price">{{ number_format($data['item_price'], 0) }}</span>
                                                </th>
                                                <th class="cart-product-quantity" width="100px">

                                                    <input type="hidden" class="product_id form-control" value="{{ $data['item_id'] }}" >

                                                    <div class="input-group quantity ">

                                                        <span class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                                            <span class="btn btn-danger input-group-text">-</span>
                                                        </span>
                                                        <input type="text" class="qty-input form-control text-center" maxlength="2" max="10" value="{{ $data['item_quantity'] }}" style="width: 100px">




                                                        <span class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                                            <span class="btn btn-success input-group-text">+</span>
                                                        </span>


                                                    </div>

                                                </th>


                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['size'] }}</h5>
                                                </th>

                                                <th class="cart-product-sub-total">
                                                    <h5 class="cart-sub-total-price">{{ $data['test'] }}</h5>
                                                </th>



                                                <th class="cart-product-grand-total">
                                                    <span class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 0) }}</span>
                                                </th>
                                                <th style="font-size: 20px;">
                                                    <button type="button" class="delete_cart_data btn btn-warning"><i class="fa fa-trash"></i></button>
                                                </th>
                                                @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table><!-- /table -->
                                </div>
                            </div><!-- /.shopping-cart-table -->
                            <div class="row">


                                <div class="col-md-8 col-sm-12 estimate-ship-tax">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading my-2">
                                                    <h5 class="panel-title text-primary"><i class="fa fa-truck"></i> Delivery Method</h5>
                                                </div>
                                                <hr>
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="60" name="del_method" required>
                                                            Flat shipping rate(Entire Dhaka):   <strong>60 BDT </strong></label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                                <input type="radio" value="100" name="del_method">
                                                                Flat shipping rate (Outside Dhaka): <strong>100 BDT </strong></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">

                                        </div>
                                    </div>


                                    <hr>

                                    <div class="panel-body">
                                        <h5 class="my-3">Enter your coupon here</h5>
                                        <div class="input-group">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control1" width="100%">

                                        </div>
                                    </div>



                                </div>



                                <div class="col-md-4 col-sm-12 ">



                                    <div  class="card card-body mt-3">

                                    <div id="totalajaxcall">
                                        <div class="totalpricingload">
                                            <hr>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="cart-grand-name">Total</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="cart-grand-price">
                                                            BDT
                                                            <h5 class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</h5>
                                                        </h6>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cart-checkout-btn text-center">


                                                        <button type="submit" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</button>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                        </div><!-- /.shopping-cart -->
                    </form>

                    @endif

                    @endif
                @else
                    <div class="row">
                        <div class="col-md-12 mycard py-5 text-center">
                            <div class="mycards">
                                <h5>Your cart is currently empty.</h5>
                                <a href="{{ url('/') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div> <!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection
