<!doctype html>
<html>
<!doctype html>
<html class="no-js">


<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shah Ali Plaza</title>
    <meta name="DC.title" content="Shah Ali Plaza" />

    <meta name="facebook-domain-verification" content="h7ne2gd2pqk2vyo2jzb28h4kumqpz2" />

    <meta property="og:image" content="http://localhost:8000/uploads/logo/logo.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:description" content="Shah Ali Plaza"/>
    <meta property="og:title" content="Shah Ali Plaza"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">


    <meta name="description" content="Shah Ali Plaza" />
    <meta name="keywords" content="Shah Ali Plaza" />
    <meta name="theme-color" content="#f36f21"/>
    <base >
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="3JPSlCLuAsQqz0q45T2WeN7G9Z6kX6X88Og2hcNJ">

    <link rel = "icon" href =
"{{ asset('uploads/logo/icon.jpg') }}"
        type = "image/x-icon">

	<link rel="stylesheet" type="text/css" href="{{ asset('new/css/stylea796.css?ver=1.22') }}">
    <link href="{{ asset('new/ecommerce/dist/css/app62b4.css?ver=1.56') }}" media="all" rel="stylesheet" type="text/css" />

    <link href="{{ asset('new/ecommerce/dist/css/owl.carousel.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('new/ecommerce/dist/css/font-awesome.css') }}" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('new/cdn.jsdelivr.net/npm/alertifyjs%401.11.2/build/css/alertify.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('new/cdn.jsdelivr.net/npm/alertifyjs%401.11.2/build/css/themes/default.min.css') }}"/>


    <link href="{{ asset('new/ecommerce/dist/css/responsivefba4.css?ver=1.62') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('new/ecommerce/dist/css/custom-css5f68.css?1.43') }}" media="all" rel="stylesheet" type="text/css" />


    <script>
        var OneSignal = window.OneSignal || [];
    </script>

    <!--- zoom --->
    <link rel="stylesheet" href="{{ asset('assets/zoom/css/zoom-main.css') }}"/>

<style>
    #exzoom {
        width: 400px;
    }
    .hidden { display: none; }
    
    
    table, th, td {
  border: 1px solid gray;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

</style>

<!--Alertify CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/alertify.min.css') }}"/>

<!--- ajax search ----->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <!--------- Facebook Pixel------------->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '143123104417316');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=143123104417316&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>
<!-- ./end of meta -->

<!--dir="rtl"-->

<body dir="ltr">
<!-- header -->



