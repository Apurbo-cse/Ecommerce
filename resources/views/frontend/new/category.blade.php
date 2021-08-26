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

                                                     <h3 class="mb-2 ml-3 my-3 text-center">Sub Categories</h3>

                            <div class="container-fuild">
                                <div class="container">
                                    <div class="products-area category_lists_area">
                                        <!-- heading -->

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="row">
                                                    <!-- Items -->
                                                    <div class="products products-4x category_lists">

                                                        @php $subcat = App\Models\Category::select('name','photo','slug')->where('group_id','=',$category->id)->get(); @endphp

                                                        @foreach ($subcat as $data)
                                                        <div class="product single_category">
                                                            <div class="blog-post">
                                                                <article>
                                                                    <div class="module">
                                                                        <a href="{{ url('subcategory/'.$data->slug) }}" class="cat-thumb">
                                                                            <img class="img-fluid" src="{{ asset('uploads/category/'.$data->photo) }}" alt="Fresh Fruits">
                                                                        </a>
                                                                        <a href="{{ url('subcategory/'.$data->slug) }}" class="cat-title">
                                                                            {{ $data->name }}                                                                           </a>
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


                                        <section class="products-content" id="featured-items">
                                            <div class="container-fuild">
                                                <div class="container single_category_products_container">
                                                    <div class="products-area single_category_products">
                                                        <!-- heading -->
                                                        <div class="heading">
                                                            <h2>{{ $category->name }}<small class="pull-right"><a href="../fresh-fruits/974.html" >View All</a></small></h2>
                                                            <hr>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12">
                                                                <!-- Items -->
                                                                <div class="row">
                                                                    <div class="products products-3x">


                                                                        @foreach ($product as $data)
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
                                                                    <div style="margin-left: auto!important; margin-right: auto">{{ $product->links() }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </section>




@endsection
