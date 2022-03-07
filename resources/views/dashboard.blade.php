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

                    <form action="/update-profile" method="POST" enctype="multipart/form-data" id="submit" class="contact-form newsletter">
        @if (Session::has('success'))
                        <div class="alert alert-dismissable alert-success">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('success') }}
                      </div>
        @endif
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Your Photo <small>Please add a photo. (200x200)</small></label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail"><img @if($user->image == null)src="images/profile-images/null.jpg" @else src="{{asset('images/profile-images/'.$user->image.'')}}" @endif alt=""></div>
                        @error('image')
                                    <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                        @enderror                
                                    <br>
                                    <span class="btn btn-default btn-file">
                                    <span class="fileupload-new">Select Avatar</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input name="image" type="file" accept="image/*">
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
                                <input name="name" value="{{$user->name}}" required type="text" class="form-control" placeholder="Jenny Pelt">
                    @error('name')
                                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                    @enderror
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="control-label">Email <small>Enter offical email here</small></label>
                                <input name="email" type="email" value="{{$user->email}}" required class="form-control" placeholder="support@psdconverthtml.com">
                    @error('email')
                                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
                    @enderror
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </form>

                    <hr class="invis3">

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th colspan="4" scope="col"><center>Website and code list</center></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="2"><center>Website</center></td>
                            <td colspan="2"><center>Code</center></td>
                          </tr>
                        
                        @if ($count == 0)
                            <td colspan="4"><center>No Coupons Added!</center></td>
                        @else
                          
                        @foreach ($datas as $data)
                          <tr>
                            <td colspan="2">{{$data->website}}</td>
                            <td colspan="2">{{$data->code}}</td>
                          </tr>
                        @endforeach
                        
                        @endif

                        </tbody>
                      </table>
                 
                </div>
            </div><!-- end content -->
        </div><!-- end row -->
    </div>
</div>

@endsection
