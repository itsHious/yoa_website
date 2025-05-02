@extends('website.layouts.index')


@section('content')
      
<div class="rts-breadcrumb-area bg_primary"  style="background-image:url('{{ asset('website/assets/images/header/contact.jpg') }}');background-position:center;background-size:cover; background-repeat:no repeat;">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            <span class="bg-title">Contact Us</span>
                            <h1 class="title rts-text-anime-style-1">
                               Get In Touch
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-area">
                <img src="{{ asset('website/assets/images/about/shape/01.png')}}" alt="shape" class="one">
                <img src="{{ asset('website/assets/images/about/shape/02.png')}}" alt="shape" class="two">
                <img src="{{ asset('website/assets/images/about/shape/03.png')}}" alt="shape" class="three">
            </div>
        </div>
    
 


        <div class="rts-contact-area-in-page padding-extend-100" data-animation="fadeInUp" data-delay="0.2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-info-area-wrapper-p new">
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-flip"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Call Us 24/7</span>
                                    <a href="tel:+233 241305592">+233 241305592</a> <br>
                                    <a href="tel:+233 54 012 5870">+233 54 012 5870</a>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Work with us</span>
                                    <a href="#">info@yoa.com</a>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Our Location</span>
                                    <a href="#">1 Anum Yemo Loop, <br> East Legon, <br> Accra, Ghana</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-p new">
                            <form class="" method="post" action="{{ route('contact.send') }}" id="contact-form">
                                @csrf
                                <h4 class="title">Get In Touch</h4>
                                <input name="name" id="name" required type="text" placeholder="Your Name">
                                <input type="email" name="email" required id="email" placeholder="Johndoe@gmail.com">
                                <textarea name="message" id="message" required placeholder="Message"></textarea>
                                <input type="text" name="honeypot"  style="display:none;">

                                <div id="form-messages"></div>
                                <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact areas main end -->
    
        <!-- map area start -->
        <div class="google-map-area rts-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248778.1226535137!2d-86.69566092360928!3d37.327475452900615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8842734c8b1953c9%3A0x771f6f4ec5ccdffc!2sKentucky%2C%20USA!5e0!3m2!1sen!2sbd!4v1741757435755!5m2!1sen!2sbd" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection