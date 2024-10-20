<div class="hero-banner hero-style-10 bg-image photography-banner">
    <div class="swiper photography-activator">
        <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <img width="360px" height="360px" data-transform-origin='center center' data-src="/back-end/storage/{{ $slider->image }}" class="swiper-lazy" alt="image">
                    <div class="thumbnail-bg-content">
                        <div class="container cd-root-animated-shape">
                            <div class="row">
                                <div class="col-7">
                                    <div class="banner-content">
                                        <span class="subtitle" data-sal="slide-up"
                                            data-sal-duration="1000">{{ $slider->name_ar  }}</span>
                                        <h1 class="title" data-sal-delay="100" data-sal="slide-up"
                                            data-sal-duration="1000">
                                            {{ $slider->name_ar  }}</h1>
                                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                            {{ $slider->details }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="swiper-slide-controls slide-prev">
            <i class="icon-west"></i>
        </div>
        <div class="swiper-slide-controls slide-next">
            <i class="icon-east"></i>
        </div>

        <div class="pagination-box-wrapper">
            <div class="pagination-box-wrap">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<div class="features-area-3">
    <div class="container">
        <div class="features-grid-wrap">
            <div class="features-box features-style-3 color-primary-style cd-root-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/site/images/animated-svg-icons/scholarship-facility.svg" alt="animated icon">
                    <!-- <i class="icon-34"></i> -->
                </div>
                <div class="content">
                    <h4 class="title">الخبرات</h4>
                    <p>
                        
                    نعمل في مجال مزادات السيارات لعدة أعوام مما اكسبنا الكثير من الخبرات والتي انعكست على مستوى رضا عملائنا                 </p>
                </div>
            </div>
            <div class="features-box features-style-3 color-secondary-style cd-root-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/site/images/animated-svg-icons/skilled-lecturers.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h4 class="title">الجودة</h4>
                    <p>
                    نهتم بأدق التفاصيل بالاستعانة بفريق متخصص في مجال فحص المركبات للتأكد من جودتها وسلامتها بمعايير عالية
                    </p>
                </div>
            </div>
            <div class="features-box features-style-3 color-extra02-style cd-root-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="assets/site/images/animated-svg-icons/book-library.svg" alt="animated icon">
                    <!-- <i class="icon-36"></i> -->
                </div>
                <div class="content">
                    <h4 class="title">الإنجازات</h4>
                    <p>
                    بفضل الله تم الاعتماد علينا من قبل الكثير من البنوك وكبرى الشركات والمؤسسات في تسويق وبيع المركبات التابعه لهم وكنا ولازلنا نطمح في الاستمرار بالعمل للوصول إلى القمة دائما
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>