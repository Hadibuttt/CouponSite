@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')

<div class="parallax first-section" data-stellar-background-ratio="0.5" style="background-image:url('uploads/parallax_01.jpg');">
    <div class="container">
        <div class="section-title m30 text-center">
            <h1>User Dashboard</h1>
            <p>In dignissim feugiat gravida. Proin feugiat quam sed gravida fringilla. Proin quis mauris ut magna fringilla vulputate quis non ante. Integer bibendum velit dui. Sed consequat nisi id convallis eleifend. </p>
        </div><!-- end title -->
    </div><!-- end container -->
</div><!-- end section -->

<div class="section wb">
    <div class="container">
        <div class="row">
            <div class="sidebar col-md-4">
                <div class="widget clearfix">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="/user-dashboard"><span class="glyphicon glyphicon-off"></span>  Dashboard</a></li>
                        <li><a href="user-favorites.html"><span class="fa fa-star"></span>  Favorite Stores</a></li>
                        <li><a href="user-saved.html"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                        <li><a href="/coupon-submit"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                        <li><a href="/logout"><span class="fa fa-lock"></span>  Logout</a></li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="sidebar col-md-8">
                <div class="widget clearfix">

                    <form id="submit" class="contact-form newsletter">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Your Photo <small>Please add a photo. (200x200)</small></label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail"><img @if($user->image == null)src="images/profile-images/null.jpg" @else src="{{asset('images/profile-images/'.$user->image.'')}}" @endif alt=""></div>
                                    <br>
                                    <span class="btn btn-default btn-file">
                                    <span class="fileupload-new">Select Avatar</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file">
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload"><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <hr class="invis3">

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Your Name <small>Enter your company name</small></label>
                                <input type="text" class="form-control" placeholder="Jenny Pelt">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Email <small>Enter offical email here</small></label>
                                <input type="email" class="form-control" placeholder="support@psdconverthtml.com">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </form>

                    <hr class="invis3">
                 
                </div>
            </div><!-- end content -->
        </div><!-- end row -->
    </div>
</div>

@endsection
