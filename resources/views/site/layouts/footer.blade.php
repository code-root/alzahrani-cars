<footer class="eman-footer footer-dark bg-image footer-style-3">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="eman-footer-widget">
                        <div class="logo">
                            <a href="index-2.html">
                                <img class="logo-light" src="{{ asset('/back-end/storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="Corporate Logo">
                            </a>
                        </div>
                        <p class="description">{{ $settings['footer_description'] ?? 'Default footer description' }}</p>
                        <div class="widget-information">
                            <ul class="information-list">
                                <li><span>Call:</span><a href="tel:{{ $settings['phone'] ?? '+01 123 5641 231' }}">{{ $settings['phone'] ?? '+01 123 5641 231' }}</a></li>
                                <li><span>Email:</span><a href="mailto:{{ $settings['email'] ?? 'info@al-eman-.com' }}" target="_blank">{{ $settings['email'] ?? 'info@al-eman-.com' }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="eman-footer-widget">
                        <h4 class="widget-title">Contacts</h4>
                        <div class="inner">
                            <p class="description">Enter your email address to register to our newsletter subscription</p>
                            <div class="input-group footer-subscription-form">
                                <input type="email" class="form-control" id="subscriber-email" placeholder="Your email" required>
                                <button class="eman-btn btn-secondary btn-medium" id="subscribe-button" type="button">Subscribe <i class="icon-4"></i></button>
                            </div>
                            <ul class="social-share icon-transparent">
                                @if(!empty($settings['facebook']))
                                    <li><a href="{{ $settings['facebook'] }}" class="color-fb"><i class="icon-facebook"></i></a></li>
                                @endif
                                @if(!empty($settings['twitter']))
                                    <li><a href="{{ $settings['twitter'] }}" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                @endif
                                @if(!empty($settings['instagram']))
                                    <li><a href="{{ $settings['instagram'] }}" class="color-ig"><i class="icon-instagram"></i></a></li>
                                @endif
                                @if(!empty($settings['linkedin']))
                                    <li><a href="{{ $settings['linkedin'] }}" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                @endif
                                @if(!empty($settings['youtube']))
                                    <li><a href="{{ $settings['youtube'] }}" class="color-yt"><i class="icon-youtube"></i></a></li>
                                @endif
                                @if(!empty($settings['snapchat']))
                                    <li><a href="{{ $settings['snapchat'] }}" class="color-snapchat"><i class="icon-snapchat"></i></a></li>
                                @endif
                                @if(!empty($settings['tiktok']))
                                    <li><a href="{{ $settings['tiktok'] }}" class="color-tiktok"><i class="icon-tiktok"></i></a></li>
                                @endif
                                @if(!empty($settings['x']))
                                    <li><a href="{{ $settings['x'] }}" class="color-x"><i class="icon-x"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>Copyright 2024  Developr By <a href="https://wa.me/966535149897" target="_blank">CodeRoot</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#subscribe-button').click(function() {
            var email = $('#subscriber-email').val();
            $.ajax({
                url: '/subscribe',
                method: 'POST',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}' // تأكد من إضافة CSRF token
                },
                success: function(response) {
                    alert(response.message);
                    $('#subscriber-email').val(''); // مسح حقل البريد الإلكتروني بعد الاشتراك
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    alert(errors.email[0]); // عرض رسالة الخطأ
                }
            });
        });
    });
</script>