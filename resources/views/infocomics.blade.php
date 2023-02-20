@extends('layouts.app')

@section('content')
<div class="col-2">
    <img src="{{$single_comic['thumb']}}" alt="{{$single_comic['title']}}">
    <div class="title">
        {{$single_comic['series']}}
    </div>
</div>
@endsection
