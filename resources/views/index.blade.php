@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="parallax first-section" data-stellar-background-ratio="0.5" style="background-image:url('uploads/parallax_01.jpg');">
    <div class="container">
        <div class="section-title m30 text-center">
            <h1>20.000+ Coupons from 1.000+ Stores</h1>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="well">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input id="typeahead" type="text" class="form-control" placeholder="Search for coupons..." autocomplete="off" data-provide="typeahead">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left text-left hidden-xs">
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" class="styled" id="inlineCheckbox1" value="option1" checked>
                                <label for="inlineCheckbox1"> Coupons </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" class="styled" id="inlineCheckbox2" value="option1" checked>
                                <label for="inlineCheckbox2"> Printable </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" class="styled" id="inlineCheckbox3" value="option1">
                                <label for="inlineCheckbox3"> Deals </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" class="styled" id="inlineCheckbox4" value="option1">
                                <label for="inlineCheckbox4"> Stores </label>
                            </div>
                        </div>
                        <div class="pull-right text-right hidden-xs">
                            <label>Search : <a href="#">MyLogo</a>, <a href="#">Companies</a>, <a href="#">Garden</a> etc.</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <hr class="invis1">

        <div class="row">
            <div class="col-md-12">
                <h4>Popular Stores</h4>
            </div>
            <!-- end col -->
        </div>

        <div class="text-center store-list row">
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                    <small>Takifest.com</small>
                </div>
                <!-- end media -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                    <small>WPServis.com</small>
                </div>
                <!-- end media -->
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                    <small>PurplebyBanu.com</small>
                </div>
                <!-- end media -->
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                    <small>Tutsplus.com</small>
                </div>
                <!-- end media -->
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                    <small>Showwp.com</small>
                </div>
                <!-- end media -->
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="post-media">
                    <a href="coupon-single.html"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
                    <small>PSDConvertHTML.com</small>
                </div>
                <!-- end media -->
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="promobox">
                    <div class="post-media">
                        <a href="categories.html"><img src="uploads/promo_01.png" alt="" class="img-responsive"></a>
                        <div class="promo-desc">
                            <img src="uploads/small_01.png" alt="" class="alignleft img-thumbnail">
                            <h4><a href="#">Shop for Business</a></h4>
                            <small>128 Available Coupons</small>
                        </div><!-- end desc -->
                    </div><!-- end media -->

                </div><!-- end box -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="promobox">
                    <div class="post-media">
                        <a href="categories.html"><img src="uploads/promo_02.png" alt="" class="img-responsive"></a>

                        <div class="promo-desc">
                            <img src="uploads/small_02.png" alt="" class="alignleft img-thumbnail">
                            <h4><a href="#">Shop for LifeStyle</a></h4>
                            <small>44 Available Coupons</small>
                        </div><!-- end desc -->
                    </div><!-- end media -->

                </div><!-- end box -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="promobox">
                    <div class="post-media">
                        <a href="categories.html"><img src="uploads/promo_03.png" alt="" class="img-responsive"></a>

                        <div class="promo-desc">
                            <img src="uploads/small_03.png" alt="" class="alignleft img-thumbnail">
                            <h4><a href="#">Shop for Tech</a></h4>
                            <small>55 Available Coupons</small>
                        </div><!-- end desc -->
                    </div><!-- end media -->
                </div><!-- end box -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis">

        <div class="row">
            <div class="content col-md-8">
                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>21 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">50% Discount Coupon from CatiLogoms.com</a></h3>
                                    <p>At reasonable prices, quality assurance, 100% secure shopping. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA50</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_01" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">50% Discount Coupon Code from CatiLogoms.com</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>21 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>At reasonable prices, quality assurance, 100% secure shopping. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA50" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA50</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_13.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>12 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">Greensoil Printable Coupon Code</a></h3>
                                    <p>100% secure shopping at reasonable prices, quality assurance. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div>
                                <!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">PRINT ME</span>
                                        <span class="show-code print-code"><i class="fa fa-print"></i> Print Coupon</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_21" class="modal fade code-modal print-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">50% Discount Coupon Code from CatiLogoms.com</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row bgcolor text-center">
                                            <div class="col-md-8 col-md-offset-2">
                                                <a class="coupon-code btn btn-primary btn-block" href="#" title="Click to Copy"><img src="uploads/print.png" alt="" class="img-responsive"></a>

                                                <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default">Print Code <i class="fa fa-print"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div>
                                                    <!-- end coupon-meta -->
                                                </div>
                                                <!-- end col -->

                                                <div class="pull-right">
                                                    <div class="clearfix">
                                                        <ul class="list-inline social-small">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div><!-- end share -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>5 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">MyLogo.com 10$ off for all orders</a></h3>
                                    <p>Win tablet pc discount on your MyLogo com shopping plus free... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA33</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 5 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_02" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">MyLogo.com 10$ off for all orders</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>5 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Win tablet pc discount on your MyLogo com shopping plus free.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA33" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA33</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_12.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <small>51 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">Follow Skinuque on Facebook get 10% Off</a></h3>
                                    <p>Follow Skinuque on Facebook get 10% Off 100% secure shopping at reasonable prices, quality assurance. Lorem ipsum dolor sit amet, consectetur adipisiciur.</p>
                                </div>
                                <!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">PRINT ME</span>
                                        <span class="show-code print-code"><i class="fa fa-search"></i> View Deal</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_23" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">Follow Skinuque on Facebook get 10% Off</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_12.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>71 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Bringing a new breath to the fashion CompanieNamis's.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="NO COUPON NEEDED" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">NO COUPON NEEDED</button>
                                                    <small>Click to Visit</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>71 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">44$ off CompanieNamis Discount</a></h3>
                                    <p>Bringing a new breath to the fashion CompanieNamis's.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA56</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 21 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_03" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">44$ off CompanieNamis Discount</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>71 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Bringing a new breath to the fashion CompanieNamis's.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA56" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA56</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>12 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">10% Discount Coupon from KnowLogoDesign</a></h3>
                                    <p>Those new members to the site via our instant KnowLogoDesign.com.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA51</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 51 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_04" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">10% Discount Coupon from KnowLogoDesign</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>12 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Those new members to the site via our instant KnowLogoDesign.com.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA51" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA51</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>44 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">Free Shipping for All Orders</a></h3>
                                    <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA29</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 0 Comment</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_05" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">Free Shipping for All Orders</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>21 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA29" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA29</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>21 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">$5 for for your next logo design</a></h3>
                                    <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRAAA</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_06" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">$5 for for your next logo design</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>21 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Get free shipping for all your next orders from this store.. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRAAA" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRAAA</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <div class="coupon-list list-wrapper">
                    <div class="coupon-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="coupon-single.html"><img src="uploads/store_07.jpg" alt="" class="img-responsive"></a>
                                    <small><a href="store-single.html">View Store Coupons</a></small>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>21 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="coupon-single.html">$10 Credit for new users on Sohbet Molasi</a></h3>
                                    <p>Get free shipping for all your next orders from this store.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore consectetur.</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="http://themeforest.net/">
                                        <span class="coupon-code">2016TATILRA21</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : 21/07/2016</small>
                                    <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 11 Comments</a></small>
                                </div><!-- end coupon-top -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div id="code_id_07" class="modal fade code-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4><a href="coupon-single.html">$10 Credit for new users on Sohbet Molasi</a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="store-single.html"><img src="uploads/store_07.jpg" alt="" class="img-responsive"></a>
                                                <div class="modal-button">
                                                    <a href="http://themeforest.net/" target="_blank" title="" class="btn btn-default btn-block">Visit Store <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-md-8">
                                                <div class="coupon-meta">
                                                    <div class="coupon-top clearfix">
                                                        <div class="rating pull-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <small>21 Rating</small>
                                                        </div>
                                                        <div class="favorite-coupon pull-right text-right">
                                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div><!-- end coupon-top -->
                                                </div><!-- end coupon-meta -->

                                                <p>Get free shipping for all your next orders from this store. You can save awesome discount with our coupon code today!</p>

                                                <div class="modal-share clearfix">
                                                    <ul class="list-inline social-small">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>   
                                                </div><!-- end share -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end modal-body -->

                                    <div class="modal-footer">
                                        <div class="coupon-area">
                                            <div class=" row">
                                                <div class="col-md-4 text-left">
                                                    <div class="coupon-vote">
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i class="fa fa-smile-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i class="fa fa-frown-o"></i></a>
                                                    </div><!-- end coupon-meta -->
                                                </div><!-- end col -->
                                                <div class="col-md-8 text-center">
                                                    <button data-clipboard-text="2016TATILRA21" class="coupon-code btn btn-primary btn-block" type="submit" title="Click to Copy">2016TATILRA21</button>
                                                    <small>Click to Copy</small>
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end coupon-area -->
                                    </div><!-- end modal-footer -->
                                </div><!-- end mpdal-content -->
                            </div><!-- end modal-dialog -->
                        </div><!-- end modal -->
                    </div><!-- end coupon-wrapper -->
                </div><!-- end coupon list -->

                <nav class="nav-pagi">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end content -->

            <div class="sidebar col-md-4 col-sm-12">
                <div class="widget custom-widget clearfix">
                    <a href="user-submit.html">
                        <i class="fa fa-bullhorn alignleft fa-3x"></i>
                        <h4>Submit a Coupon</h4>
                        <p>Share your code discount's everyone</p>
                    </a>
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4><span>Best Coupons</span></h4>
                    </div>

                    <div class="best-coupons">
                        <ul class="customlist">
                            <li><a href="#">MyLogo.com 10$ off for all orders</a></li>
                            <li><a href="#">44$ off CompanieNamis Discount</a></li>
                            <li><a href="#">10% Discount Coupon from Gosi</a></li>
                            <li><a href="#">Free Shipping for All Orders</a></li>
                            <li><a href="#">$5 for for your next logo design</a></li>
                        </ul>
                    </div>
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="featured hidden-xs"><i class="fa fa-star-o"></i></div>
                    <div class="widget-title">
                        <h4><span>Best Stores</span></h4>
                    </div>

                    <div class="text-center store-list row">
                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_01.jpg" alt="" class="img-responsive"></a>
                                <small>Takifest.com</small>
                            </div>
                            <!-- end media -->
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_02.jpg" alt="" class="img-responsive"></a>
                                <small>WPServis.com</small>
                            </div>
                            <!-- end media -->
                        </div>

                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_03.jpg" alt="" class="img-responsive"></a>
                                <small>PurplebyBanu.com</small>
                            </div>
                            <!-- end media -->
                        </div>

                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_04.jpg" alt="" class="img-responsive"></a>
                                <small>Tutsplus.com</small>
                            </div>
                            <!-- end media -->
                        </div>

                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_05.jpg" alt="" class="img-responsive"></a>
                                <small>Showwp.com</small>
                            </div>
                            <!-- end media -->
                        </div>

                        <div class="col-md-6 col-xs-6">
                            <div class="post-media">
                                <a href="coupon-single.html"><img src="uploads/store_06.jpg" alt="" class="img-responsive"></a>
                                <small>PSDConvertHTML.com</small>
                            </div>
                            <!-- end media -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4><span>Email Newsletter</span></h4>
                    </div>

                    <div class="newsletter">
                        <p>Your email is safe with us and we hate spam as much as you do. Lorem ipsum dolor sit amet et dolore.</p>
                        <form class="">
                            <input type="text" class="form-control" placeholder="Enter your name..">
                            <input type="email" class="form-control" placeholder="Enter your email..">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div><!-- end widget -->
            </div><!-- end sidebar -->
        </div><!-- end row -->

        <div class="footer-content">
            <div class="row">
                <div class="col-md-12">
                    <h4>Popular Categories</h4>
                </div>
                <!-- end col -->
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Baby Kids</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Electronics</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Gifts</a></li>
                        <li><a href="#">Health Beauty</a></li>
                        <li><a href="#">Home Garden</a></li>
                        <li><a href="#">Home Supplies</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Entertainetmen</a></li>
                        <li><a href="#">Digital Stores</a></li>
                        <li><a href="#">Marketplaces</a></li>
                        <li><a href="#">Musicians</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Movies & Films</a></li>
                        <li><a href="#">Phones</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Televisions</a></li>
                        <li><a href="#">Telegraphers</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Baby Toys</a></li>
                        <li><a href="#">Clothings</a></li>
                        <li><a href="#">Jewellry</a></li>
                        <li><a href="#">Car Supplies</a></li>
                        <li><a href="#">Watches</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <ul class="customlist">
                        <li><a href="#">Glassess</a></li>
                        <li><a href="#">Medical</a></li>
                        <li><a href="#">Pet Shops</a></li>
                        <li><a href="#">LifeStyle</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end ttmenu-content -->
    </div><!-- end container -->
</div><!-- end section -->

@endsection