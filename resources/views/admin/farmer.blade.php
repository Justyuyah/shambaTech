@extends('admin.app')
@section('title','Farmers')
@section('content')
<div class="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>FirstName</td>
                <td>LastName</td>
                <td>UserName</td>
                <td>MobileNumber</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmer as $f)
            <tr>
                <td>{{$f->firstnName}}</td>
                <td>{{$f->lastName}}</td>
                <td>{{$f->userName}}</td>
                <td>{{$f->mobileNumber}}</td>
                <td>{{$f->email}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
