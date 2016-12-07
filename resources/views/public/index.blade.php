@extends('layouts.landing')

@section('content')
<!--SLIDER-->
        <!-- <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(img/sliders/Slide.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>We Are <span>Rise</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide2.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Creative <span>Design</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide3.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Clean <span>Code</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>Welcome To <span>TOP10TER</span></h2>
            <hr class="sep">
            <p>[Tagline]</p>
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





                    <div class="col-md-4">
                        <div class="media-left">
                            <img src="images/Pakistan Pollution.jpg">
                        </div>
                        <div class="media-body">
                            <p>10 Negara dengan Tingkat Polusi Udara Tertinggi</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <img src="images/apollo_11.jpg">
                        </div>
                        <div class="media-body">
                            <p>10 Petualangan Manusia yang Akan Terus Dikenang Sepanjang Masa</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <img src="images/Fahrenheit.jpg">
                        </div>
                        <div class="media-body">
                            <p>10 Film Dokumenter yang Menggemparkan Dunia</p>
                        </div>

                    </div>

                    <div class="row wow fadeInUp" data-wow-delay=".6s">
                        <div class="col-md-4">
                            <div class="media-left">
                                <img src="images/luwak_01.jpg">
                            </div>
                            <div class="media-body">
                                <p>10 Kopi Termahal di Dunia</p>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <h2>Our Work</h2>
            <hr class="sep">
            <p>Showcase Your Amazing Work With Us</p>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="img/portfolio/1.jpg" data-lightbox="image-1" data-title="Your caption">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="1">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/2.jpg" class="portfolio-box" data-lightbox="image-2" data-title="Your caption">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="2">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/3.jpg" class="portfolio-box" data-lightbox="image-3" data-title="Your caption">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="3">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/4.jpg" class="portfolio-box" data-lightbox="image-4" data-title="Your caption">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="4">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/5.jpg" class="portfolio-box" data-lightbox="image-5" data-title="Your caption">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="5">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/6.jpg" class="portfolio-box" data-lightbox="image-6" data-title="Your caption">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="6">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process
	============================================= -->
    <section id="work-process">
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
    </section>
    <!-- Some Fune Facts
	============================================= -->
    <section id="fun-facts">
        <div class="container">
            <h2>Some Fun Facts </h2>
            <hr class="light-sep">
            <p>Fun Facts</p>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-3">
                    <span class="icon-happy"></span>
                    <h2 class="number timer">367</h2>
                    <h4>Happy Clients</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-trophy"></span>
                    <h2 class="number timer">150</h2>
                    <h4>Project Done</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-wine"></span>
                    <h2 class="number timer">121</h2>
                    <h4>Glass Of Wine</h4>
                </div>
                <div class="col-lg-3">
                    <span class="icon-documents"></span>
                    <h2 class="number timer">10000</h2>
                    <h4>Lines Of Code</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Some Fune Facts
	============================================= -->
    <section id="team">
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
    </section>
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
                        <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

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
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <a href="#" class="btn-block">Send</a>
                </form>
            </div>
        </div>
    </section>
    <!-- Google Map
	============================================= -->
    <div id="map"></div>
@endsection

@section('customjs')

@endsection