@extends('user.master')

@section('side_content')

    <!--Middle Part Start-->
<div id="content" class="col-md-9 col-sm-8 type-1 bg-white p-5">

    <div class="row">

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading mb-3">
                    <h4 class="panel-title "><i class="fa fa-ticket"></i> Your Wallet Balance: </h4>
                </div>
                <div class="panel-body row">
                    <div class="col-sm-6 ">
                        <div class="input-group panel-body-1">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Wallet Balance">
                            </span>
                            <input type="text" class="form-control" id="input-coupon" placeholder="0 BDT" value="{{ number_format($wallet->wallet) }} BDT" name="coupon" disabled>
                            </div>
                    </div>

                    <br>



                </div>
            </div>
        </div>
    </div>

    <h4 class="mt-3">
        Wallet balence will added will next purchase bill.
    </h4>

</div>


</div>
<!--Middle Part End-->


@endsection
