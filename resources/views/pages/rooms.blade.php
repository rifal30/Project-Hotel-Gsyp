@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<!--end-->
<section class="image-head-wrapper" style="background-image: url('/assets/images/banner.jpg');">
                <div class="inner-wrapper">
                    <h1>Rooms</h1>
                </div>
            </section>
            <div class="clearfix"></div>

            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="/assets/images/room1.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>delux room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="/assets/images/room2.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room2.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>delux room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="/assets/images/room3.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room3.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>delux room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="/assets/images/room4.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room4.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>delux room</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--service block--->
            <section class="service-block">
                <div class="bg-set-col">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                                <div class="service-details text-center">
                                    <div class="service-image">
                                        <img alt="image" class="img-responsive" src="/assets/images/icons/wifi.png">
                                    </div>
                                    <h4><a>free wifi</a></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                                <div class="service-details text-center">
                                    <div class="service-image">
                                        <img alt="image" class="img-responsive" src="/assets/images/icons/key.png">
                                    </div>
                                    <h4><a>room service</a></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                                <div class="service-details text-center">
                                    <div class="service-image">
                                        <img alt="image" class="img-responsive" src="/assets/images/icons/car.png">
                                    </div>
                                    <h4><a>free parking</a></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                                <div class="service-details text-center">
                                    <div class="service-image">
                                        <img alt="image" class="img-responsive" src="/assets/images/icons/user.png">
                                    </div>
                                    <h4><a>customer support</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('layouts.footer')
   
            @endsection