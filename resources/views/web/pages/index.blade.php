@extends('web.layouts.app')

@section('content')

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url({{$banners->getImage()}})">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4">I am {{$user->name}}</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">CEO AbhiFolio,Web Developer,Web Designer,Frontend Developer,Java Developer</span><strong class="text-slider"></strong></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="{{$user->getImage()}}" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>{{$user->name}}</span></p>
                                        <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                                        <p><span class="title-s">Email: </span> <span>{{$user->email}}</span></p>
                                        <p><span class="title-s">Phone: </span> <span>{{$user->mobile_number}}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Skill</p>
                                @foreach($skill as $skill)
                                    <span>{{$skill->title}}</span> <span class="pull-right">{{$skill->excerpt}}%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{$skill->excerpt}}%;" aria-valuenow="{{$skill->excerpt}}" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                {!! html_entity_decode($about->content) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ Section Services Star /-->
<section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Services
                    </h3>
                    <p class="subtitle-a">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $services)
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="{{$services->excerpt}}"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">{{$services->title}}</h2>
                        <p class="s-description text-center">
                            {!! html_entity_decode($services->content) !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/ Section Services End /-->

<div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">5</p>
                        <span class="counter-text">WORKS COMPLETED</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">3</p>
                        <span class="counter-text">MONTHS OF EXPERIENCE</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-people"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">0</p>
                        <span class="counter-text">TOTAL CLIENTS</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">0</p>
                        <span class="counter-text">AWARD WON</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Section Portfolio Star /-->
<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Portfolio
                    </h3>
                    <p class="subtitle-a">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($product as $product)
            <div class="col-md-4">
                <div class="work-box">
                    <a href="{{$product->getPartnerImage()}}" data-lightbox="gallery-mf">
                        <div class="work-img">
                            <img src="{{$product->getPartnerImage()}}" alt="" class="img-fluid"  height="100px">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">{{$product->title}}</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">{{$product->portfolio_type}}</span> / <span class="w-date">{{$product->created_at}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--/ Section Portfolio End /-->

<!--/ Section Testimonials Star /-->
<div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-mf" class="owl-carousel owl-theme">
                    @foreach($testimonial as $testimonial)
                    <div class="testimonial-box">
                        <div class="author-test">
                            <img src="{{$testimonial->getTestimonialImage()}}" alt="" class="rounded-circle b-shadow-a">
                            <span class="author">{{$testimonial->title}}</span>
                        </div>
                        <div class="content-test">
                            <p class="description lead">
                                {{$testimonial->content}}
                            </p>
                            <span class="comit"><i class="fa fa-quote-right"></i></span>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Section Blog Star /-->
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Blog
                    </h3>
                    <p class="subtitle-a">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blog as $blog)
            <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                        <a href="{{url('single-blog/'.$blog->slug)}}"><img src="{{$blog->getNewsImage()}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category">Travel</h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="{{url('single-blog/'.$blog->slug)}}">{{$blog->title}}</a></h3>
                        <p class="card-description">
                           {{$blog->content}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="post-author">
                            <a href="#">
                                <img src="{{$user->getImage()}}" alt="" class="avatar rounded-circle">
                                <span class="author">{{$user->name}}</span>
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="ion-ios-clock-outline"></span> 10 min
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/ Section Blog End /-->

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <form action="{{url('get-in-touch')}}" method="post"  class="contactForm">
                                        {{csrf_field()}}
                                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        {!! html_entity_decode($get_touch->content) !!}
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="ion-ios-location"></span>{{$user->address}}</li>
                                        <li><span class="ion-ios-telephone"></span>{{$user->mobile_number}}/{{$user->phone_number}}</li>
                                        <li><span class="ion-email"></span>{{$user->email}}</li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>AbhiFolio</strong>. All Rights Reserved</p>
                        <div class="credits">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>




@endsection
