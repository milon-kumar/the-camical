@extends('frontend.layout.app')
@section('title','About Us')
@section('content')
    <section class="header-title section-padding" style="background: url( {{ asset('/') }}assets/frontend/images/sub/about-bg.jpg)">
        <div class="container">
            <h2 class="title">About Us</h2>
            <span class="sub-title">Home / <span class="text-color">About Us</span></span>
        </div>
    </section> <!-- header-title -->
    <section class="mission-section">
        <div class="container text-center">
            <span class="caption">
                <img class="wow fadeInDown" src="" alt="image">
            </span>

            <div class="mission-wrapper">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <ul class="nav nav-tabs inline-block" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#ourAbout" aria-controls="history" role="tab" data-toggle="tab">Our About</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a>
                            </li>
                            <li role="presentation">
                                <a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Mission</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="ourAbout">
                                <div class="mission-content">
                                    <h3>About Us</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default <br>
                                        model text, and a search for 'lorem ipsum' will uncover many <br>
                                        web sites still in their infancy.</p>
                                </div> <!-- mission-content -->
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="history">
                                <div class="mission-content">
                                    <h3>We started afresh!</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default <br>
                                        model text, and a search for 'lorem ipsum' will uncover many <br>
                                        web sites still in their infancy.</p>
                                </div> <!-- mission-content -->
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="mission">
                                <div class="mission-content">
                                    <h3>We started a new mission</h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. as opposed to using 'Content here, content here', making it look like readable English.</p>

                                    <p>Publishing many desktop  packages and web page editors now use Lorem Ipsum as their default <br>
                                        model text, and will uncover a search for 'lorem ipsum' many <br>
                                        web sites still in their infancy.</p>
                                </div> <!-- mission-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- mission-wrapper -->
        </div>
    </section> <!-- mission-section -->
@endsection
