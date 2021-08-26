@extends('frontend.new.master')

@section('content')

    <section class="site-content">
        <div class="container">
            <div class="breadcum-area">
                <div class="breadcum-inner">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('category/'.$data->group->slug) }}">{{ $data->group->name }}</a></li>
                        <li class="breadcrumb-item active">{{ $data->name }}</li>
                    </ol>
                </div>
            </div>
            <div class="product-detail-area">
                <div class="row">
                    <div class="col-12">
                        <div class="detail-area">

<div class="row">


    @include('frontend.new.sidebar')




                                <div class="col-12 col-lg-4">

                                    <div class="no-arrow">
                            <div class="show-zoom" href="{{ asset('uploads/item/'.$data->photo) }}">
                                <img src="{{ asset('uploads/item/'.$data->photo) }}" id="show-img">
                              </div>
                        </div>

                                    <div class="small-img">

                                        <div class="small-container">
                                          <div id="small-img-roll">
                                            <img src="{{ asset('uploads/item/'.$data->photo) }}" class="show-small-img" alt="">
                                            @if($data->photo1)
                                            <img src="{{ asset('uploads/item/extra1/'.$data->photo1) }}" class="show-small-img" alt="">
                                            @endif
                                            @if($data->photo2)
                                            <img src="{{ asset('uploads/item/extra2/'.$data->photo2) }}" class="show-small-img" alt="">
                                            @endif
                                          </div>
                                        </div>

                                      </div>

                                </div>
                                <div class="col-12 col-lg-5 product_data">
                                    <div class="product-summary">
                                        <div class="like-box">
<!--                                        <span class="fa  fa-heart-o  is_liked">-->
<!--                                        	<span class="badge badge-secondary">3</span>-->
<!--                                        </span>-->
                                        </div>
                                        <h3 class="product-title">{{ $data->name }}</h3>
                                        <h4 class=" pcodes"><b>Item Code : </b>SAP-{{ $data->id }}</h4>
                                        @if($data->quantity > 0)
                                        <h3>Stock: <span class="text-success">Available</span></h3>
                                        @else
                                        <h3>Stock: <span class="text-danger">Stock Out</span></h3>
                                        @endif


                                            <span class="price  change_price ">
                                                Price  :  <span class=''> {{ number_format($data->offer_price) }} <span class='price-sign'>Tk</span> </span><br>                                            </span>



