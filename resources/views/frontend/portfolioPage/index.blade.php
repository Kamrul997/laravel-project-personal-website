@extends('frontend.layouts.master')

@section('contents')
<!-- Portfolio Start -->
<section id="portfolio" class="section portfolio">
    <div class="display-table">
        <div class="display-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center title">
                            <h2 class="text-dark">My <span class="base-color">Works</span></h2>
                            <p class="text-muted mb-5 max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--   Portfolio Filters   -->
                    <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-center portfolio-filter">
                        <li class="button-border list-inline-item">
                            <a href="#" data-filter="*" class="pill-button active">All</a>
                        </li>
                        <li class="button-border list-inline-item">
                            <a href="#" data-filter=".webdesign" class="pill-button">Web Design</a>
                        </li>
                        <li class="button-border list-inline-item">
                            <a href="#" data-filter=".mobiledesign" class="pill-button">Mobile Design</a>
                        </li>
                        <li class="button-border list-inline-item">
                            <a href="#" data-filter=".seo" class="pill-button">Seo</a>
                        </li>
                        <li class="button-border list-inline-item">
                            <a href="#" data-filter=".graphic" class="pill-button">Graphic</a>
                        </li>
                    </ul>
                </div>
                <div class="portfolio-items row">
                    <!-- Item 01 -->
                    <div class="col-lg-4 portfolio-item seo">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-01.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-01.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 02 -->
                    <div class="col-lg-4 portfolio-item graphic webdesign">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-02.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-02.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 03 -->
                    <div class="col-lg-4 portfolio-item webdesign graphic">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-03.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-03.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 04 -->
                    <div class="col-lg-4 portfolio-item mobiledesign webdesign">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-04.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-04.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 05 -->
                    <div class="col-lg-4 portfolio-item mobiledesign seo">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-05.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-05.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 06 -->
                    <div class="col-lg-4 portfolio-item mobiledesign">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-06.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-06.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 07 -->
                    <div class="col-lg-4 portfolio-item mobiledesign webdesign">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-07.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-07.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 08 -->
                    <div class="col-lg-4 portfolio-item webdesign graphic">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-08.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-08.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 09 -->
                    <div class="col-lg-4 portfolio-item seo">
                        <div class="image-border">
                            <div class="portfolio-item-content">
                                <img src="assets/img/portfolio-09.jpg" alt="/" class="img-fluid">
                                <div class="img-overlay text-center">
                                    <div class="img-overlay-content">
                                        <div class="portfolio-icon">
                                            <button type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></button>
                                            <a href="assets/img/portfolio-09.jpg" class="js-zoom-gallery">
                                                <i class="lni-search"></i>
                                            </a>
                                        </div>
                                        <h5 class="mt-3 mb-0">My Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Portfolio End  -->
@endsection
