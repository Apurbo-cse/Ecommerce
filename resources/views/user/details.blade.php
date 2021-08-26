@extends('user.master')

@section('side_content')

                    <div class="col-12 col-lg-9 new-customers">
                        <div class="col-12 spaceright-0">
                            <div class="heading">
                                <h2>My Info</h2>
                                <hr>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 ">

                                    <form id="updateinfoform" name="updateMyProfile" class="form-validate" enctype="" action="" method="post">
                                        <h5 class="title-h5">Personal Information</h5>
                                        <hr class="featurette-divider">
                                        <div class="form-group row">
                                            <label for="firstName" class="col-sm-4 col-form-label">Full Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="FullName" readonly class="form-control field-validate" placeholder="Full Name" id="firstName" value="{{ Auth::user()->name }}">
                                                <span class="help-block error-content" hidden="">Please enter your full name.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                                            <div class="col-sm-8">
                                                <input name="PrimaryMobile" readonly type="tel" class="form-control number-validate" id="phone" placeholder="Phone Number" value="{{ Auth::user()->phone }}">
                                                <span class="help-block error-content" hidden="">Please enter your valid phone number.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input name="Email" type="email" readonly class="form-control " id="email" placeholder="Email" value="{{ Auth::user()->email }}"> <!-- class email-validate -->
                                            </div>
                                        </div>

                                        <div class="form-group row hidden">
                                            <label for="phone" class="col-sm-4 col-form-label">Membership Status</label>
                                            <div class="col-sm-8">
                                                General &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label  class="radio_style"><input type='checkbox' name='membership' class='radio-price-set1 pickup_point' value="1"><span>Apply For Premium</span></label>
                                            </div>
                                        </div>


                                    </form>

                                    <h5 class="title-h5" style="margin-top:30px;">Change Password</h5>
                                    <hr class="featurette-divider">
                                    <form action="{{ url('change-password') }}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="new_password" class="col-sm-4 col-form-label">Current Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="current_password" value="" placeholder="Current Password" id="input-password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="new_password" class="col-sm-4 col-form-label">New Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="new_password" value="" placeholder="New Password" id="input-password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="old_password" class="col-sm-4 col-form-label">Confirm Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="new_confirm_password" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                                            </div>
                                        </div>

                                        <div class="button">
                                            <button type="submit" class="btn btn-dark"  id="updatepassword">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



    @endsection