<header id="header-area" class="header-area bg-primary">



    <div class="header-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav id="navbar_0" class="navbar navbar-expand-md navbar-dark navbar-0 p-0">
                        <div class="navbar-brand">
                            <div class="navbar-brand">
        							<i class="fa fa-phone icon-cog" aria-hidden="true" style="color: #fff"></i><span style="color: #fff"> &nbsp; <b>Hotline :</b>  01714-132006 (24/7) </span>
        					</div>
        				    <ul class="navbar-nav" id="header_right_login">
                                                                    <li class="nav-item"> <a href="login.html" class="nav-link -before"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login/Register</a> </li>
                                                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="header-maxi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-3 spaceright-0">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ url('uploads/logo/logo.png') }}" class="site-logo">
                    </a>
                </div>
                <div class="col-12 col-sm-7 col-md-6 px-0">
                    <form class="form-inline" id="search-form" method="POST" action="{{ url('search') }}">
                        @csrf
                        <div class="search-categories">

                            <input type="text" autocomplete="on" name="search" placeholder="Search entire store here..." id="search_text" aria-label="Search">
                            <button type="submit" class="btn btn-secondary search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <div class="suggestion-area"></div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-5 col-md-3 spaceleft-0">
                    <ul class="top-right-list">



                                                   <div id="cartshortsummery">
                                <li class="cart-header dropdown head-cart-content">
                                    <a href="{{ url('newcart') }}">


                                        <span class="basket-item-count number-shopping-cart">
                                            <h5 class="badge badge-pill red">0 </h5>
                                        </span>
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                        <span class="block">

											<span class="items">My Cart</span>

                                        </span>
                                    </a>


                                </li>
                            </div>

                            @guest
                                @if (Route::has('register'))
                                    <li class="cart-header head-cart-content signup">
                                        <a href="{{ route('register') }}">
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                            <span class="block">
                                                <span class="items">Sign Up</span>
                                            </span>
                                        </a>
                                    </li>
                                @endif

                                @if (Route::has('login'))
                                    <li class="cart-header head-cart-content">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            <span class="block">
                                                <span class="items">Login</span>
                                            </span>
                                        </a>
                                    </li>
                                @endif

                                @else
                                <li class="cart-header head-cart-content signup">
                                    @if(Auth::user()->roll_as == "admin")
                                    <a href="{{ url('/dashboard') }}">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span class="block">
                                            <span class="items">{{ Auth::user()->name }}</span>
                                        </span>
                                    </a>
                                    @elseif(Auth::user()->roll_as == "apply")
                                    <a href="{{ url('/vendor-apply-dashboard') }}">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span class="block">
                                            <span class="items">{{ Auth::user()->name }}</span>
                                        </span>
                                    </a>
                                    @elseif(Auth::user()->roll_as == "vendor")
                                    <a href="{{ url('/vendor-dashboard') }}">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span class="block">
                                            <span class="items">{{ Auth::user()->name }}</span>
                                        </span>
                                    </a>
                                    @else
                                    <a href="{{ url('profile') }}">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span class="block">
                                            <span class="items">{{ Auth::user()->name }}</span>
                                        </span>
                                    </a>
                                    @endif
                                </li>


                                <li class="cart-header head-cart-content">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <span class="block">
                                            <span class="items">Logout</span>
                                        </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>


                            @endguest

                        </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="header-navi">
        <div class="container py-auto">
            <div class="row align-items-center ">
                <div class="col-12">
                    <nav id="navbar_1" class="navbar navbar-expand-lg navbar-dark navbar-1 p-0 d-none d-lg-block">
                        <div class="collapse navbar-collapse" id="navbar_collapse_1">
                            <ul class="navbar-nav">
                                <li class="nav-item first"><a href="{{ url('/') }}" class="nav-link">Home</a></li>

                                @php $data = App\Models\Category::where('group_id','=','0')->get(); @endphp

                                @foreach($data as $item)
                                <li class="nav-item dropdown mega-dropdown open" style="position: relative!important">

                                    <a href="{{ url('category/'.$item->slug) }}" class="nav-link dropdown-toggle">{{ $item->name }}</a>

                                    @php $count = App\Models\Category::where('group_id','=',$item->id)->count(); @endphp
                                    @if($count > 0)
                                    <ul class="row dropdown-menu mega-dropdown-menu" style="position: absolute!important">

                                        @php $data = App\Models\Category::where('group_id','=',$item->id)->get(); @endphp

                                        @foreach($data as $item)
                                        <ul class="col-sm-3">
                                            <li class="dropdown-header"><a href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a></li>
                                        </ul>
                                        @endforeach

                                    </ul>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>



    @yield('content')


    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="112980250082867">
      </div>




         <section class="banner-content">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-3 p-0">
                     <div class="banner-single">
                        <div class="panel">
                           <h3 class="fa fa-truck"></h3>
                           <div class="block">
                              <h4 class="title">Fast Shipping</h4>
                              <p>Fast Home Delivery</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 p-0">
                     <div class="banner-single">
                        <div class="panel">
                           <h3 class="fa fa-money"></h3>
                           <div class="block">
                              <h4 class="title">Money Back Guarantee</h4>
                              <p>Conditions Apply</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 p-0">
                     <div class="banner-single second-last">
                        <div class="panel">
                           <h3 class="fa fa-life-ring"></h3>
                           <div class="block">
                              <h4 class="title">Support 24/7</h4>
                              <p>0197 0197 222</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 p-0">
                     <div class="banner-single last">
                        <div class="panel">
                           <h3 class="fa fa-credit-card"></h3>
                           <div class="block">
                              <h4 class="title">Safe Payment</h4>
                              <p>Protect online payment</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--footer section strat-->
         <section class="footer-section">
            <div class="container">

               <div class="row contact-section">
                  <div class="col-md-3">
                     <h5>Contact US</h5>
                     <div class="bottom-line"></div>
                     <div class="single-footer">
                        <ul class="contact-list  pl-0 mb-0">
                           <li> <i class="fa fa-map-marker"></i><span>Corporate Office: Suit # 1406 (13th Floor), Shah Ali Plaza, Section 10, Mirpur, Dhaka - 1216</span> </li>
                           <li> <i class="fa fa-phone"></i><span>0197 0197 222</span> </li>
                           <li> <i class="fa fa-envelope"></i><span> <a href="mailto:info@Shah Ali Plaza.com.bd">info@shahaliplaza.com.bd</a> </span> </li>
                           <li>
                              <p>Saturday - Friday:<span>24/7</span></p>
                           </li>
                        </ul>
                     </div>
                     <div class="widget widget_socials">
                        <div class="socials">
                           <a target="_blank" href="https://www.facebook.com/shahaliplaza"><i class="fa fa-facebook"></i></a>
                           <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                           <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                           <a target="_blank" href="https://www.youtube.com/channel/UCOnzr1YctoiXbWvm8ryCfHg"><i class="fa fa-youtube"></i></a>
                           <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                           <a target="_blank" href="https://www.linkedin.com/company/72310027/"><i class="fa fa-linkedin"></i></a>
                        </div>
                     </div>
                  </div>
				  <div class="col-md-3">
                     <h5>Genaral Terms</h5>
                     <div class="bottom-line"></div>
                     <div class="single-footer">
                        <ul class="links-list pl-0 mb-0">
                           <li> <a href="{{ url('privacy_policy') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy Policy</a> </li>
                           <!-- pages/privacy -->
                           <li> <a href="{{ url('terms&condition') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Term &amp; Condition</a> </li>
                           <!-- pages/terms -->
                           <li> <a href="{{ url('return_policy') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Refund Policy</a> </li>
                           <!-- pages/returnpolicy -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <h5>Seller Options</h5>
                     <div class="bottom-line"></div>
                     <div class="single-footer">
                        <ul class="links-list pl-0 mb-0">
                           <li> <a href="{{ url('terms&condition') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Terms & Condition</a> </li>
                           <!-- pages/privacy -->
                           <li> <a href="{{ url('/vendor_registration') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Become a Seller</a> </li>
                           <!-- pages/terms -->
                           <li> <a href="{{ url('/vendor_login') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Seller Login</a> </li>
                           <!-- pages/returnpolicy -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <h5>our mobile app</h5>
                     <div class="bottom-line"></div>
					<div class="single-footer">
						
						<div class="row">
							<div class="col-md-4">
								<a href="#"> <img src="{{ asset('new/ecommerce/playstore.png') }}"></a>
							</div>
							<div class="col-md-8">
								<a href="#">
									<p>download from the</p>
								</a>
								<a href="#">
									<h4>app store</h4>
							</div>
						</div>
						
					</div>
                  </div>


               </div>

			    <div class="row copyright_developer">

					<div class="col-md-6">
						<p>© shahaliplaza.com.bd - All Rights Reserved.</p>
					</div>
					<div class="col-md-6">
						<p><span >Design & Developed By - <a href="https://www.bceitbpo.com/"><strong>BCE IT BPO</strong></a></span></p>
					</div>

			    </div>



            </div>
            </div>
         </section>
         <!--footer section end-->
         <!--notification-->
		<div class="container">
			<div id="message_content"></div>
			<div id="message_content_success"></div>
			<div id="message_content_error"></div>
			<div class="mobile_bottm_bar">
				<div class="shopping_btn">
				   <a href="{{ url('/') }}"><i class="fa fa-home"></i></a>
				   <a href="{{ url('/') }}">Home</a>
				</div>
				<div class="shopping_btn">
				   <a class="cd-dropdown-trigger" href="#0" style="line-height: 26px!important;"><i class="fa fa-list"></i></a>
				   <a>Categories</a>
				</div>
				<div class="shopping_btn">
				   <a href="{{ url('newcart') }}"><i class="fa fa-shopping-cart"></i></a>
				   <a href="{{ url('newcart') }}">Cart</a>
				</div>
				<div class="shopping_btn">
				   <a href="{{ url('profile') }}"><i class="fa fa-user"></i></a>
				   <a href="{{ url('profile') }}">Account</a>
				</div>
			</div>

					<div class="mobile_bottm_bar">
						<div class="shopping_btn">
							<a href="{{ url('/') }}"><i class="fa fa-home"></i></a>
					<a href="{{ url('/') }}">Home</a>
						</div>
						<div class="shopping_btn">
							<a class="cd-dropdown-trigger" href="#0" style="line-height: 26px!important; after"><i class="fa fa-list"></i></a>
					<a>Categories</a>
						</div>
						<div class="shopping_btn">
							<a href="{{ url('newcart') }}"><i class="fa fa-shopping-cart"></i></a>
					<a href="{{ url('newcart') }}">Cart</a>
						</div>
						<div class="shopping_btn">
							<a href="{{ url('profile') }}"><i class="fa fa-user"></i></a>
					<a href="{{ url('profile') }}">Account</a>
						</div>
					</div>


			<div id="message_content"></div>
			<div id="message_content_success"></div>
			<div id="message_content_error"></div>
		</div>
<!--notification-->

<!--notification-->

<script src="{{ asset('new/ecommerce/dist/js/app.js') }}"></script>

<script>
	/* if ($(window).width() > 700){
		$('.cd-dropdown-trigger').addClass('dropdown-is-active')
		$('.cd-dropdown').addClass('dropdown-is-active')
	} */
</script>

<!--- loader content --->
<!--<div class="loader" id="loader">-->
<!--    <img src="{{ asset('new/ecommerce/dist/images/loader.gif') }}">-->
<!--</div>-->
<!-- all js scripts including custom js -->

<!-- scripts -->

<!-- alertify -->
<script src="{{ asset('new/cdn.jsdelivr.net/npm/alertifyjs%401.11.2/build/alertify.min.js') }}"></script>




<script src="{{ asset('new/ecommerce/dist/js/jquery-ui.js') }}"></script>




   <script src="{{ asset('new/js/modernizr.js') }}"></script>
          <script src="{{ asset('new/js/jquery.menu-aim.js') }}"></script>
          <script src="{{ asset('new/js/maind15e.js?var=1.3') }}"></script>



