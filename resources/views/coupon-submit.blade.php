@extends('layouts.app')
@section('title', 'Submit Coupon')
@section('content')

<div class="parallax first-section" data-stellar-background-ratio="0.5" style="background-image:url('uploads/parallax_01.jpg');">
    <div class="container">
        <div class="section-title m30 text-center">
            <h1>Submit a Coupon</h1>
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
                        <li><a href="/user-dashboard"><span class="glyphicon glyphicon-off"></span>  Dashboard</a></li>
                        <li><a href="user-favorites.html"><span class="fa fa-star"></span>  Favorite Stores</a></li>
                        <li><a href="user-saved.html"><span class="fa fa-heart-o"></span>  Saved Coupons</a></li>
                        <li class="active"><a href="/coupon-submit"><span class="fa fa-bullhorn"></span>  Submit a Coupon</a></li>
                        <li><a href="/logout"><span class="fa fa-lock"></span>  Logout</a></li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="sidebar col-md-8">
                <div class="widget clearfix">
                    <form action="/create-coupon" method="POST" id="submit" class="contact-form newsletter">
        @if (Session::has('success'))
                        <div class="alert alert-dismissable alert-success">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('success') }}
                      </div>
        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Store Name / URL <small>Enter store name or url</small></label>
                                <input name="website" type="text" required class="form-control" placeholder="http://website.com/">
                    @error('website')
                                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                    @enderror

                                <hr class="invis3">

                                <label class="control-label">Coupon Code <small>Enter coupon code here</small></label>
                                <input name="code" type="text" required class="form-control" placeholder="EXAMPLE10OFF">
                    @error('code')
                        <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                    @enderror

                                <input type="hidden" name="user_id" value="1" id="">

                                <hr class="invis3">
                                <button class="btn btn-primary">Submit Coupon</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end post-wrapper -->
            </div><!-- end content -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection