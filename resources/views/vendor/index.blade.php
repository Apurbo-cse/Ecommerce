@extends('frontend.new.master')


@section('content')



<!--section start-->
<section class="login-page section-big-py-space">
    <div class="custom-container" >
        <div class="row container">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2" style="margin: 20px auto;">
                <div class="theme-card" >
                    <h3 class="text-center">Seller Login</h3>
                    <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="">
                                <input id="email" type="email" class="form-control1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <div class="">
                                <input id="password" type="password" class="form-control1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        @if (Route::has('password.request'))
                        <a class="float-right txt-default mt-2" href="{{ route('password.request') }}" id="fgpwd">Forgot your password?</a>
                        @endif
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                    <a href="{{ url('/vendor_registration') }}" class="txt-success pt-3 d-block"><b>Apply for become a Seller</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

@endsection




