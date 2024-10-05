<body class="sticky-header">
    <div id="al-eman-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
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
                            <a href="{{ url('/') }}">
                                
                                <img class="logo-light" src="{{ asset('/back-end/storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="{{ $settings['site_name'] ?? 'My Website' }}"style="width: 13rem;">
                                <img class="logo-dark" src="{{ asset('/back-end/storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="{{ $settings['site_name'] ?? 'My Website' }}"style="width: 13rem;">
                            </a>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li><a href="{{ url('/contact') }}">تواصل معنا</a></li>
                                @foreach($pages as $page)
                                    <li><a href="{{ route('page.show', $page->id) }}">{{ $page->{"name_" . app()->getLocale()} }}</a></li>
                                @endforeach
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
                        <a href="{{ url('/') }}">
                            <img class="logo-light" src="{{ asset('/back-end/storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="{{ $settings['site_name'] ?? 'My Website' }}">
                            <img class="logo-dark" src="{{ asset('/back-end/storage/' . ($settings['logo'] ?? 'default-logo.png')) }}" alt="{{ $settings['site_name'] ?? 'My Website' }}">
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
                    @foreach($pages as $page)
                        <li><a href="{{ route('page.show', $page->id) }}">{{ $page->{"name" . app()->getLocale()} }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
  
        <!-- End Search Popup  -->
    </header>

        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->