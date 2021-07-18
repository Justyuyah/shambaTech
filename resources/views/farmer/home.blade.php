@extends('layouts.app')
@section('title','Farmer Home')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
Main hero START -->
    <section class="pt-3 pb-3 mb-2 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overflow-hidden tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3">
                        <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="1"
                            data-arrow="true" data-dots="false" data-items="1">
                            <!-- Slide 1 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0"
                                style="background-image:url(/assets/images/blog/16by9/05.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="p-3 card-img-overlay d-flex align-items-center p-sm-5">
                                    <div class="my-auto w-100">
                                        <div class="mx-auto text-center col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="mb-2 badge bg-primary"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-2.html"
                                                    class="btn-link text-reset fw-normal">Never underestimate the
                                                    influence of social media</a></h2>
                                            <p class="text-white">For who thoroughly her boy estimating conviction.
                                                Removed demands expense account in outward tedious do.</p>
                                            <!-- Card info -->
                                            <ul
                                                class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div
                                                            class="text-white d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="/assets/images/avatar/14.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#"
                                                                    class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 26, 2021</li>
                                                <li class="nav-item"><a href="#" class="btn-link"><i
                                                            class="far fa-comment-alt me-1"></i> 5 Comments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0"
                                style="background-image:url(/assets/images/blog/16by9/02.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="p-3 card-img-overlay d-flex align-items-center p-sm-5">
                                    <div class="my-auto w-100">
                                        <div class="mx-auto text-center col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="mb-2 badge bg-danger"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-2.html"
                                                    class="btn-link text-reset fw-normal">This is why this year will
                                                    be the year of startups</a></h2>
                                            <p class="text-white">Particular way thoroughly unaffected projection
                                                favorable Mrs can be projecting own. </p>
                                            <!-- Card info -->
                                            <ul
                                                class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div
                                                            class="text-white d-flex align-items-center position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="assets/images/avatar/10.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#"
                                                                    class="stretched-link text-reset btn-link">Louis</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Nov 15, 2021</li>
                                                <li class="nav-item"><a href="#" class="btn-link"><i
                                                            class="far fa-comment-alt me-1"></i> 3 Comments</a></li>
                                            </ul>
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
    <!-- =======================
Main hero END -->

    <!-- =======================
Cards START -->
    <section class="p-0">
        <div class="container">
            <div class="row g-4">
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4">
                    <div class="overflow-hidden card card-overlay-bottom card-img-scale">
                        <!-- Card featured -->
                        <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                        <!-- Card Image -->
                        <img src="/assets/images/blog/3by4/01.jpg" alt="">
                        <!-- Card Image overlay -->
                        <div class="p-3 card-img-overlay d-flex flex-column p-md-4">
                            <div>
                                <!-- Card category -->
                                <a href="#" class="badge bg-warning"><i
                                        class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                            </div>
                            <div class="mt-auto w-100">

                                <!-- Card title -->
                                <h4 class="text-white"><a href="post-single-5.html"
                                        class="btn-link text-reset stretched-link">Best Pinterest boards for
                                        learning about business</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider text-white-force align-items-center small">
                                    <li class="nav-item position-relative">
                                        <div class="nav-link">by <a href="#"
                                                class="stretched-link text-reset btn-link">Bryan</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">Aug 18, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-overlay-bottom card-image-scale">
                        <!-- Card Image -->
                        <img src="/assets/images/blog/3by4/02.jpg" alt="">
                        <!-- Card Image overlay -->
                        <div class="p-3 card-img-overlay d-flex flex-column p-md-4">
                            <div>
                                <!-- Card category -->
                                <a href="#" class="mb-2 badge bg-success"><i
                                        class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                            </div>
                            <div class="mt-auto w-100">
                                <!-- Card title -->
                                <h4 class="text-white"><a href="post-single-5.html"
                                        class="btn-link text-reset stretched-link">5 intermediate guide to
                                        business</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider text-white-force align-items-center small">
                                    <li class="nav-item position-relative">
                                        <div class="nav-link">by <a href="#"
                                                class="stretched-link text-reset btn-link">Joan</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 03, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-12 col-lg-4">
                    <div class="card card-overlay-bottom bg-parallax h-400 h-lg-100"
                        data-jarallax-video="https://youtu.be/WS-MfCjzztg" data-speed="1.2">
                        <!-- Card Image overlay -->
                        <div class="p-3 card-img-overlay d-flex flex-column p-md-4">
                            <div>
                                <!-- Card category -->
                                <a href="#" class="mb-2 badge bg-dark fs-6"><i
                                        class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                            </div>
                            <div class="mt-auto w-100">
                                <!-- Card title -->
                                <h4 class="text-white"><a href="post-single-5.html"
                                        class="btn-link text-reset stretched-link">5 investment doubts you should
                                        clarify</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider text-white-force align-items-center small">
                                    <li class="nav-item position-relative">
                                        <div class="nav-link">by <a href="#"
                                                class="stretched-link text-reset btn-link">Dennis</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jan 28, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
