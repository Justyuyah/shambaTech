@extends('admin.app')
@section('title','Veos')
@section('content')
<ul class="list-group">
    @foreach ($veo as $v)
    <li class="list-group-item"><a href="/admin/veo/view/{{$v->id}}">{{$v->firstName}} {{$v->lastName}}
        </a>
        <span class="p-3">
            @if ($v->is_veo === 0)
            <i class="fas fa-exclamation-triangle text-danger"></i> Inactive
            @endif
            @if ($v->is_veo === 1)
            <i class="fas fa-check-circle text-success"></i> Active
            @endif
        </span>
    </li>
    @endforeach
</ul>
@endsection
