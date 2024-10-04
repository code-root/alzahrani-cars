<body class="sticky-header">
    <div id="al-eman-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">

    <header class="eman-header header-style-2">
        @include('site.partials.home-page.top-bar')
 
        <div id="eman-sticky-placeholder"></div>
        <div class="header-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <div class="logo">
                            <a href="index-2.html">
                                <img class="logo-light" src="assets/site/images/logo/logo-dark-2.png" alt="Corporate Logo">
                                <img class="logo-dark" src="assets/site/images/logo/logo-light-2.png" alt="Corporate Logo">

                            </a>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li><a href="{{ url('/about') }}">من نحن</a></li>
                                <li><a href="{{ url('/portfolio') }}">معرض الأعمال</a></li>
                                <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>
                                <li><a href="{{ url('/privacy-policy') }}">سياسة الخصوصية</a></li>
                                <li><a href="{{ url('/terms-of-use') }}">سياسة الاستخدام</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index-2.html">
                            <img class="logo-light" src="{{ asset('storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="{ $settings['site_name'] ?? 'My Website' }}">
                            <img class="logo-dark" src="{{ asset('storage/' . ($settings['logo'] ?? 'default-logo.png')) }}g" alt="{ $settings['site_name'] ?? 'My Website' }}">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="icon-73"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li><a href="{{ url('/about') }}">من نحن</a></li>
                    <li><a href="{{ url('/portfolio') }}">معرض الأعمال</a></li>
                    <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>
                    <li><a href="{{ url('/privacy-policy') }}">سياسة الخصوصية</a></li>
                    <li><a href="{{ url('/terms-of-use') }}">سياسة الاستخدام</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
  
        <!-- End Search Popup  -->
    </header>

        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->