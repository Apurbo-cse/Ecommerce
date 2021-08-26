@extends('user.master')

@section('side_content')

<div class="col-12 col-lg-9 new-customers">
    <div class="col-12 spaceright-0">
        <div class="heading">
            <h2>Dashboard</h2>
            <hr>
        </div>
        <div class="row">

            <div class="col-sm-6 dashboard-card ">


                <h5 class="title-h5">Personal Information</h5>
                <hr class="featurette-divider">


                <p class="dashboard-card-para"><strong>FullName </strong>: {{ Auth::user()->name }}</p>
                <p class="dashboard-card-para"><strong>Phone Number </strong>: {{ Auth::user()->phone }}</p>
                <p class="dashboard-card-para"><strong>Email </strong>: {{ Auth::user()->email }}</p>


            </div>

            <div class="col-sm-6 ">
                <h5 class="title-h5">Address Information</h5>
                <hr class="featurette-divider">

                <h6 class="txt-dark">Current Shipping Address</h6>


                <p class="txt-dark ">
                   <p class='dashboard-card-para'><strong>City :</strong> {{ Auth::user()->city }} </p>
                   <p class='dashboard-card-para'><strong>Address :</strong> {{ Auth::user()->address }} </p>

                </p>
            </div>


            <div class="col-sm-6 ">
                <br>
                <br>
                <h5 class="title-h5">Wallet Information</h5>
                <hr class="featurette-divider">


                <p class="txt-dark ">
                   <p class='dashboard-card-para'><strong>Wallet Amount</strong> : {{ number_format(Auth::user()->wallet) }} Tk </p>
                </p>
            </div>

        </div>
    </div>
</div>

@endsection
