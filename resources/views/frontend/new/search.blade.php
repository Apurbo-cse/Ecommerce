@extends('frontend.new.master')

@section('content')



                        <div id="accordion" class="filters" role="tablist">
                            <!-- <div class="card"> -->
                                <!--<div class="card-header" id="headingOne">-->
                                <!--    <h2 class="title" href="#collapseAccordian1" data-toggle="collapse"-->
                                <!--        aria-expanded="true" aria-controls="collapseAccordian1">All Categories</h2>-->
                                <!--</div>-->
                            <!-- </div>
                            <div class="clearfix"></div>
 -->

                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <!--
                        <div class="shop-banner mb-3">
                            <img class="img-fluid" src="https://secure.agamishop.com/category_image/cat_banca995fb4b8-2020-06-27.webp" alt="Food & Fruits">
                        </div>
                    -->

                                                     <!--<h4 class="mb-2 ml-3 mt-1">Sub Categories</h4>-->




                                        <section class="products-content" id="featured-items">
                                            <div class="container-fuild">
                                                <div class="container single_category_products_container">
                                                    <div class="products-area single_category_products">
                                                        <!-- heading -->
                                                        <div class="heading">
                                                            <h2>Search Item<small class="pull-right"></small></h2>
                                                            <hr>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12">
                                                                <!-- Items -->
                                                                <div class="row">
                                                                    <div class="products products-3x">


                                                                        @foreach ($item as $data)
                                                                        <div class="product product_data">
                                                                            <article>
                                                                                <a href="{{ url('product/'.$data->slug) }}" >

                                                                                    <div class="thumb"> <img class="img-fluid" src="{{ asset('uploads/item/'.$data->photo) }}" alt="Mango (Amropali) 1 kg"></div>
                                                                                    <!-- <span class="tag text-center"></span> -->
                                                                                    <h2 class="title text-center">{{ $data->name }}</h2>

                                                                                    <div class="price price-center">
                                                                                        <span class='price-sign'>Tk</span>{{ number_format($data->offer_price) }}                                                                                                                                                                                            </div>

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
                                                                    <div style="margin-left: auto!important; margin-right: auto">{{ $item->links() }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </section>




@endsection