<div class="row">

    @if($data->size != NULL)

    <div class="size-box col-md-6">
          <p>Select Size</p>
        <select value="" class="form-control" id="size">
            @foreach ($size as $size)
                <option value="{{ $size }}" class="size">{{ $size }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if($data->color != NULL)
    <div class="size-box col-md-6">
          <p>Select Color</p>
        <select value="" class="form-control" id="test">

            @foreach ($color as $color)
                <option value="{{ $color }}" class="color">{{ $color }}</option>
            @endforeach

        </select>
    </div>
    @endif



</div>

<h6 class="product-title">Quantity</h6>
<div class="input-group quantity " style="width: 40%">

    <span class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
        <span class="btn btn-danger input-group-text">-</span>
    </span>
    <input type="text" class="qty-input form-control text-center" maxlength="2" max="10" value="1" >

    <span class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
        <span class="btn btn-success input-group-text">+</span>
    </span>


</div>


                                                    <div class="buttons details_area prdct_show prdct2998" style="margin-top: 30px; margin-bottom: 20px;">

                                                                            @if($data->quantity < 1)
                                												<button type="button" class="btn btn-secondary stock-out" disabled data-id="2998"><i class="fa fa-shopping-cart"></i> Stock Out </button>
                                                                            @endif
                                                    </div>


                                                    <input type="hidden" class="item_id" value="{{ $data->id }}">

                                                    @if($data->quantity > 0)
                                                    <a class="add-to-cart-btn btn btn-info  details_area_button text-white"> Buy Now </a>
                                                    @endif


                                        <!--<div class="buttons" style="margin-top: 30px;">-->
                                        <!--    <button type="button" class="btn btn-secondary cartadd" data-id=""><i class="fa fa-shopping-cart"></i> কার্ট-এ যোগ করুন </button>-->
                                        <!--    <button type="button" class="btn btn-danger add-wishlist" data-id=""> <i class="fa fa-heart"></i> Add to WishList </button>-->
                                        <!--</div>-->


                                        <div class="col-sm-12 col-xs-12 order_instruction">
                                        	<h4 style="font-weight:bold;color:black"><i class="fa fa-address-book"> </i> Please call if you have any query</h4>
                                        	<div class="col-sm-12 col-xs-12" style="padding:0">
                                        		<h4 style="font-size:25px;margin: 15px 0 15px 0;text-align:center;color:black;font-weight:900;text-align: left"> <i class="fa fa-phone-square" style="padding-left:20px;color: green;"> </i> 0197 0197 222 <br> </h4>
                                        	    <h4 style="font-size:25px;margin: 15px 0 15px 0;text-align:center;color:black;font-weight:900;text-align: left"> <i class="fa fa-phone-square" style="padding-left:20px;color: green;"> </i> 0197 0197 333 <br> </h4>
                                        	</div>
                                        	<div class="col-sm-12 col-md-12  col-xs-12">
                                        		<img style="" class="img-responsive pull-left" src="{{ asset('new/www.egbazar.com/front_asset/d.png') }}" alt="Call azibto" title="Call azibto">
                                        		<h3 class="font-size-title-mobile" style=""> Delivery Charge in Dhaka: Tk 60</h3>
                                        	</div>
                                        	<div class="col-sm-12 col-md-12 col-xs-12">
                                        		<img class="img-responsive pull-left" src="{{ asset('new/www.egbazar.com/front_asset/od.png') }}" alt="Call azibto" title="Call azibto">
                                        		<h3> Delivery Charge Outside Dhaka: Tk 100 </h3>
                                        	</div>

                                        </div>


                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="product-tabs">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="product-desc-tab" data-toggle="tab" href="#product_desc" role="tab" aria-controls="product_desc" aria-selected="true">Products Description</a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="product_desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                                <p class="product-description">
                                                    {!! $data->description !!}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    </div>

                                                <div class="related-product-area">
                            <div class="heading">
                                <h2>Related Products
                                    <!--<small class="pull-right"><a href="#">View All</a></small>-->
                                </h2>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="products products-5x">

                                    @foreach ($related as $data)
                                    <div class="product product_data">
                                        <article>
                                          <a href="{{ url('product/'.$data->slug) }}" >
                                              <div class="thumb"> <img class="img-fluid" src="{{ asset('uploads/item/'.$data->photo) }}" alt="HAMPTON STRAIGHT FIT JEAN"></div>
                                              <!-- <span class="tag text-center"></span> -->
                                              <h2 class="title text-center">{{ $data->name }}</h2>
                                              <!--  -->
                                              <div class="price price-center">
                                                  <span class='price-sign'>৳</span>{{ number_format($data->offer_price) }}
                                              </div>
                                              <div style="text-align: center" class="member-price">
                                                  <span class='member-style'>For Member: </span><span class='price-sign'>৳</span>940
                                              </div>
                                            </a>

                                                                                                            <div class="product-hover prdct3504">
                                            <div class="buttons">
                                                <input class="form-control qty-input" type="hidden" name="quantity" value="1">
                                                <input type="hidden" class="item_id" value="{{ $data->id }}">
                                                @if($data->quantity < 1)
                                                <button type="button" class="" style="padding: 8px 2px;
    font-size: 12px;
    height: 34px;
    background: #c44f4f;
    color: white;
    /* font-size: 12px; */
    font-weight: 600;
    display: block;
    width: 100%;" data-id="3504">Stock Out </button>
                                                @else
                                                <button type="button" class="add-to-cart-btn btn btn-block btn-secondary cartaddprod" data-id="3504">Add to Cart </button>
                                                @endif
                                            </div>

                                        </div>

                                        </article>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 @endsection