Cards END -->

    <!-- =======================
Adv START -->
    <section class="py-3 my-2">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Adv END -->

    <!-- =======================
Trending topics START -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Slider -->
                    <div class="tiny-slider arrow-hover arrow-dark arrow-round">
                        <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="24"
                            data-arrow="true" data-dots="false" data-items-xl="5" data-items-lg="4" data-items-md="3"
                            data-items-sm="2" data-items-xs="2">
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="/assets/images/blog/1by1/thumb/01.jpg" alt="card image">
                                    <div class="px-3 card-img-overlay d-flex px-sm-5">
                                        <h5 class="mx-auto mt-auto">
                                            <a href="#" class="text-white stretched-link btn-link fw-bold">Travel</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="/assets/images/blog/1by1/thumb/02.jpg" alt="card image">
                                    <div class="px-3 card-img-overlay d-flex px-sm-5">
                                        <h5 class="mx-auto mt-auto">
                                            <a href="#" class="text-white stretched-link btn-link fw-bold">Business</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="/assets/images/blog/1by1/thumb/03.jpg" alt="card image">
                                    <div class="px-3 card-img-overlay d-flex px-sm-5">
                                        <h5 class="mx-auto mt-auto">
                                            <a href="#" class="text-white stretched-link btn-link fw-bold">Marketing</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="/assets/images/blog/1by1/thumb/04.jpg" alt="card image">
                                    <div class="px-3 card-img-overlay d-flex px-sm-5">
                                        <h5 class="mx-auto mt-auto">
                                            <a href="#"
                                                class="text-white stretched-link btn-link fw-bold">Photography</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="/assets/images/blog/1by1/thumb/05.jpg" alt="card image">
                                    <div class="px-3 card-img-overlay d-flex px-sm-5">
                                        <h5 class="mx-auto mt-auto">
                                            <a href="#" class="text-white stretched-link btn-link fw-bold">Sports</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Trending topics END -->

    <!-- =======================
Newsletter START -->
    <section class="pt-3 pb-0 mt-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="p-3 overflow-hidden bg-dark p-sm-4 rounded-3 position-relative">
                        <div class="row">
                            <div class="py-5 mx-auto text-center col-md-8 col-lg-6 position-relative">
                                <!-- Title -->
                                <h2 class="text-white display-6">Never miss a story!</h2>
                                <p class="text-white">Get the freshest headlines and updates sent uninterrupted to
                                    your inbox.</p>
                                <!-- Form -->
                                <form class="mt-3 row row-cols-sm-auto g-2 align-items-center justify-content-center">
                                    <div class="col-12">
                                        <input type="email" class="form-control" placeholder="Enter your email address">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="m-0 btn btn-primary">Subscribe</button>
                                    </div>
                                    <div class="mt-2 text-white form-text opacity-6">By subscribing you agree to our
                                        <a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Newsletter END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection