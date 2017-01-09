@extends('layouts.landing')

@section('content')
<!--SLIDER-->
        <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(img/sliders/Slide.jpg)">
                <div class="caption">
                    <h4 style="color:white">What's New?</h4>
                    <h1><strong>TOP10TER</strong></h1>
                    <!-- <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a> -->
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide2.jpg)">
                <div class="caption">
                    <h3 style="color:white">10 Facts</h3>
                    <h1>Unique | Entertain</h1>
                    <!-- <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a> -->
                </div>
            </div>
        </div>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>Welcome To <span>TOP10TER</span></h2>
            <hr class="sep">
            <!-- <p>[Tagline]</p> -->
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/logo/logo-black.png" alt="logo">
        </div>
    </section>

    <!-- Articles
	============================================= -->
    <section id="articles">
        <div class="container">
            <h2>Articles</h2>
            <hr class="light-sep">
            <div class="articles-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                @if($articles->count()>0)
                    @foreach($articles as $article)
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-7" style="overflow:hidden;">
                                <img src="{{ $article->article_detail->first()->cover }}" style="height:15vw;object-fit:cover;">
                            </div>
                            <div class="col-md-5" style="text-align:left;">
                                <a href="{{url('showArticle',$article->id)}}">
                                    {{$article->title}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
                <button type="submit" class=" center-block btn-block">READ MORE</button>
            </div>
        </div>
    </section>

    <!-- Portfolio
	============================================= -->
    <section id="polling">
        <div class="container">
            <h2>POLLING</h2>
            <hr class="sep">
            <p>CHOOSE YOUR OWN TOPIC OF THE WEEK</p>
                @if($pollings->count()>0)
                    @foreach($pollings as $polling)
                    <div class="col-md-4" style="box-shadow: 10px 10px 5px #888888; background-color:white;">
                            <form>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h5> {{$polling->question}} </h5>
                                </div>
                                <hr class="sep" style="margin-top:0; margin-bottom:0;">
                                <div class="panel-body" style="text-align:left; padding-left:2vw;">
                                    @foreach($polling->option as $o)
                                        <input type="radio"> {{$o->answer}} <br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <button type="submit" class="btn-block">VOTE</button>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <button type="submit" class="btn-block">VIEW RESULT</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Work Process
	============================================= -->
    <!-- <section id="work-process">
        <div class="container">
            <h2>Work Process</h2>
            <hr class="sep">
            <p>What Happen In The Background</p>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-3">
                    <span class="icon-chat"></span>
                    <h4>1.Discuss</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-circle-compass"></span>
                    <h4>2.Sketch</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-browser"></span>
                    <h4>3.Make</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-global"></span>
                    <h4>4.Publish</h4>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Some Fune Facts
	============================================= -->
    <section id="fun-facts">
        <div class="container">
            <h2>Some Fun Facts </h2>
            <hr class="light-sep">
            <p>Fun Facts</p>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-3">
                    <span class="icon-trophy"></span>
                    <h2 class="number timer">100</h2>
                    <h4>Unique Facts</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-happy"></span>
                    <h2 class="number timer">50</h2>
                    <h4>Polling</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-profile-male"></span>
                    <h2 class="number timer">20</h2>
                    <h4>Users</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-profile-female"></span>
                    <h2 class="number timer">5</h2>
                    <h4>Authors</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Some Fune Facts
	============================================= -->
    <!-- <section id="team">
        <div class="container">
            <h2>Our Team</h2>
            <hr class="sep">
            <p>Designers Behind This Work</p>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/MariaDoe.jpg" alt="1">
                        <h4>Maria Doe</h4>
                        <p>Designer</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/JasonDoe.jpg" alt="2">
                        <h4>Jason Doe</h4>
                        <p>Developer</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <img class="img-responsive center-block" src="img/team/MikeDoe.jpg" alt="3">
                        <h4>Mike Doe</h4>
                        <p>Photographer</p>
                        <div class="team-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Testimonials
	============================================= -->
    <section id="testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <hr class="light-sep">
            <p>What Clients Say About Us</p>
            <div id="owl-testi" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>I’am amazed, I should say thank you so much for your awesome information. I will 
look into <span>TOP10TER</span> everyday.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>Thankyou for the information that <span>TOP10TER</span> give. I haven't know that before, but now I can know more..<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>I’am amazed, I should say thank you so much for your awesome information. I will 
look into <span>TOP10TER</span> everyday.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us
	============================================= -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <hr class="sep">
            <p>Get In Touch</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form method="post" action="{{url('/contact')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn-block">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Google Map
	============================================= -->
    <!-- <div id="map"></div> -->
@endsection

@section('customjs')

@endsection