<div class="eman-about-area about-style-3">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="about-content">
                    <div class="section-title section-left">
                        <span class="pre-title">About Us</span>
                        <h2 class="title">{{ $settings['about_intro'] ?? 'We Provide Best Education Services For You' }}</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-edu" type="button" role="tab" aria-selected="true">About {{ $settings['site_name'] ?? '' }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-mission" type="button" role="tab" aria-selected="false">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about-vision" type="button" role="tab" aria-selected="false">Our Vision</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="about-edu" role="tabpanel">
                            <p>{{ $settings['about_intro'] ?? 'Default introduction text.' }}</p>
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel">
                            <p>{{ $settings['about_mission'] ?? 'Default mission text.' }}</p>
                        </div>
                        <div class="tab-pane fade" id="about-vision" role="tabpanel">
                            <p>{{ $settings['about_vision'] ?? 'Default vision text.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-gallery">
                    <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="/a-1.jpeg" alt="About Image">
                    <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="/a-2.jpeg" alt="About Image">
                    <ul class="shape-group">
                        <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="2" src="assets/site/images/about/shape-13.png" alt="Shape">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="-2" src="assets/site/images/about/shape-39.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="2" src="assets/site/images/about/shape-07.png" alt="Shape">
                        </li>
                        <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-5">
            <img class="rotateit" src="assets/site/images/about/shape-13.png" alt="Shape">
        </li>
        <li class="shape-6">
            <span></span>
        </li>
    </ul>
</div>