<script src="{{ asset('new/ecommerce/dist/js/fidvids.js') }}"></script>
<script src="{{ asset('new/ecommerce/dist/js/waltzerjs.min.js') }}"></script>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<script>

$('#carousel').waltzer({
        auto:true,
        autoPause: 3500,
        scroll:2,
        offset:2
    });
$('#carousel1').waltzer({
        auto:true,
        autoPause: 4000,
        scroll:2,
        offset:2
    });

// Basic FitVids Test
$(".container").fitVids();
// Custom selector and No-Double-Wrapping Prevention Test
</script>

<!-- owl carousel -->
<script src="{{ asset('new/ecommerce/dist/js/owl.carousel.js') }}"></script>

<script type="application/javascript">
    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();

    //         document.querySelector(this.getAttribute('href')).scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });

    $('.alert').delay(5000).fadeOut(1000,function () {
        $(this).alert('close');
    });

    alertify.set('notifier','position', 'top-center');


//    jQuery(function() {
//        jQuery( "#datepicker" ).datepicker({
//            changeMonth: true,
//            changeYear: true,
//            maxDate: '0',
//        });
//    });

    jQuery( document ).ready( function () {
        jQuery('#loader').hide();

        OneSignal.push(function () {
            OneSignal.registerForPushNotifications();
            OneSignal.on('subscriptionChange', function (isSubscribed) {
                if (isSubscribed) {
                    OneSignal.getUserId(function (userId) {
                        device_id = userId;
                        //ajax request
                        jQuery.ajax({
                            url: 'subscribeNotification',
                            type: "POST",
                            data: '&device_id='+device_id,
                            success: function (res) {},
                        });

                        //$scope.oneSignalCookie();
                    });
                }
            });

        });

        //load google map


        $.noConflict();

        //stripe_ajax
        jQuery(document).on('click', '#stripe_ajax', function(e){
            jQuery('#loader').css('display','flex');
            jQuery.ajax({
                url: 'stripeForm',
                type: "POST",
                success: function (res) {
                    if(res.trim() == "already added"){
                    }else{
                        jQuery('.head-cart-content').html(res);
                        jQuery(parent).removeClass('cart');
                        jQuery(parent).addClass('active');
                    }
                    message = "Product is added!";
                    notification(message);
                    jQuery('#loader').hide();
                },
            });
        });

        //commeents
        jQuery(document).on('focusout','#order_comments', function(e){
            jQuery('#loader').css('display','flex');
            var comments = jQuery('#order_comments').val();
            jQuery.ajax({
                url: 'commentsOrder',
                type: "POST",
                data: '&comments='+comments,
                async: false,
                success: function (res) {
                    jQuery('#loader').hide();
                },
            });
        });




        //cash_on_delivery_button
        jQuery(document).on('click', '#cash_on_delivery_button', function(e){
            jQuery('#loader').css('display','flex');
            jQuery("#update_cart_form").submit();
        });

        //shipping_mehtods_form
        jQuery(document).on('submit', '#shipping_mehtods_form', function(e){
            jQuery('.error_shipping').hide();
            var checked = jQuery(".shipping_data:checked").length > 0;
            if (!checked){
                jQuery('.error_shipping').show();
                return false;
            }
        });

        //update_cart
        jQuery(document).on('click', '#update_cart', function(e){
            jQuery('#loader').css('display','flex');
            jQuery("#update_cart_form").submit();
        });

        //shipping_data
        jQuery(document).on('click', '.shipping_data', function(e){
            getZonesBilling();
        });

        //billling method
        jQuery(document).on('click', '#same_billing_address', function(e){
            if(jQuery(this).prop('checked') == true){
                jQuery("#billing_firstname").val(jQuery("#firstname").val());
                jQuery("#billing_lastname").val(jQuery("#lastname").val());
                jQuery("#billing_company").val(jQuery("#company").val());
                jQuery("#billing_street").val(jQuery("#street").val());
                jQuery("#billing_city").val(jQuery("#city").val());
                jQuery("#billing_zip").val(jQuery("#postcode").val());
                jQuery("#billing_countries_id").val(jQuery("#entry_country_id").val());
                jQuery("#billing_zone_id").val(jQuery("#entry_zone_id").val());

                jQuery(".same_address").attr('readonly','readonly');
                jQuery(".same_address_select").attr('disabled','disabled');
            }else{
                jQuery(".same_address").removeAttr('readonly');
                jQuery(".same_address_select").removeAttr('disabled');
            }
        });

        //apply_coupon_cart
        jQuery(document).on('submit', '#apply_coupon', function(e){
            jQuery('#coupon_code').remove('error');
            jQuery('#coupon_require_error').hide();
            jQuery('#loader').css('display','flex');

            if(jQuery('#coupon_code').val().length > 0){
                var formData = jQuery(this).serialize();
                jQuery.ajax({
                    url: 'e-commerce-ajax-files/apply_coupon.php',
                    type: "POST",
                    data: formData,
                    success: function (res) {
                        var obj = JSON.parse(res);
                        var message = obj.message;
                        jQuery('#loader').hide();
                        if(obj.success==0){
                            jQuery("#coupon_error").html(message).show();
                            return false;
                        }else if(obj.success==2){
                            jQuery("#coupon_error").html(message).show();
                            return false;
                        }else if(obj.success==1){
                            window.location = window.location.href;
                        }
                    },
                });
            }else{
                jQuery('#loader').css('display','none');
                jQuery('#coupon_code').addClass('error');
                jQuery('#coupon_require_error').show();
                return false;
            }
            jQuery('#loader').hide();
            return false;
        });

        //coupon_code
        jQuery(document).on('keyup', '#coupon_code', function(e){
            jQuery("#coupon_error").hide();
            if(jQuery(this).val().length >0){
                jQuery('#coupon_code').removeClass('error');
                jQuery('#coupon_require_error').hide();
            }else{
                jQuery('#coupon_code').addClass('error');
                jQuery('#coupon_require_error').show();
            }

        });

        //test
        jQuery(document).on('click', '#myFunction', function(e){
            var message = 'sadsad';
            notification(message);
        });


        //change language
        function changeLanguage(locale){
            jQuery('#loader').css('display','flex');
            jQuery.ajax({
                url: 'language',
                type: "POST",
                data: '&locale='+locale,
                //dataType:"json",

                success: function (res) {
                    window.location.reload(true);
                },
            });

        };

        //is_liked
        jQuery(document).on('click', '.is_liked', function(e){
            var products_id = jQuery(this).attr('products_id');
            var selector = jQuery(this);
            jQuery('#loader').css('display','flex');
            var user_count = jQuery('#wishlist-count').html();
            jQuery.ajax({
                url: 'likeMyProduct',
                type: "POST",
                data: '&products_id='+products_id,

                success: function (res) {
                    //jQuery('.head-cart-content').html(res);
                    var obj = JSON.parse(res);
                    var message = obj.message;

                    if(obj.success==0){

                    }else if(obj.success==2){
                        jQuery(selector).removeClass('fa-heart-o');
                        jQuery(selector).addClass('fa-heart');
                        jQuery(selector).children('span').html(obj.total_likes);
                        jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));
                        jQuery(selector).children('.badge').html(obj.total_likes);
                    }else if(obj.success==1){
                        jQuery(selector).removeClass('fa-heart');
                        jQuery(selector).addClass('fa-heart-o');

                        jQuery(selector).children('span').html(obj.total_likes);
                        jQuery('#wishlist-count').html(user_count-1);
                        jQuery(selector).children('.badge').html(obj.total_likes);
                    }
                    jQuery('#loader').hide();
                    notification(message);

                },
            });

        });

        //wishlist_liked
        jQuery(document).on('click', '.wishlist_liked', function(e){
            var products_id = jQuery(this).attr('products_id');
            var selector = jQuery(this).parents('.product').remove();
            jQuery('#loader').css('display','flex');
            var user_count = jQuery('#wishlist-count').html();
            jQuery.ajax({
                url: 'likeMyProduct',
                type: "POST",
                data: '&products_id='+products_id,

                success: function (res) {
                    var obj = JSON.parse(res);
                    var message = obj.message;

                    if(obj.success==0){

                    }else if(obj.success==2){
                        //jQuery(selector).children('span').html(obj.total_likes);
                        jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));
                        //jQuery(selector).children('span').html(obj.total_likes+" Likes");
                    }else if(obj.success==1){
                        //jQuery(selector).addClass(hidden);

                        //jQuery(selector).children('span').html(obj.total_likes);
                        var count = user_count-1;
                        jQuery('#wishlist-count').html(count);

                        if(count==0){
                            jQuery(".loaded_content").hide();
                            jQuery("#loaded_content_empty").show();
                        }else{
                            jQuery('.showing_record').html(count);
                            jQuery('.showing_total_record').html(parseInt(jQuery('.showing_total_record').html())-parseInt(1));
                        }
                        //website.product is not added to your wish list
                        //jQuery(selector).children('span').html(obj.total_likes+" Likes");
                    }
                    jQuery('#loader').hide();
                    notification(message);

                },
            });

        });

        var direction = false;
        //product slider
        jQuery(".owl_featured").owlCarousel({
            margin:10,
            loop:false,
            nav:true,
            rtl:direction,
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
                1199:{
                    items:5
                }
            }
        });


        jQuery("#owl_special").owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            rtl:direction,
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
                1199:{
                    items:5
                }
            }
        });

        jQuery("#owl_liked").owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            rtl:direction,
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
                1199:{
                    items:5
                }
            }
        });

        jQuery("#owl_brands").owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            rtl:direction,
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:1
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
                1199:{
                    items:6
                }
            }
        });

        jQuery( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
        jQuery( ".owl-next").html('<i class="fa fa-angle-right"></i>');


//change_language
        jQuery(document).on('click', '.change_language', function(e){
            jQuery('#loader').css('display','flex');
            var languages_id = jQuery(this).attr('languages_id');
            jQuery.ajax({
                url: 'change_language',
                type: "POST",
                data: '&languages_id='+languages_id,
                success: function (res) {
                    jQuery('#loader').hide();
                },
            });
        });


//sortby
        jQuery(document).on('change', '.sortby', function(e){
            jQuery('#loader').css('display','flex');
            jQuery("#load_products_form").submit();
        });


//load more products
        jQuery(document).on('click', '#load_products', function(e){
            jQuery('#loader').css('display','flex');
            var page_number = jQuery('#page_number').val();
            var total_record = jQuery('#total_record').val();
            var formData = jQuery("#load_products_form").serialize();
            jQuery.ajax({
                url: 'filterProducts',
                type: "POST",
                data: formData,
                success: function (res) {
                    if(jQuery.trim().res==0){
                        jQuery('#load_products').hide();
                        jQuery('#loaded_content').show();
                    }else{
                        page_number++;
                        jQuery('#page_number').val(page_number);
                        jQuery('#listing-products').append(res);
                        var record_limit = jQuery('#record_limit').val();
                        var showing_record = page_number*record_limit;
                        if(total_record<=showing_record){
                            jQuery('.showing_record').html(total_record);
                            jQuery('#load_products').hide();
                            jQuery('#loaded_content').show();
                        }else{
                            jQuery('.showing_record').html(showing_record);
                        }
                    }
                    jQuery('#loader').hide();
                },
            });
        });

//sortby
        jQuery(document).on('change', '.sortbywishlist', function(e){
            jQuery('#loader').css('display','flex');
            jQuery("#load_wishlist_form").submit();
        });


//load more products
        jQuery(document).on('click', '#load_wishlist', function(e){
            jQuery('#loader').css('display','flex');
            var page_number = jQuery('#page_number').val();
            var formData = jQuery("#load_wishlist_form").serialize();
            jQuery.ajax({
                url: 'loadMoreWishlist',
                type: "POST",
                data: formData,
                success: function (res) {

                    if(jQuery.trim().res==0){
                        jQuery('#load_wishlist').hide();
                        jQuery('#loaded_content').show();
                    }else{
                        page_number++;
                        jQuery('#page_number').val(page_number);
                        jQuery('#listing-wishlist').append(res);

                        var record_limit = jQuery('#record_limit').val();
                        var total_record = jQuery('#total_record').val();

                        var showing_record = page_number*record_limit;
                        if(total_record<=showing_record){
                            jQuery('#load_wishlist').hide();
                            jQuery('.showing_record').html(total_record);
                        }else{
                            jQuery('.showing_record').html(showing_record);
                        }
                    }
                    jQuery('#loader').hide();


                    /*if(jQuery.trim().res==0){
                     jQuery('#load_wishlist').hide();
                     jQuery('#loaded_content').show();
                     }else{
                     page_number++;
                     jQuery('#page_number').val(page_number);
                     jQuery('#listing-wishlist').append(res);
                     }
                     jQuery('#loader').hide();*/
                },
            });
        });



//sortbynews
        jQuery(document).on('change', '.sortbynews', function(e){
            jQuery('#loader').css('display','flex');
            jQuery("#load_news_form").submit();
        });

//load more news
        jQuery(document).on('click', '#load_news', function(e){
            jQuery('#loader').css('display','flex');
            var page_number = jQuery('#page_number').val();
            var formData = jQuery("#load_news_form").serialize();
            jQuery.ajax({
                url: 'loadMoreNews',
                type: "POST",
                data: formData,
                success: function (res) {
                    if(jQuery.trim().res==0){
                        jQuery('#load_news').hide();
                        jQuery('#loaded_content').show();
                    }else{
                        page_number++;
                        jQuery('#page_number').val(page_number);
                        jQuery('#listing-news').append(res);

                        var record_limit = jQuery('#record_limit').val();
                        var total_record = jQuery('#total_record').val();
                        //alert(record_limit);
                        var showing_record = page_number*record_limit;
                        if(total_record<showing_record){
                            jQuery('#load_news').hide();
                            jQuery('.showing_record').html(total_record);
                        }else{
                            jQuery('.showing_record').html(showing_record);
                        }
                    }
                    jQuery('#loader').hide();
                },
            });
        });

        /*jQuery(document).on('click', '.filters_box', function(e){
         if (jQuery('input:checkbox.filters_box:checked').length > 0) {
         jQuery('#filters_applied').val(1);
         jQuery('#apply_options_btn').removeAttr('disabled');
         } else {
         jQuery('#filters_applied').val(0);
         jQuery('#apply_options_btn').attr('disabled',true);
         }
         })
         */
        jQuery(document).on('click', '#apply_options_btn', function(e){
            if (jQuery('input:checkbox.filters_box:checked').length > 0) {
                jQuery('#filters_applied').val(1);
                jQuery('#apply_options_btn').removeAttr('disabled');
            } else {
                jQuery('#filters_applied').val(0);
                jQuery('#apply_options_btn').attr('disabled',true);
            }
            jQuery('#load_products_form').submit();

        })

//add-to-Cart with custom options
        jQuery(document).on('click', '.add-to-Cart', function(e){
            jQuery('#loader').css('display','flex');
            var formData = jQuery("#add-Product-form").serialize();
            var url = jQuery('#checkout_url').val();
            var message;
            jQuery.ajax({
                url: 'addToCart',
                type: "POST",
                data: formData,

                success: function (res) {
                    if(res.trim() == "already added"){
                        //notification
                        message = 'Product is added!';
                    }else{
                        jQuery('.head-cart-content').html(res);
                        message = 'Product is added!';
                        jQuery(parent).addClass('active');
                    }
                    if(url.trim()=='true'){
                        window.location.href = 'index.html';
                    }else{
                        jQuery('#loader').css('display','none');
                        //window.location.href = 'viewcart';
                        //message = "Product is added!";
                        //notification(message);
                    }
                },
            });
        });

//update-single-Cart with
        jQuery(document).on('click', '.update-single-Cart', function(e){
            jQuery('#loader').css('display','flex');
            var formData = jQuery("#add-Product-form").serialize();
            var url = jQuery('#checkout_url').val();
            var message;
            jQuery.ajax({
                url: 'updatesinglecart',
                type: "POST",
                data: formData,

                success: function (res) {
                    if(res.trim() == "already added"){
                        //notification
                        message = 'Product is added!';
                    }else{
                        jQuery('.head-cart-content').html(res);
                        message = 'Product is added!';
                        jQuery(parent).addClass('active');
                    }
                    if(url.trim()=='true'){
                        window.location.href = 'index.html';
                    }else{
                        jQuery('#loader').css('display','none');
                        //window.location.href = 'viewcart';
                        //message = "Product is added!";
                        //notification(message);
                    }
                },
            });
        });

//validate form

        jQuery(document).on('submit', '.form-validate', function(e){

            var error = "";

            //to validate text field

            jQuery(".field-validate").each(function() {
                if(this.value == '') {
                    jQuery(this).closest(".form-group").addClass('has-error');
                    jQuery(this).next(".error-content").removeAttr('hidden');
                    error = "has error";
                }else{
                    jQuery(this).closest(".form-group").removeClass('has-error');
                    jQuery(this).next(".error-content").attr('hidden', true);
                }
            });

            /*jQuery(".phone-validate").each(function() {
             if(this.value == '' && isNaN(this.value)) {
             jQuery(this).closest(".form-group").addClass('has-error');
             jQuery(this).next(".error-content").removeAttr('hidden');
             error = "has error";
             }else{
             jQuery(this).closest(".form-group").removeClass('has-error');
             jQuery(this).next(".error-content").attr('hidden', true);
             }
             });*/


            var check = 0;
            jQuery(".password").each(function() {
                var regex = "^\\s+$";
                if(this.value.match(regex)) {
                    jQuery(this).closest(".form-group").addClass('has-error');
                    jQuery(this).next(".error-content").removeAttr('hidden');
                    error = "has error";
                }else{
                    if(check == 1){
                        var res = passwordMatch();

                        if(res=='matched'){
                            jQuery('.password').closest(".form-group").removeClass('has-error');
                            jQuery('#re_password').closest('.re-password-content').children('.error-content-password').add('hidden');
                        }else if(res=='error'){
                            jQuery('.password').closest(".form-group").addClass('has-error');
                            jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');
                            error = "has error";
                        }
                    }else{
                        jQuery(this).closest(".form-group").removeClass('has-error');
                        jQuery(this).next(".error-content").attr('hidden', true);
                    }
                    check++;
                }

            });


            jQuery(".number-validate").each(function() {
                if(this.value == '' || isNaN(this.value)) {
                    jQuery(this).closest(".form-group").addClass('has-error');
                    jQuery(this).next(".error-content").removeAttr('hidden');
                    error = "has error";
                }else{
                    jQuery(this).closest(".form-group").removeClass('has-error');
                    jQuery(this).next(".error-content").attr('hidden', true);
                }
            });



            //

            jQuery(".email-validate").each(function() {

                var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

                if(this.value != '' && validEmail.test(this.value)) {

                    jQuery(this).closest(".form-group").removeClass('has-error');

                    jQuery(this).next(".error-content").attr('hidden', true);



                }else{

                    jQuery(this).closest(".form-group").addClass('has-error');

                    jQuery(this).next(".error-content").removeAttr('hidden');

                    error = "has error";

                }

            });


            jQuery(".checkbox-validate").each(function() {

                if(jQuery(this).prop('checked') == true){
                    jQuery(this).closest(".form-group").removeClass('has-error');
                    jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden', true);
                }else{
                    jQuery(this).closest(".form-group").addClass('has-error');
                    jQuery(this).closest('.checkbox-parent').children('.error-content').removeAttr('hidden');

                    error = "has error";
                }

            });



            if(error=="has error"){

                return false;

            }



        });



//focus form field

        jQuery(document).on('keyup focusout change', '.field-validate', function(e){
            if(this.value == '') {
                jQuery(this).closest(".form-group").addClass('has-error');
                jQuery(this).next(".error-content").removeAttr('hidden');
            }else{
                jQuery(this).closest(".form-group").removeClass('has-error');
                jQuery(this).next(".error-content").attr('hidden', true);
            }
        });



//focus form field
        jQuery(document).on('keyup', '.number-validate', function(e){
            if(this.value == '' || isNaN(this.value)) {
                jQuery(this).closest(".form-group").addClass('has-error');
                jQuery(this).next(".error-content").removeAttr('hidden');
            }else{
                jQuery(this).closest(".form-group").removeClass('has-error');
                jQuery(this).next(".error-content").attr('hidden', true);
            }
        });

//match password
        jQuery(document).on('keyup', '.password', function(e){
//            var regex = "^\\s+$";
            var regex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/";
            if(this.value.match(regex)) {
                jQuery(this).closest(".form-group").addClass('has-error');
                jQuery(this).next(".error-content").removeAttr('hidden');
            }else{
                jQuery(this).closest(".form-group").removeClass('has-error');
                jQuery(this).next(".error-content").attr('hidden', true);
            }
        });



        jQuery(document).on('keyup focusout', '.email-validate', function(e){

            var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

            if(this.value != '' && validEmail.test(this.value)) {
                jQuery(this).closest(".form-group").removeClass('has-error');
                jQuery(this).next(".error-content").attr('hidden', true);
            }else{
                jQuery(this).closest(".form-group").addClass('has-error');
                jQuery(this).next(".error-content").removeAttr('hidden');
                error = "has error";
            }

        });




        //sorting grid/list
        jQuery(document).on('click','#list',function(){
            if (!jQuery(this).hasClass('active')) {
                jQuery('#listing-products, .load-more-area').hide();
                jQuery( '#listing-products' ).removeClass( 'products-3x' );
                jQuery( '#listing-products' ).addClass( 'products-list' );
                jQuery( '#grid' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-products, .load-more-area').fadeIn(1000);
            }
        });

        jQuery(document).on('click','#grid',function(){
            if (!jQuery(this).hasClass('active')){
                jQuery('#listing-products, .load-more-area').hide();
                jQuery( '#listing-products' ).removeClass( 'products-list' );
                jQuery( '#listing-products' ).addClass( 'products-3x' );
                jQuery( '#list' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-products, .load-more-area').fadeIn(1000);
            }
        });

        //sorting grid/list
        jQuery(document).on('click','#list_wishlist',function(){
            if (!jQuery(this).hasClass('active')) {
                jQuery('#listing-wishlist, .load-more-area').hide();
                jQuery( '#listing-wishlist' ).removeClass( 'products-3x' );
                jQuery( '#listing-wishlist' ).addClass( 'products-list' );
                jQuery( '#grid_wishlist' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
            }
        });

        jQuery(document).on('click','#grid_wishlist',function(){
            if (!jQuery(this).hasClass('active')){
                jQuery('#listing-wishlist, .load-more-area').hide();
                jQuery( '#listing-wishlist' ).removeClass( 'products-list' );
                jQuery( '#listing-wishlist' ).addClass( 'products-3x' );
                jQuery( '#list_wishlist' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
            }
        });

        //sorting grid/list
        jQuery(document).on('click','#list_news',function(){
            if (!jQuery(this).hasClass('active')) {
                jQuery('#listing-news, .load-more-area').hide();
                jQuery( '#listing-news' ).removeClass( 'blogs-4x' );
                jQuery( '#listing-news' ).addClass( 'blogs-list' );
                jQuery( '#grid_news' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-news, .load-more-area').fadeIn(1000);
            }
        });

        jQuery(document).on('click','#grid_news',function(){
            if (!jQuery(this).hasClass('active')){
                jQuery('#listing-news, .load-more-area').hide();
                jQuery( '#listing-news' ).removeClass( 'blogs-list' );
                jQuery( '#listing-news' ).addClass( 'blogs-4x' );
                jQuery( '#list_news' ).removeClass( 'active' );
                jQuery( this ).addClass( 'active' );
                jQuery('#listing-news, .load-more-area').fadeIn(1000);
            }
        });

        /*$(".show_commentsandnotes_container").click(function () {
         $('.commentsandnotes_bg').fadeIn(1000, function() {
         $('.commentsandnotes_bg').addClass('show');
         });
         $('.commentsandnotes_container').fadeIn(1000, function() {
         $('.commentsandnotes_container').addClass('show');
         });
         });
         $(".commentsandnotes_bg").click(function () {
         $('.commentsandnotes_bg').fadeOut(1000, function() {
         $('.commentsandnotes_bg').removeClass('show');
         });
         $('.commentsandnotes_container').fadeOut(1000, function() {
         $('.commentsandnotes_container').removeClass('show');
         });
         });*/



        // // This button will increment the value
        // jQuery('.qtyplus').click(function(e){
        //     // Stop acting like a button
        //     e.preventDefault();
        //     // Get the field name
        //     var fieldName;
        //     fieldName = jQuery(this).attr('field');
        //     // Get its current value
        //     var currentVal = parseInt(jQuery(this).prev('.qty').val());
        //     // If is not undefined
        //     if (!isNaN(currentVal)) {
        //     } else {
        //         // Otherwise put a 0 there
        //         jQuery(this).prev('.qty').val(0);
        //     }

        //     var qty = jQuery('.qty').val();
        //     var products_price = jQuery('#products_price').val();
        //     var total_price = parseFloat(qty) * parseFloat(products_price);
        //     jQuery('.total_price').html('$'+total_price.toFixed(2));
        // });

        // // This button will decrement the value till 0

        // jQuery(".qtyminus").click(function(e) {

        //     // Stop acting like a button
        //     e.preventDefault();

        //     // Get the field name
        //     fieldName = jQuery(this).attr('field');

        //     // Get its current value
        //     var currentVal = parseInt(jQuery(this).next('.qty').val());
        //     // If it isn't undefined or its greater than 0
        //     if (!isNaN(currentVal) && currentVal > 1) {
        //         // Decrement one
        //         jQuery(this).next('.qty').val(currentVal - 1);
        //     } else {

        //         // Otherwise put a 0 there
        //         jQuery(this).next('.qty').val(1);

        //     }

        //     var qty = jQuery('.qty').val();
        //     var products_price = jQuery('#products_price').val();
        //     var total_price = parseFloat(qty) * parseFloat(products_price);
        //     jQuery('.total_price').html('$'+total_price.toFixed(2));

        // });


        //cart page

        jQuery(document).on('focusout','.qty',function(){
            var minimum = '1';
            var maximum = jQuery(this).attr('max');
            var current = jQuery(this).val();

            if( parseInt(current) > parseInt(maximum)){
                jQuery(this).val(maximum);
            }

            if(current<minimum){
                jQuery(this).val(minimum);
            }

            var products_price = jQuery('#products_price').val();
            var total_price = parseFloat(jQuery(this).val()) * parseFloat(products_price);
            jQuery('.total_price').html('$'+total_price.toFixed(2));

        });

        function cart_item_price(){

            var subtotal = 0;
            jQuery(".cart_item_price").each(function() {
                subtotal= parseFloat(subtotal) + parseFloat(jQuery(this).val());
            });
            jQuery('#subtotal').html('$'+subtotal);

            var discount = 0;
            jQuery(".discount_price_hidden").each(function() {
                discount =  parseFloat(discount) - parseFloat(jQuery(this).val());
            });

            jQuery('.discount_price').val(Math.abs(discount));

            jQuery('#discount').html('$'+Math.abs(discount));

            //total value
            var total_price = parseFloat(subtotal) - parseFloat(discount);
            jQuery('#total_price').html('$'+total_price);
        };

        //default_address
        jQuery(document).on('click', '.default_address', function(e){
            jQuery('#loader').css('display','flex');
            var address_id = jQuery(this).attr('address_id');
            jQuery.ajax({
                url: 'myDefaultAddress',
                type: "POST",
                data: '&address_id='+address_id,

                success: function (res) {
                    window.location = 'shipping-address05d1.html?action=default';
                },

            });

        });



        //deleteMyAddress
        jQuery(document).on('click', '.deleteMyAddress', function(e){
            jQuery('#loader').css('display','flex');
            var address_id = jQuery(this).attr('address_id');
            jQuery.ajax({
                url: 'delete-address',
                type: "POST",
                data: '&address_id='+address_id,

                success: function (res) {
                    window.location = 'shipping-address2d65.html?action=detele';
                },
            });
        });

        jQuery('.slide-toggle').on('click', function(event){
            jQuery('.color-panel').toggleClass('active');
        });

//        jQuery( function() {
//            var maximum_price = jQuery( ".maximum_price" ).val();
//            jQuery( "#slider-range" ).slider({
//                range: true,
//                min: 0,
//                max: maximum_price,
//                values: [ 0, maximum_price ],
//                slide: function( event, ui ) {
//                    jQuery('#min_price').val(ui.values[ 0 ] );
//                    jQuery('#max_price').val(ui.values[ 1 ] );
//
//                    jQuery('#min_price_show').val( ui.values[ 0 ] );
//                    jQuery('#max_price_show').val( ui.values[ 1 ] );
//                },
//                create: function(event, ui){
//                    jQuery(this).slider('value',20);
//                }
//            });
//            jQuery( "#min_price_show" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) );
//            jQuery( "#max_price_show" ).val(jQuery( "#slider-range" ).slider( "values", 1 ) );
//            //jQuery( "#slider-range" ).slider( "option", "max", 50 );
//        });




//tooltip enable
        jQuery(function () {
            jQuery('[data-toggle="tooltip"]').tooltip()
        });

//        function initialize(location){
//            var address = 'Latitude, Longitude';
//            var map = new google.maps.Map(document.getElementById('googleMap'), {
//                mapTypeId: google.maps.MapTypeId.TERRAIN,
//                zoom: 13
//            });
//            var geocoder = new google.maps.Geocoder();
//            geocoder.geocode({
//                    'address': address
//                },
//                function(results, status) {
//                    if(status == google.maps.GeocoderStatus.OK) {
//                        new google.maps.Marker({
//                            position: results[0].geometry.location,
//                            map: map
//                        });
//                        map.setCenter(results[0].geometry.location);
//                    }
//                });
//        }

//default product cart
        jQuery(document).on('click', '.cart', function(e){
            var parent = jQuery(this);
            var products_id = jQuery(this).attr('products_id');
            var message ;
            jQuery.ajax({
                url: 'addToCart',
                type: "POST",
                data: '&products_id='+products_id,
                success: function (res) {
                    if(res.trim() == "already added"){
                    }else{
                        jQuery('.head-cart-content').html(res);
                        jQuery(parent).removeClass('cart');
                        jQuery(parent).addClass('active');
                        jQuery(parent).html("Added!");
                    }
                    message = "Product is added!";
                    notification(message);
                },
            });
        });

    });


    //ready doument end
    jQuery('.dropdown-menu').on('click', function(event){
        // The event won't be propagated up to the document NODE and
        // therefore delegated events won't be fired
        event.stopPropagation();
    });
    jQuery(".alert.fade").fadeTo(2000, 500).slideUp(500, function(){
        jQuery(".alert.fade").slideUp(500);
    });

    function delete_cart_product(cart_id){
        jQuery('#loader').css('display','flex');
        var id = cart_id;
        jQuery.ajax({
            url: 'deleteCart',
            type: "GET",
            data: '&id='+id+'&type=header cart',
            success: function (res) {
                window.location.reload(true);
            },
        });
    };

    //paymentMethods
    function paymentMethods(){
        //jQuery('#loader').css('display','flex');
        var payment_method = jQuery(".payment_method:checked").val();
        jQuery(".payment_btns").hide();

        jQuery("#"+payment_method+'_button').show();

        jQuery.ajax({
            url: 'paymentComponent',
            type: "POST",
            data: '&payment_method='+payment_method,
            success: function (res) {
                //jQuery('#loader').hide();
            },
        });
    }

    //notification
//    function notification(message) {
//        jQuery('#message_content').html(message);
//        var x = document.getElementById("message_content");
//        x.className = "show";
//        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
//    }

    //notification
    function notification(message, timeout=3000, type="") {

        var x = document.getElementById("message_content");
        if (type == 'success'){
            jQuery('#message_content_success').html(message);
            x = document.getElementById("message_content_success");
        }else if(type == 'error'){
            jQuery('#message_content_error').html(message);
            x = document.getElementById("message_content_error");
        }else{
            jQuery('#message_content').html(message);
            x = document.getElementById("message_content");
        }

        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, timeout);
    }

    function passwordMatch(){

        var password = jQuery('#password').val();
        var re_password = jQuery('#re_password').val();

        if(password == re_password){
            return 'matched';
        }else{
            return 'error';
        }
    }

    function getZones() {
        jQuery('#loader').css('display','flex');
        var country_id = jQuery('#entry_country_id').val();
        jQuery.ajax({
            url: 'ajaxZones',
            type: "POST",
            //data: '&country_id='+country_id,
            data: {'country_id': country_id},

            success: function (res) {
                var i;
                var showData = [];
                for (i = 0; i < res.length; ++i) {
                    var j = i + 1;
                    showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
                }
                showData.push("<option value='Other'>Other</option>");
                jQuery("#entry_zone_id").html(showData);
                jQuery('#loader').hide();
            },
        });

    };

    function getBillingZones() {
        console.log('here');
        jQuery('#loader').css('display','flex');
        var country_id = jQuery('#billing_countries_id').val();
        jQuery.ajax({
            url: 'ajaxZones',
            type: "POST",
            data: {'country_id': country_id},

            success: function (res) {
                var i;
                var showData = [];
                for (i = 0; i < res.length; ++i) {
                    var j = i + 1;
                    showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
                }
                showData.push("<option value='Other'>Other</option>");
                jQuery("#billing_zone_id").html(showData);
                jQuery('#loader').hide();
            },
        });

    };

    function getZonesBilling() {
        var field_name = jQuery('.shipping_data:checked');
        var mehtod_name = jQuery(field_name).attr('method_name');
        var shipping_price = jQuery(field_name).attr('shipping_price');
        jQuery("#mehtod_name").val(mehtod_name);
        jQuery("#shipping_price").val(shipping_price);
    }

    'use strict';
    function showPreview(objFileInput) {
        if (objFileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                jQuery("#uploaded_image").html('<img src="'+e.target.result+'" width="150px" height="150px" class="upload-preview" />');
                jQuery("#uploaded_image").css('opacity','1.0');
                jQuery(".upload-choose-icon").css('opacity','0.8');
            }
            fileReader.readAsDataURL(objFileInput.files[0]);
        }
    }

    jQuery(document).ready(function() {
        /******************************
         BOTTOM SCROLL TOP BUTTON
         ******************************/

            // declare variable
        var scrollTop = jQuery(".floating-top");

        jQuery(window).scroll(function() {
            // declare variable
            var topPos = jQuery(this).scrollTop();

            // if user scrolls down - show scroll to top button
            if (topPos > 150) {
                jQuery(scrollTop).css("opacity", "1");

            } else {
                jQuery(scrollTop).css("opacity", "0");
            }

        });

        //Click event to scroll to top
        jQuery(scrollTop).click(function() {
            jQuery('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;

        });
    });


    jQuery('body').on('mouseenter mouseleave','.dropdown.open',function(e){
        var _d=jQuery(e.target).closest('.dropdown');
        _d.addClass('show');
        setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');

        },300);
        jQuery('.dropdown-menu', _d).attr('aria-expanded',_d.is(':hover'));
    });



    jQuery('.nav-index').on('show.bs.tab', function (e) {
        console.log('fire');
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        jQuery('.overlay').show();
    })
    jQuery('.nav-index').on('hidden.bs.tab', function (e) {
        console.log('expire');
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        jQuery('.overlay').hide();
    })


//    jQuery('#search_product')
    jQuery('#category_id').on('change',function () {
        jQuery('#category_value').val(jQuery(this).val());
//        jQuery('#search').val('');
    })

    jQuery('#search').on('keyup',function () {
        var keyword=jQuery(this).val();
        if(keyword.length>=2)
        {
            if(jQuery('#category_value').val()=='')
            {
                jQuery.ajax({
                    type:'post',
                    url:'e-commerce-ajax-files/search-result.php',
                    data:{
                        'keyword':keyword
                    },
                    success:function (data) {
                        jQuery('.suggestion-area').html(data);
                    }
                })
            }else
            {
                jQuery.ajax({
                    type:'post',
                    url:'e-commerce-ajax-files/search-result.php',
                    data:{
                        'category':jQuery('#category_value').val(),
                        'keyword':keyword
                    },
                    success:function (data) {
                        jQuery('.suggestion-area').html(data);
                    }
                })
            }
        }else
        {
            jQuery('.suggestion-area').html('');
        }
    })




    /***-------------------------------------------------------
     * **/

    // WishList
    jQuery(document).on('click', '.add-wishlist', function () {
        var id=jQuery(this).attr('data-id');
        jQuery.ajax({
            type: 'post',
            url: 'e-commerce-ajax-files/ajax-operation.php',
            data: {
                'wishlist': 1,
                'productID': id,
            },
            success: function () {
                getWishListSummary();
                jQuery("#wishlist"+id).css('color','red');
                message = "Product added to your wish list !";
                notification(message, 3000, 'success');
            }
        })
    });

    // Cart Add
    jQuery(document).on('click', '.cartadd', function () {
        var id = jQuery(this).attr('data-id');
        jQuery.ajax({
            type: 'post',
            url: 'e-commerce-ajax-files/ajax-operation.php',
            data: {
                'add-cart': 1,
                'productID': id,
                'quantity': 1
            },
            success: function (data) {
                jQuery('.prdct_show').html(data);
                getCartSummary();
                message = "Product added to your cart !";
                notification(message, 3000, 'success');
            }
        })
    });

    // Top Nav Cart Summery
    function getCartSummary() {
        jQuery.get('e-commerce-ajax-files/cartsummery.html', {getsummery: 'getsummery'}, function (data) {
            jQuery('#cartshortsummery').html(data);
        });
    }
    function getWishListSummary() {
        jQuery.get('e-commerce-ajax-files/wishlist.html', function (data) {
            jQuery('#wishlistsummery').html(data);
        });
    }


    jQuery(document).on('click', '.cartaddprod', function () {

      var id = jQuery(this).attr('data-id');
        // window.setTimeout(function(){

          jQuery.ajax({
              type: 'post',
              url: 'e-commerce-ajax-files/ajax-operation.php',
              data: {
                  'add-cartprod': 1,
                  'productID': id,
                  'quantity': 1
              },
              success: function (data) {
                  jQuery('.prdct'+id).html(data);
                  getCartSummary();
                  message = "Product added to your cart !";
                  notification(message, 3000, 'success');
              }
          })

        // },
        // 1000
        // )

    });

    jQuery('#search').focusout(function(){
        window.setTimeout(function(){
            jQuery('.suggestion-area').hide();
        },200);
    })

    jQuery('#search').focus(function(){
        jQuery('.suggestion-area').show();
    })


</script>
<!-- ./end of js scripts -->

<script>
    (function (window, document) {
           var loader = function () {
               var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
           script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
               tag.parentNode.insertBefore(script, tag);
       };

           window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
       })(window, document);
</script>


</body>




<script>


    var jsonstock = [];
    var jsonstock_out_applicable = [];

    //var stocks = JSON.Parse(jsonstock);

    //console.log(jsonstock);
    //console.log(jsonstock_out_applicable);

    var clickTimeout;

    jQuery(document).on('click','.qtypluscart',function(e){
        var id=jQuery(this).attr('data-id');
        e.preventDefault();
        var currentVal=parseInt(jQuery('.val'+id).val());

        if (!isNaN(currentVal)) {

            console.log(currentVal);

            // Increment
            if(!(jsonstock[id]==currentVal && jsonstock_out_applicable[id]==1))
            {
                currentVal++;

                jQuery('.val'+id).val(currentVal);
            }

            clearTimeout(clickTimeout); // for only considering last click for server process

            clickTimeout = setTimeout(function(){

                jQuery.ajax({
                    type:'post',
                    url:'e-commerce-ajax-files/ajax-operation.php',
                    data:{
                        'plus_qty':1,
                        'productID':id,
                        'value' : currentVal
                    },
                    success:function () {
                        //jQuery('#amount'+id).text( parseInt(jQuery('#amount'+id).attr('data-amount'))*(currentVal + 1)+' ('+parseInt(jQuery('#amount'+id).attr('data-premium'))*(currentVal+1)+')');
                        //getCartSummery();
                        jQuery.get('e-commerce-ajax-files/cartsummery.html',{getsummery:'getsummery'}, function (data) {
                            jQuery('#cartshortsummery').html(data);
                        });
                    }
                })

            }, 500);

        } else {
            jQuery(jQuery('.val'+id).val(0));
        }

    });

    jQuery(document).on('click','.qtyminus',function(e){
        var id=jQuery(this).attr('data-id');
        e.preventDefault();
        var currentVal=parseInt(jQuery('.val'+id).val());
        console.log(currentVal);
        if (!isNaN(currentVal) && currentVal > 1) {
            // Increment
            jQuery('.val'+id).val(currentVal-1);
            console.log(currentVal);


            clearTimeout(clickTimeout); // for only considering last click for server process

            clickTimeout = setTimeout(function(){

                jQuery.ajax({
                    type:'post',
                    url:'e-commerce-ajax-files/ajax-operation.php',
                    data:{
                        'minus_qty':1,
                        'productID':id,
                        'value' : currentVal - 1
                    },
                    success:function () {
                        //jQuery('#amount'+id).text( parseInt(jQuery('#amount'+id).attr('data-amount'))*(currentVal)+' ('+parseInt(jQuery('#amount'+id).attr('data-premium'))*(currentVal)+')');
                        //getCartSummery();
                        jQuery.get('e-commerce-ajax-files/cartsummery.html',{getsummery:'getsummery'}, function (data) {
                            jQuery('#cartshortsummery').html(data);
                        });
                    }
                })

             }, 500);

        } else {

            clearTimeout(clickTimeout);

            jQuery.ajax({
                type:'post',
                url:'e-commerce-ajax-files/ajax-operation.php',
                data:{
                    'remove-cart-list':1,
                    'productID':id
                },
                success:function (data) {
                   jQuery('.prdct'+id).html(data);

                   jQuery.get('e-commerce-ajax-files/cartsummery.html',{getsummery:'getsummery'}, function (data) {
                        jQuery('#cartshortsummery').html(data);
                    });
                }
            })
            //jQuery(jQuery('.val'+id).val(0));
        }
    });

</script>



<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

<!-- JavaScript -->
<script type="text/javascript" src="{{ asset('assets/js/alertify.min.js') }}"></script>

<!-- Zoom -->

<script type="text/javascript" src="{{ asset('assets/zoom/scripts/zoom-image.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/zoom/scripts/main.js') }}"></script>

<!----ajax search------>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    jQuery( document ).ready( function () {
        src = '{{ route('searchproductajax') }}'
        $("#search_text" ).autocomplete({
            source: function(request, response){
                $.ajax({
                url: src,
                data: {
                  term: request.term
                },
                dataType: "json",
                success: function (data) {
                    response(data);
                    },
                });
            },
            minLength: 1,
        });

        $(document).on('click', '.ui-menu-item', function(){
            $('#search-form').submit();
        });

    });

</script>

</html>
