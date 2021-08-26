@extends('frontend.new.master')


@section('content')

		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main">
				<li class="home"><a href="{{ url('/') }}" >Home </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li> User profile </li>
			</ul>

			<div class="row">
				<!--Left Part Start -->
				<aside class="col-sm-4 col-md-3 type-1" id="column-left">
					<div class="module menu-category titleLine">
						Welcome <h3 class="modtitle">{{ Auth::user()->name }}</h3>
						<div class="modcontent">
							<div class="box-category">
								<ul id="cat_accordion" class="list-group">
									<li class=""><a href="{{ url('profile') }}" class="cutom-parent">Dashboard</a>  <span class="dcjq-icon"></span></>
                                    <li class=""><a href="{{ url('address') }}" class="cutom-parent">Address</a>    <span class="dcjq-icon"></span></li>
                                    <li class=""><a href="{{ url('order_show') }}" class="cutom-parent">Order History</a>  <span class="dcjq-icon"></span></li>
									<li class=""><a href="{{ url('wallet') }}" class="cutom-parent">Wallet</a>  <span class="dcjq-icon"></span></li>
									<li class=""><a href="{{ url('account_details') }}" class="cutom-parent">Account Details</a><span class="dcjq-icon"></span></li>
									<li class=""><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();" class="cutom-parent">Log Out</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                      <span class="dcjq-icon"></span></li>
								</ul>
							</div>


						</div>
					</div>



				</aside>
				<!--Left Part End -->


                @yield('side_content')


		</div>
        <!-- //Main Container -->

    @endsection


