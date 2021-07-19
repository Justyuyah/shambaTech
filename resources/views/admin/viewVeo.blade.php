@extends('admin.app')
@section('title','Veos')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{$veo->firstName}} {{$veo->lastName}}</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td>Username :</td>
                <td>{{$veo->userName}}</td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>{{$veo->gender}}</td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>{{$veo->email}}</td>
            </tr>
            <tr>
                <td>Mobile Number :</td>
                <td>{{$veo->mobileNumber}}</td>
            </tr>
            <tr>
                <td>Region :</td>
                <td>{{$veo->region}}</td>
            </tr>
            <tr>
                <td>District :</td>
                <td>{{$veo->district}}</td>
            </tr>
            <tr>
                <td>Status :</td>
                @if ($veo->is_veo === 0)
                <td class="text-danger">
                    <i class="fas fa-exclamation-triangle text-danger"></i> Inactive</td>
                @else
                <td class="text-success">
                    <i class="fas fa-check-circle text-success"></i> Active</td>
                @endif
            </tr>
        </table>
        @if ($veo->is_veo === 0)
        <form action="/admin/veo/activate/{{$veo->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Activate</button>
        </form>
        @else
        <form action="/admin/veo/deactivate/{{$veo->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Deactivate</button>
        </form>
        @endif

    </div>
</div>
@endsection
