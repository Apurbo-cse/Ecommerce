@extends('frontend.new.master')

@section('content')
<section class="carousel-content">
    <div class="container slider_container">
        <div class="row">

            @include('frontend.new.sidebar')


            <div class="col-12 col-lg-9 p-0">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                            <div class="carousel-item active">
                                <a href="#">
                                 <img width="100%" class="first-slide" src="{{ asset('uploads/banner/banner1.jpg') }}" width="100%" alt="banner">
                                </a>
                            </div>

                            @foreach ($banner as $data)
                            <div class="carousel-item">
                                <a href="{{ $data->description }}">
                                 <img width="100%" class="first-slide" src="{{ asset('uploads/banner/'.$data->photo) }}" width="100%" alt="save 20 taka">
                                </a>
                            </div>
                            @endforeach



                    </div>

                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<div class="container items-categories-segments">-->
<!--	<div class="row">-->
<!--		<div class="col-sm-4 col-xs-4 single_featured padding-left">-->
<!--			<a href="#product_categories">-->
<!--				<img src="image_directory/3.png" alt="" />-->
<!--			</a>-->
<!--		</div>-->
<!--		<div class="col-sm-4 col-xs-4 single_featured">-->
<!--			<a href="#services">-->
<!--				<img src="image_directory/5.png" alt="" />-->
<!--			</a>-->
<!--		</div>-->
<!--		<div class="col-sm-4 col-xs-4 single_featured padding-right">-->
<!--			<a href="#featured-items">-->
<!--				<img src="image_directory/1.png" alt="" />-->
<!--			</a>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- ./end of header -->

<section class="products-content" id="carosel_area">
    <div class="container-fuild">
        <div class="container">
            <div class="products-area">
                <!-- heading -->
                <div class="heading">
                    <h2><img src="https://static.ajkerdeal.com/images/deals/flash/hot-deal-logo.gif" alt="hot-deal" class="hot_details_image"/><small class="pull-right"><a href="" > View All</a></small></h2>
                    <!-- <h2>Hot Deals <small class="pull-right"></small></h2> -->
                    <hr>
                </div>
                <div class="row">



        <div class="container" id="carosel">
            <div class="products products-5x">
                <div id="carousel" class='outerWrapper outerWrapper2'>


                                </div>

            </div>
        </div>

                        </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fuild products_categories" id="product_categories">
    <div class="container">
        <div class="products-area">
            <!-- heading -->
            <div class="heading">
                <h2 class="find_all_categories">Find your items by Categories</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="row">
                        <!-- Items -->
                        <div class="products products-5x">

                            @foreach ($root as $data)
                            <div class="product">
                                <div class="blog-post">
                                    <article>
                                        <div class="module">
                                            <a href="{{ url('category/'.$data->slug) }}" class="cat-thumb">
                                                <img class="img-fluid" src="{{ asset('uploads/category/'.$data->photo) }}" alt="Food & Fruits">
                                            </a>
                                            <a href="{{ url('category/'.$data->slug) }}" class="cat-title">
                                                {{ $data->name }}                                               </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fuild products_categories" id="product_brands">
    <div class="container">
        <div class="products-area">
            <!-- heading -->
            <div class="heading">
                <h2 class="find_all_categories">Featured Brands</h2><!-- <small class="pull-right"><a href="categories/" >View All</a></small> -->
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="row">
                        <!-- Items -->
                        <div class="products brands">
                            @foreach ($brand as $data)
                            <div class="product">
                                <div class="blog-post">
                                    <article>
                                        <div class="module">
                                            <a href="{{ url('brand/'.$data->slug) }}" class="cat-thumb">
                                                <img class="img-fluid" src="{{ asset('uploads/brand/'.$data->photo) }}" alt="ACI">
                                            </a>
                                            <a href="brand/ACI/14/1" class="cat-title">
                                                {{ $data->name }}                                                </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@foreach($f_category as $cat)
<section class="products-content" id="featured-items">
    <div class="container">
        <div class="container single_category_products_container">
            <div class="products-area single_category_products">
                <!-- heading -->
                <div class="heading">
                    <h2>{{ $cat->name }}<small class="pull-right"><a href="{{ url('category/'.$cat->slug) }}" >View All</a></small><ca/h2>
                    <!---
                    <hr>
                    @if($cat->photo1)
                        <img src="{{ asset('uploads/category/banner/'.$cat->photo1) }}" width="100%"/>
                    <hr>
                    @endif
                    --->
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <!-- Items -->
                        <div class="row">
                            <div class="products products-3x">
                                @php $item = App\Models\item::where('group_id','=',$cat->id)->where('status','=','1')->latest()->get(); @endphp

                                @php $count = 0 @endphp


                                @foreach($item as $data)
                                <div class="product product_data">
                                    <article>
                                        <a href="{{ url('product/'.$data->slug) }}" >

                                            <div class="thumb"> <img class="img-fluid" src="{{ asset('uploads/item/low/'.$data->photo0) }}" alt="Pure Rice Flour 03 KG"></div>
                                            <!-- <span class="tag text-center"></span> -->
                                            <h2 class="title text-center">{{ $data->name }}</h2>

                                            <div class="price price-center">
                                                <span class='price-sign'>Tk</span>{{ number_format($data->offer_price) }}
                                                @if($data->off > 0 )

                                                    <span class='discount_rate'>-{{ number_format($data->off) }}%</span>
                                                @endif
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

                                @php
                                    if($count++ > 10)
                                    {
                                        break;
                                    }
                                @endphp
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach


@endsection
