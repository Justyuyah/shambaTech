@extends('layouts.app')
@section('title','Farmer Home')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>
    <section class="pt-3 pb-3 mb-2 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overflow-hidden tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3">
                        <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="1"
                            data-arrow="true" data-dots="false" data-items="1">
                            <!-- Slide 1 -->
                            @foreach ($article as $a)
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0"
                                style="background-image:url(/images/article/{{$a->postimage}}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="p-3 card-img-overlay d-flex align-items-center p-sm-5">
                                    <div class="my-auto w-100">
                                        <div class="mx-auto text-center col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="mb-2 badge bg-primary"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>{{$a->category}}</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="/farmer/article/view/{{$a->id}}"
                                                    class=" btn-link text-reset fw-normal">{{$a->title}}</a></h2>
                                            <p class="text-white">hello.</p>
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
                                                            class="far fa-comment-alt me-1"></i> 5
                                                        Comments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0">
        <div class="container">
            <div class="row g-4">
                <!-- Card item START -->
                @foreach ($article as $at)
                <div class="col-sm-6 col-lg-4">
                    <div class="overflow-hidden card card-overlay-bottom card-img-scale">
                        <!-- Card featured -->
                        <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                        <!-- Card Image -->
                        <img src="/images/article/{{$at->postimage}}" alt="">
                        <!-- Card Image overlay -->
                        <div class="p-3 card-img-overlay d-flex flex-column p-md-4">
                            <div>
                                <!-- Card category -->
                                <a href="#" class="badge bg-warning"><i
                                        class="fas fa-circle me-2 small fw-bold"></i></a>
                            </div>
                            <div class="mt-auto w-100">
                                <!-- Card title -->
                                <h4 class="text-white"><a href="/farmer/article/view/{{$a->id}}"
                                        class="btn-link text-reset stretched-link">{{$at->title}}</a></h4>
                                <!-- Card info -->
                                <ul class="nav nav-divider text-white-force align-items-center small">
                                    <li class="nav-item position-relative">
                                        <div class="nav-link">by <a href="/farmer/article/view/{{$a->id}}"
                                                class="stretched-link text-reset btn-link">
                                                hh</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">{{$at->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Card item END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <section class="py-3 my-2">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
    </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
