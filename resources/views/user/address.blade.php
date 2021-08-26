@extends('user.master')

@section('side_content')

    <!--Middle Part Start-->
<div id="content" class="col-md-9 col-sm-8 type-1">

    <div class="row">
        <div id="content" class="col-12 bg-white px-5">

            <form action="{{ url('edit_address') }}" method="POST" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                @csrf
                <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-company">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ Auth::user()->name }}" id="input-company" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="input-address-1">Email 1</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="{{ Auth::user()->email }}"  id="input-address-1" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-address-2">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="{{ Auth::user()->address }}"  id="input-address-2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="input-city">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" value="{{ Auth::user()->city }}"  id="input-city" class="form-control">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label" for="input-postcode">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" value="{{ Auth::user()->phone }}"  id="input-postcode" class="form-control">
                        </div>
                    </div>


                </fieldset>



                <div class="buttons">
                    <div class="pull-right">Update your details <a href="#" class="agree">&nbsp; &nbsp;</a>

                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>


</div>
<!--Middle Part End-->


@endsection
