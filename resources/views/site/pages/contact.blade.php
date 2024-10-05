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
                                <img src="/assets/site/images/others/contact-me.jpg" alt="Contact Me">
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene">
                                    <img data-depth="1.4" src="/assets/site/images/about/shape-13.png" alt="Shape">
                                </li>
                                <li class="shape-2 scene">
                                    <img data-depth="-1.4" src="/assets/site/images/counterup/shape-02.png">
                                </li>
                                <li class="shape-3">
                                    <img src="/assets/site/images/about/shape-07.png" alt="Shape">
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
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
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
                    <form id="contact-form" method="POST">
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
                    <div id="form-messages" class="mt-3"></div>
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

<script>
$(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        $('#form-messages').html('');

        $.ajax({
            url: "{{ route('contact.store') }}",
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#form-messages').html('<div class="alert alert-success">Your message has been sent successfully.</div>');
                $('#contact-form')[0].reset();
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessages = '<div class="alert alert-danger"><ul>';
                $.each(errors, function(key, value) {
                    errorMessages += '<li>' + value + '</li>';
                });
                errorMessages += '</ul></div>';
                $('#form-messages').html(errorMessages);
            }
        });
    });
});
</script>
@endsection