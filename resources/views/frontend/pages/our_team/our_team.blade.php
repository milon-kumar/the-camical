@extends('frontend.layout.app')
@section('title','About Us')
@section('content')
    <section class="header-title section-padding" style="background: url( {{ asset('/') }}assets/frontend/images/sub/about-bg.jpg)">
        <div class="container">
            <h2 class="title">Our Team</h2>
            <span class="sub-title">Home / <span class="text-color">Our Team</span></span>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our <span class="text-color">Team</span></h2>
            </div> <!-- section-title -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="team-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="left-bar pull-left">
                                <span class="caption">
                                    <img src="{{ asset('/') }}assets/frontend/images/team/t1.jpg" alt="">
                                </span>

                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul> <!-- social-icon -->
                        </div> <!-- left-bar -->

                        <div class="right-bar">
                            <h5>Chris Brown</h5>
                            <span class="position">Founder & CEO</span>

                            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed do eiusmod tempor incididunt..</p>

                            <a href="#" class="link">Read Full Bio</a>
                        </div>
                    </div><!--  team-wrapper -->
                </div>

                <div class="col-sm-6">
                    <div class="team-wrapper last-wrapper wow fadeInRight" data-wow-delay="0.3s">
                        <div class="left-bar pull-left">
                                <span class="caption">
                                    <img src="{{ asset('/') }}assets/frontend/images/team/t1.jpg" alt="">
                                </span>

                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul> <!-- social-icon -->
                        </div> <!-- left-bar -->

                        <div class="right-bar">
                            <h5>J C Cornwell</h5>
                            <span class="position">Founder & CEO</span>

                            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed do eiusmod tempor incididunt..</p>

                            <a href="#" class="link">Read Full Bio</a>
                        </div>
                    </div><!--  team-wrapper -->
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


@endsection
