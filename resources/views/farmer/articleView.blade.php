@extends('layouts.app')
@section('title','Farmer Home')
@section('content')
<section class="pt-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="overflow-hidden text-center card bg-dark-overlay-5 card-bg-scale h-400"
                    style="background-image:url(/images/article/{{$article->postimage}}); background-position: center left; background-size: cover;">
                    <!-- Card Image overlay -->
                    <div class="p-3 card-img-overlay d-flex align-items-center p-sm-4">
                        <div class="my-auto w-100">
                            <!-- Card category -->
                            <a href="#" class="mb-2 badge bg-danger text-uppercase"><i
                                    class="fas fa-circle me-2 small fw-bold"></i>{{$article->category}}</a>
                            <!-- Card title -->
                            <h2 class="text-white display-5 text-capitalize">{{$article->title}}</h2>
                            <!-- Card info -->
                            <ul class="nav nav-divider text-white-force align-items-center justify-content-center">
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <div class="text-white d-flex align-items-center position-relative">
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle"
                                                    src="/assets/images/avatar/11.jpg" alt="avatar">
                                            </div>
                                            <span class="ms-3">by <a href="#"
                                                    class="stretched-link text-reset btn-link">Veo</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">{{$article->created_at}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **************** MAIN CONTENT START **************** -->
<section class="pt-0">
    <div class="container position-relative" data-sticky-container>
        <div class="row">
            <!-- Main Content START -->
            <div class="mb-5 col-lg-12">
                <p>@php
                    echo $article->details;
                    @endphp</p>
                <!-- Author info START -->
                <div class="p-2 my-3 rounded d-flex p-md-4 bg-primary-soft">
                    <!-- Avatar -->
                    <a href="#">
                        <div class="avatar avatar-xxl me-2 me-md-4">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
                        </div>
                    </a>
                    <!-- Info -->
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="m-0"><a href="#">Louis Ferguson</a></h4>
                                <small>An editor at Blogzine</small>
                            </div>
                            <a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
                        </div>
                        <p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking
                            news based in London. He has written about government, criminal justice, and the role of
                            money in politics since 2015.</p>
                        <!-- Social icons -->
                    </div>
                </div>
                <!-- Author info END -->

                <!-- Comments START -->
                <div class="mt-5">
                    <h3>{{$totalComment}} comments</h3>
                    <!-- Comment level 1-->
                    @foreach ($comments as $comment)
                    <div class="my-4 d-flex">
                        <img class="avatar avatar-md rounded-circle float-start me-3" src="/assets/images/avatar/01.jpg"
                            alt="avatar">
                        <div>
                            <div class="mb-2">
                                <h5 class="m-0">{{$comment->farmer->userName}}</h5>
                                <span class="me-3 small">{{$comment->created_at}}</span>
                                {{-- <a href="#" class="text-body fw-normal">Reply</a> --}}
                            </div>
                            <p>{{$comment->body}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Comments END -->
                <!-- Reply START -->
                <div>
                    <h3>Leave a Comment</h3>
                    @include('includes.messages')
                    <form class="mt-2 row g-3" action="/farmer/comment/{{Auth::user()->id}}" method="POST">
                        @csrf
                        <input type="hidden" name="commentable_id" value="{{$article->id}}" required>
                        <div class="col-12">
                            <label class="form-label">Your Comment *</label>
                            <textarea class="form-control" name="body" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Post comment</button>
                        </div>
                    </form>
                </div>
                <!-- Reply END -->
            </div>
            <!-- Main Content END -->
        </div>
    </div>
</section>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
