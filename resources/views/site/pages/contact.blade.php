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

            <div class="col-xl-8">
                <div class="contact-me">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img src="assets/site/images/others/contact-me.jpg" alt="Contact Me">
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1 scene">
                                    <img data-depth="1.4" src="assets/site/images/about/shape-13.png" alt="Shape">
                                </li>
                                <li class="shape-2 scene">
                                    <img data-depth="-1.4" src="assets/site/images/counterup/shape-02.png">
                                </li>
                                <li class="shape-3">
                                    <img src="assets/site/images/about/shape-07.png" alt="Shape">
                                </li>
                            </ul>
                        </div>
                        <div class="contact-us-info">
                            <h3 class="heading-title">{{ $settings['contact_title'] }}</h3>
                            <ul class="address-list">
                                <li>
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a></p>
                                </li>
                                <li>
                                    <h5 class="title">Phone</h5>
                                    <p><a href="tel:+{{ $settings['phone'] }}">{{ $settings['phone'] }}</a></p>
                                </li>
                            </ul>
                            <ul class="social-share">
                                @if(!empty($settings['facebook']))
                                    <li><a href="{{ $settings['facebook'] }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if(!empty($settings['twitter']))
                                    <li><a href="{{ $settings['twitter'] }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if(!empty($settings['instagram']))
                                    <li><a href="{{ $settings['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if(!empty($settings['linkedin']))
                                    <li><a href="{{ $settings['linkedin'] }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                                @if(!empty($settings['youtube']))
                                    <li><a href="{{ $settings['youtube'] }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                @endif
                                @if(!empty($settings['snapchat']))
                                    <li><a href="{{ $settings['snapchat'] }}" target="_blank"><i class="fab fa-snapchat-ghost"></i></a></li>
                                @endif
                                @if(!empty($settings['tiktok']))
                                <li><a href="{{ $settings['tiktok'] }}" class="color-tiktok"><img alt="svgImg" style="background-color: aliceblue;width: 31px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCA1MCA1MCI+CjxwYXRoIGQ9Ik0gOSA0IEMgNi4yNDk1NzU5IDQgNCA2LjI0OTU3NTkgNCA5IEwgNCA0MSBDIDQgNDMuNzUwNDI0IDYuMjQ5NTc1OSA0NiA5IDQ2IEwgNDEgNDYgQyA0My43NTA0MjQgNDYgNDYgNDMuNzUwNDI0IDQ2IDQxIEwgNDYgOSBDIDQ2IDYuMjQ5NTc1OSA0My43NTA0MjQgNCA0MSA0IEwgOSA0IHogTSA5IDYgTCA0MSA2IEMgNDIuNjcxNTc2IDYgNDQgNy4zMjg0MjQxIDQ0IDkgTCA0NCA0MSBDIDQ0IDQyLjY3MTU3NiA0Mi42NzE1NzYgNDQgNDEgNDQgTCA5IDQ0IEMgNy4zMjg0MjQxIDQ0IDYgNDIuNjcxNTc2IDYgNDEgTCA2IDkgQyA2IDcuMzI4NDI0MSA3LjMyODQyNDEgNiA5IDYgeiBNIDI2LjA0Mjk2OSAxMCBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgMjUuMDQyOTY5IDEwLjk5ODA0NyBDIDI1LjA0Mjk2OSAxMC45OTgwNDcgMjUuMDMxOTg0IDE1Ljg3MzI2MiAyNS4wMjE0ODQgMjAuNzU5NzY2IEMgMjUuMDE2MTg0IDIzLjIwMzAxNyAyNS4wMDk3OTkgMjUuNjQ4NzkgMjUuMDA1ODU5IDI3LjQ5MDIzNCBDIDI1LjAwMTkyMiAyOS4zMzE2NzkgMjUgMzAuNDk2ODMzIDI1IDMwLjU5Mzc1IEMgMjUgMzIuNDA5MDA5IDIzLjM1MTQyMSAzMy44OTI1NzggMjEuNDcyNjU2IDMzLjg5MjU3OCBDIDE5LjYwODg2NyAzMy44OTI1NzggMTguMTIxMDk0IDMyLjQwMjg1MyAxOC4xMjEwOTQgMzAuNTM5MDYyIEMgMTguMTIxMDk0IDI4LjY3NTI3MyAxOS42MDg4NjcgMjcuMTg3NSAyMS40NzI2NTYgMjcuMTg3NSBDIDIxLjUzNTc5NiAyNy4xODc1IDIxLjY2MzA1NCAyNy4yMDgyNDUgMjEuODgwODU5IDI3LjIzNDM3NSBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgMjMgMjYuMjQwMjM0IEwgMjMgMjIuMDM5MDYyIEEgMS4wMDAxIDEuMDAwMSAwIDAgMCAyMi4wNjI1IDIxLjA0MTAxNiBDIDIxLjkwNjY3MyAyMS4wMzEyMTYgMjEuNzEwNTgxIDIxLjAxMTcxOSAyMS40NzI2NTYgMjEuMDExNzE5IEMgMTYuMjIzMTMxIDIxLjAxMTcxOSAxMS45NDUzMTMgMjUuMjg5NTM3IDExLjk0NTMxMiAzMC41MzkwNjIgQyAxMS45NDUzMTIgMzUuNzg4NTg5IDE2LjIyMzEzMSA0MC4wNjY0MDYgMjEuNDcyNjU2IDQwLjA2NjQwNiBDIDI2LjcyMjA0IDQwLjA2NjQwOSAzMSAzNS43ODg1ODggMzEgMzAuNTM5MDYyIEwgMzEgMjEuNDkwMjM0IEMgMzIuNDU0NjExIDIyLjY1MzY0NiAzNC4yNjc1MTcgMjMuMzkwNjI1IDM2LjI2OTUzMSAyMy4zOTA2MjUgQyAzNi41NDI1ODggMjMuMzkwNjI1IDM2LjgwMjMwNSAyMy4zNzQ0NDIgMzcuMDUwNzgxIDIzLjM1MTU2MiBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgMzcuOTU4OTg0IDIyLjM1NTQ2OSBMIDM3Ljk1ODk4NCAxNy42ODU1NDcgQSAxLjAwMDEgMS4wMDAxIDAgMCAwIDM3LjAzMTI1IDE2LjY4NzUgQyAzMy44ODY2MDkgMTYuNDYxODkxIDMxLjM3OTgzOCAxNC4wMTIyMTYgMzEuMDUyNzM0IDEwLjg5NjQ4NCBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgMzAuMDU4NTk0IDEwIEwgMjYuMDQyOTY5IDEwIHogTSAyNy4wNDEwMTYgMTIgTCAyOS4zMjIyNjYgMTIgQyAzMC4wNDkwNDcgMTUuMjk4NyAzMi42MjY3MzQgMTcuODE0NDA0IDM1Ljk1ODk4NCAxOC40NDUzMTIgTCAzNS45NTg5ODQgMjEuMzEwNTQ3IEMgMzMuODIwMTE0IDIxLjIwMTkzNSAzMS45NDE0ODkgMjAuMTM0OTQ4IDMwLjgzNTkzOCAxOC40NTMxMjUgQSAxLjAwMDEgMS4wMDAxIDAgMCAwIDI5IDE5LjAwMzkwNiBMIDI5IDMwLjUzOTA2MiBDIDI5IDM0LjcwNzUzOCAyNS42NDEyNzMgMzguMDY2NDA2IDIxLjQ3MjY1NiAzOC4wNjY0MDYgQyAxNy4zMDQxODEgMzguMDY2NDA2IDEzLjk0NTMxMiAzNC43MDc1MzggMTMuOTQ1MzEyIDMwLjUzOTA2MiBDIDEzLjk0NTMxMiAyNi41Mzg1MzkgMTcuMDY2MDgzIDIzLjM2MzE4MiAyMSAyMy4xMDc0MjIgTCAyMSAyNS4yODMyMDMgQyAxOC4yODY0MTYgMjUuNTM1NzIxIDE2LjEyMTA5NCAyNy43NjIyNDYgMTYuMTIxMDk0IDMwLjUzOTA2MiBDIDE2LjEyMTA5NCAzMy40ODMyNzQgMTguNTI4NDQ1IDM1Ljg5MjU3OCAyMS40NzI2NTYgMzUuODkyNTc4IEMgMjQuNDAxODkyIDM1Ljg5MjU3OCAyNyAzMy41ODY0OTEgMjcgMzAuNTkzNzUgQyAyNyAzMC42NDI2NyAyNy4wMDE4NTkgMjkuMzM1NTcxIDI3LjAwNTg1OSAyNy40OTQxNDEgQyAyNy4wMDk3NTkgMjUuNjUyNzEgMjcuMDE2MjI0IDIzLjIwNjkyIDI3LjAyMTQ4NCAyMC43NjM2NzIgQyAyNy4wMzA4ODQgMTYuMzc2Nzc1IDI3LjAzOTE4NiAxMi44NDkyMDYgMjcuMDQxMDE2IDEyIHoiPjwvcGF0aD4KPC9zdmc+"/></a></li>
                                @endif
                                @if(!empty($settings['x']))
                                <li><a href="{{ $settings['x'] }}">
                                    <img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDUwIDUwIj4KPHBhdGggZD0iTSAxMSA0IEMgNy4xNDU2NjYxIDQgNCA3LjE0NTY2NjEgNCAxMSBMIDQgMzkgQyA0IDQyLjg1NDMzNCA3LjE0NTY2NjEgNDYgMTEgNDYgTCAzOSA0NiBDIDQyLjg1NDMzNCA0NiA0NiA0Mi44NTQzMzQgNDYgMzkgTCA0NiAxMSBDIDQ2IDcuMTQ1NjY2MSA0Mi44NTQzMzQgNCAzOSA0IEwgMTEgNCB6IE0gMTEgNiBMIDM5IDYgQyA0MS43NzM2NjYgNiA0NCA4LjIyNjMzMzkgNDQgMTEgTCA0NCAzOSBDIDQ0IDQxLjc3MzY2NiA0MS43NzM2NjYgNDQgMzkgNDQgTCAxMSA0NCBDIDguMjI2MzMzOSA0NCA2IDQxLjc3MzY2NiA2IDM5IEwgNiAxMSBDIDYgOC4yMjYzMzM5IDguMjI2MzMzOSA2IDExIDYgeiBNIDEzLjA4NTkzOCAxMyBMIDIyLjMwODU5NCAyNi4xMDM1MTYgTCAxMyAzNyBMIDE1LjUgMzcgTCAyMy40Mzc1IDI3LjcwNzAzMSBMIDI5Ljk3NjU2MiAzNyBMIDM3LjkxNDA2MiAzNyBMIDI3Ljc4OTA2MiAyMi42MTMyODEgTCAzNiAxMyBMIDMzLjUgMTMgTCAyNi42NjAxNTYgMjEuMDA5NzY2IEwgMjEuMDIzNDM4IDEzIEwgMTMuMDg1OTM4IDEzIHogTSAxNi45MTQwNjIgMTUgTCAxOS45Nzg1MTYgMTUgTCAzNC4wODU5MzggMzUgTCAzMS4wMjE0ODQgMzUgTCAxNi45MTQwNjIgMTUgeiI+PC9wYXRoPgo8L3N2Zz4=" style="width: 31px;background-color: aliceblue;"></a></li>
                                @endif

                                @if(!empty($settings['whatsapp']))
                                    <li><a href="{{ $settings['whatsapp'] }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-sm-4">
                <div class="eman-footer-widget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d453.3686831910681!2d46.837762575038155!3d24.625426557105754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2fa704ec9f759f%3A0xfe13145792e8b5c!2z2YXYudix2LYg2LnYqNivINin2YTYudiy2YrYsiDYp9mE2LLZh9ix2KfZhtmK!5e0!3m2!1sar!2seg!4v1728231571095!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <h3 class="title">{{ $settings['contact_title_2'] }}</h3>
                    </div>
                    <form id="contact-x" method="POST">
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
                                <button class="rn-btn eman-btn submit-btn" id="submit-btn" type="submit">Submit Now <i class="icon-4"></i></button>
                            </div>
                        </div>
                    </form>
                    <div id="response-message" class="text-center mt-3"></div> <!-- مكان لعرض الرسالة -->
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

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    $(document).ready(function() {

        console.log('d')
        $('#contact-x').on('submit', function(e) {
            e.preventDefault(); 

            $.ajax({
                url: "{{ route('contact.store') }}",
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#response-message').html('<div class="alert alert-success">' + response.success + '</div>');
                    $('#contact-x')[0].reset(); // إعادة تعيين الفورم
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '<div class="alert alert-danger"><ul>';
                    for (let key in errors) {
                        errorMessage += '<li>' + errors[key][0] + '</li>';
                    }
                    errorMessage += '</ul></div>';
                    $('#response-message').html(errorMessage);
                }
            });
        });
    });
</script>
@endsection
@endsection