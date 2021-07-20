@extends('admin.app')
@section('head','Veo')
@section('title','Articles')
@section('content')
<div class="card">
    <div class="card-header">
        Article
    </div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Post Article
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/post/article" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="">Article Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Article Title" id=""
                                    required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Article Category</label>
                                <select name="category" id="" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($category as $cat)
                                    <option value="{{$cat->name}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Article Details</label>
                                <textarea name="details" id="editor" placeholder="Article Details" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Article Image</label>
                                <input type="file" name="postimage" class="form-control" id="" required>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Post Article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 card-body">
            <h4 class="mb-2">Articles</h4>
            @if ($articles == NULL)
            <li class="list-group-item">{{'None'}}</li>
            @endif

            <div class="row">
                @foreach ($articles as $article)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <img src="/images/article/{{$article->postimage}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">{{$article->title}}</h5>
                            <p class="card-text">@php
                                echo $article->details
                                @endphp</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
