@extends('frontend.new.master')

@section('content')


<!-- Main Container  -->
        <div class="main-container container">


            <form action="{{ ('order') }}" method="POST">
                @csrf

            <div class="row container">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h2 class="title">Checkout</h2>
                    <div class="so-onepagecheckout ">
                        <div class="row">
                        <div class="col-left col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Your Shipping Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">

                                        <div class="form-group required">
                                            <label for="input-payment-company" class="control-label">Name</label>
                                            <input type="text" class="form-control1" id="input-payment-company"  value="{{ Auth::user()->name }}" name="name" required>
                                        </div>

                                        <div class="form-group required">
                                            <label for="input-payment-company" class="control-label">Phone</label>
                                            <input type="text" class="form-control1" id="input-payment-company"  value="{{ Auth::user()->phone }}" name="phone" required>
                                        </div>

                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address</label>
                                            <textarea row="4" name="address" class="form-control1" required>{{ Auth::user()->address }}</textarea>
                                        </div>

                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">City</label>
                                            <input type="text" class="form-control1" id="input-payment-city"  value="{{ Auth::user()->city }}" name="city" required>
                                        </div>


                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-right col-sm-9 mb-4">
                            <div class="row">


                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                        </div>
                                        <div class="panel-body">
                                            @if(isset($cart_data))
                                            @if(Cookie::get('shopping_cart'))
                                             @php $total="0" @endphp

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-center">Image</td>
                                                            <td class="text-left">Product Name</td>
                                                            <td class="text-left">Quantity</td>
                                                            <td class="text-right">Unit Price</td>
                                                            <td class="text-right">Total</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        @foreach ($cart_data as $data)
                                                        <tr>
                                                            <td class="text-center">
                                                                <a href="product.html"><img width="60px" src="{{ asset('uploads/item/'.$data['item_image']) }}" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a>
                                                            </td>
                                                            <td class="text-left">{{ $data['item_name'] }}</td>
                                                            <td class="text-left">
                                                                {{ $data['item_quantity'] }}x
                                                            </td>
                                                            <td class="text-right">{{ number_format($data['item_price']) }}</td>
                                                            <td class="text-right"><strong>{{ number_format($data['item_quantity'] * $data['item_price'], 0) }}</strong></td>
                                                        </tr>
                                                        @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp



                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                            <td class="text-right">{{ number_format($total) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Shipping Rate:</strong></td>
                                                            <td class="text-right">{{ number_format($del_method) }}</td>
                                                        </tr>
                                                        <tr>
                                                            @php $code = App\Models\Coupon::where('code','=',$coupon)->first(); @endphp
                                                            @if($code === NULL)
                                                            @php $back = 0; @endphp
                                                            @else

                                                            @php
                                                            $value = $code->offer;
                                                            $back = ($total*$value)/100;
                                                            @endphp

                                                            <td class="text-right" colspan="4"><strong>You are saving by coupon:</strong></td>
                                                            <td class="text-right"> - {{ number_format($back) }}</td>
                                                            @endif
                                                        </tr>


                                                        <tr>

                                                                @php $gtotal = $total + $del_method - $back @endphp

                                                            <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                            <td class="text-right">{{ number_format($gtotal) }} BDT</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            @endif

                                            @endif
                                        </div>
                                    </div>



                                    <div class="buttons mt-2">
                                        <div class="pull-right">

                                            <input type="hidden" name="price" value="{{ $total }}">
                                            <input type="hidden" name="del_charge" value="{{ $del_method }}">
                                            <input type="hidden" name="wallet_move" value="0">
                                            <input type="hidden" name="coupon_move" value="{{ $back }}">
                                            <input type="hidden" name="gtotal" value="{{ $gtotal }}">


                                            <button type="submit" class="btn btn-primary" id="button-confirm" >Cash On Delivery</button>
                                            

                                            <button type="submit" class="btn btn-success" formaction="{{ url('/pay') }}" formmethod="POST">Payment by SSLCommerz</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Middle Part End -->

            </div>

            </form>


        </div>
        <!-- //Main Container -->


@endsection
