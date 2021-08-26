@extends('frontend.new.master')

@section('content')

  <section class="site-content">
        <div class="container">
            <div class="breadcum-area">
                <div class="breadcum-inner">
                    <h3>Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://demo.laravelcommerce.com">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>


                <div class="row">
                    <div class="col-12 col-lg-3 spaceright-0">
                        <div class="sidebar">
                            <div class="widget block-categories">
                                <div class="block-title">
                                    <h2>My Account</h2>
                                </div>
                                <div class="block-content">
    <ul class="list-categories">
        <li>
            <a href="{{ url('profile') }}">Dashboard</a>
        </li>
        <li>
            <a href="{{ url('account_details') }}">My Info</a>
        </li>
        <li>
            <a href="{{ url('order_show') }}">My Orders</a>
        </li>
        <li>
            <a href="{{ url('address') }}">Address Book</a>
        </li>
        
        <li>
            <a href="{{ url('wallet') }}">Wallet History</a>
        </li>


        <li>
            <a class="nav-link -before" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Logout</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        </li>
    </ul>
</div>                            </div>
                            <div class="widget block-images">
                                <ul class="list-images ">
                                                                    </ul>
                            </div>
                        </div>
                    </div>


                    @yield('side_content')

                </div>

        </div>
    </section>


    @endsection
