@extends('site.layouts.app')

@section('title', 'Contact Me')
@section('content')
<div class="eman-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Contact Me</h1>
            </div>
            <ul class="eman-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Me</li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1"><span></span></li>
        <li class="shape-2 scene"></li>
        <li class="shape-3 scene"></li>
        <li class="shape-4"><span></span></li>
        <li class="shape-5 scene"></li>
    </ul>
</div>
<section class="section-gap-equal contact-me-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="contact-me">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img src="assets/images/others/contact-me.jpg" alt="Contact Me">
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene">
                                    <img data-depth="1.4" src="assets/images/about/shape-13.png" alt="Shape">
                                </li>
                                <li class="shape-2 scene">
                                    <img data-depth="-1.4" src="assets/images/counterup/shape-02.png">
                                </li>
                                <li class="shape-3">
                                    <img src="assets/images/about/shape-07.png" alt="Shape">
                                </li>
                            </ul>
                        </div>
                        <div class="contact-us-info">
                            <h3 class="heading-title">I will Answer all Your Questions</h3>
                            <ul class="address-list">
                          
                                <li>
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:edublink@example.com">edublink@example.com</a></p>
                                </li>
                                <li>
                                    <h5 class="title">Phone</h5>
                                    <p><a href="tel:+0914135548598">(+091) 413 554 8598</a></p>
                                </li>
                            </ul>
                            <ul class="social-share">
                            @if(!empty($settings['facebook']))
                <li><a href="{{ $settings['facebook'] }}" target="_blank"><i class="icon-facebook"></i> Facebook</a></li>
            @endif
            @if(!empty($settings['twitter']))
                <li><a href="{{ $settings['twitter'] }}" target="_blank"><i class="icon-twitter"></i> Twitter</a></li>
            @endif
            @if(!empty($settings['instagram']))
                <li><a href="{{ $settings['instagram'] }}" target="_blank"><i class="icon-instagram"></i> Instagram</a></li>
            @endif
            @if(!empty($settings['linkedin']))
                <li><a href="{{ $settings['linkedin'] }}" target="_blank"><i class="icon-linkedin"></i> LinkedIn</a></li>
            @endif
            @if(!empty($settings['youtube']))
                <li><a href="{{ $settings['youtube'] }}" target="_blank"><i class="icon-youtube"></i> YouTube</a></li>
            @endif
            @if(!empty($settings['snapchat']))
                <li><a href="{{ $settings['snapchat'] }}" target="_blank"><i class="icon-snapchat"></i> Snapchat</a></li>
            @endif
            @if(!empty($settings['tiktok']))
                <li><a href="{{ $settings['tiktok'] }}" target="_blank"><i class="icon-tiktok"></i> TikTok</a></li>
            @endif
            @if(!empty($settings['x']))
                <li><a href="{{ $settings['x'] }}" target="_blank"><i class="icon-x"></i> X</a></li>
            @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="eman-section-gap contact-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="section-title section-center">
                        <h3 class="title">Just Drop Me a Line</h3>
                    </div>
                    <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row row--10">
                            <div class="form-group col-lg-6">
                                <input type="text" name="contact-name" id="contact-name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" name="contact-email" id="contact-email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="contact-phone" id="contact-phone" placeholder="Phone number">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="contact-message" id="contact-message" cols="30" rows="6" placeholder="Type your message" required></textarea>
                            </div>
                            <div class="form-group col-12 text-center">
                                <button class="rn-btn eman-btn submit-btn" name="submit" type="submit">Submit Now <i class="icon-4"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1 scene"></li>
        <li class="shape-2 scene"></li>
        <li class="shape-3 scene"></li>
        <li class="shape-4 scene"></li>
    </ul>
</section>
@endsection