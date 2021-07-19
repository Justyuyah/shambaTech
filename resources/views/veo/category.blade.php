@extends('admin.app')
@section('head','Veo')
@section('title','Category')
@section('content')
<div class="card">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Category
        </button>
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
                        <form action="/veo/add/category/" method="post">
                            @csrf
                            <label for="">Category Name</label>
                            <input type="text" name="categoryName" class="form-control" value="{{old('categoryName')}}"
                                id="" placeholder="Eg. Maize" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-group mt-4">
            @if ($category == NULL)
            <li class="list-group-item text-warning"> None
            </li>
            @endif
            @foreach ($category as $cat)
            <li class="list-group-item"><a href="/veo/view/{{$cat->id}}"> {{$cat->name}} </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
