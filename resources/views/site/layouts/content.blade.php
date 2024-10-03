{{-- @extends('layouts.app') --}}

@section('title', 'Content Page')

@section('content')

@include('site.partials.home-page.sliders')


@include('site.partials.home-page.about-us')

<div class="edu-gallery-area edu-section-gap">
    <div class="container">
        <div class="isotope-wrapper">
            <div class="isotop-button button-transparent isotop-filter">
                <button data-filter="*" class="is-checked">
                    <span class="filter-text">All</span>
                </button>
                <button data-filter=".education">
                    <span class="filter-text">Education</span>
                </button>
                <button data-filter=".marketing">
                    <span class="filter-text">Marketing</span>
                </button>
                <button data-filter=".development">
                    <span class="filter-text">Development</span>
                </button>
                <button data-filter=".health">
                    <span class="filter-text">Health</span>
                </button>
            </div>
            <div class="isotope-list gallery-grid-wrap" >
                <div id="animated-thumbnials" lg-uid="lg0">


                    <a href="assets/site/images/gallery/gallery-01.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item education" lg-event-uid="1">
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-01.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-02.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item marketing" lg-event-uid="2">
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-02.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-03.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item education health" lg-event-uid="3">
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-03.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-04.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item marketing" lg-event-uid="4">
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-04.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-05.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item education" lg-event-uid="5" >
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-05.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-06.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item health" lg-event-uid="6" >
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-06.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-07.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item development" lg-event-uid="7" >
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-07.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-08.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item marketing health" lg-event-uid="8" >
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-08.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>


                    <a href="assets/site/images/gallery/gallery-09.webp" class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item development" lg-event-uid="9">
                        <div class="thumbnail">
                            <img src="assets/site/images/gallery/gallery-09.webp" alt="Gallery Image">
                        </div>
                        <div class="zoom-icon">
                            <i class="icon-69"></i>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="eman-faq-area faq-style-12 section-gap-equal">
    <div class="container">
        <div class="row g-5 row--45">
            <div class="col-lg-6">
                <div class="eman-faq-content">
                    <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                        <span class="pre-title color-secondary">FAq’s</span>
                        <h2 class="title">Over 10 Years in Distant Skill Development</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt labore dolore magna.</p>
                    </div>
                    <div class="faq-accordion" id="faq-accordion" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                        Online Quran Reading is Easy?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                        Quran Learning for Kids and Adults?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                        Online Quran Teachers?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eman-faq-gallery">
                    <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                        <img src="assets/site/images/faq/faq-10.webp" alt="Faq Images">
                    </div>
                    <div class="faq-thumbnail thumbnail-2" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                        <img src="assets/site/images/faq/faq-11.webp" alt="Faq Images">
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="1.5" src="assets/site/images/faq/shape-18.png" alt="Shape Images">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="-1.5" src="assets/site/images/faq/shape-17.png" alt="Shape Images">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=       	Team Area Start      	=-->
<!--=====================================-->
<!-- Start Team Area  -->
<div class="eman-team-area team-area-8 gap-tb-text">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title color-secondary">Instructors</span>
            <h2 class="title">Course Instructors</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <!-- Start Instructor Grid  -->
            <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="eman-team-grid team-style-1 team-style-8">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="assets/site/images/team/team-22.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Aashiq-Muhammad</a></h5>
                            <span class="designation">Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
            <!-- Start Instructor Grid  -->
            <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="eman-team-grid team-style-1 team-style-8">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="assets/site/images/team/team-23.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Ma-As-Sama</a></h5>
                            <span class="designation">Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
            <!-- Start Instructor Grid  -->
            <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="eman-team-grid team-style-1 team-style-8">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="assets/site/images/team/team-24.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Badi-Al-Zaman</a></h5>
                            <span class="designation">Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
        </div>
    </div>
</div>

@endsection