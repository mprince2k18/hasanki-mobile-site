@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="card card-style">
    <img src="{{ $course->thumbnail }}" class="img-fluid">
    <div class="content">
    <h1>{{ $course->name }}</h1>
    <p class="opacity-60 text-uppercase font-10 mt-n2 font-600 mb-1">${{$course->price}}</p>

    <p>{!! $course->big_desc !!}</p>
    
    <div class="d-flex">
    <div class="mr-auto">
    </div>
    <div>
        <a href="{{ route('enroll') }}" class="btn btn-full btn-s font-600 rounded-s gradient-highlight mt-1 float-left ">Enroll Now</a>
    </div>
    </div>
    </div>
    </div>
    <div class="divider divider-margins"></div>


</div>
@endsection
