<footer class="eman-footer footer-dark bg-image footer-style-3">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="eman-footer-widget">
                        <div class="logo">
                            <a href="index-2.html">
                                <img class="logo-light" src="{{ asset('storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="Corporate Logo">
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
                                <input type="email" class="form-control" placeholder="Your email">
                                <button class="eman-btn btn-secondary btn-medium" type="button">Subscribe <i class="icon-4"></i></button>
                            </div>
                            <ul class="social-share icon-transparent">
                                <li><a href="#" class="color-fb"><i class="icon-facebook"></i></a></li>
                                <li><a href="#" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#" class="color-ig"><i class="icon-instagram"></i></a></li>
                                <li><a href="#" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                <li><a href="#" class="color-yt"><i class="icon-youtube"></i></a></li>
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
                        <p>Copyright 2024 <a href="" target="_blank">Mostafa Elbagory </a> Designed By <a href="https://wa.me/201001995914" target="_blank">CodeRoot</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>