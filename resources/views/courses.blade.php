@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="tab-controls mr-3 ml-3 tabs-round tab-animated tabs-medium tabs-rounded clearfix shadow-xl mb-4" data-tab-items="2" data-tab-active="bg-highlight activated color-white">
<a href="{{ route('courses') }}" class="font-12 w-100" data-tab-active data-tab="tab-1">All Courses</a>

</div>
<div class="tab-content" id="tab-1">

@foreach ($courses['data'] as $course) 
    <div class="card card-style">
    <img src="{{ $course['thumbnail'] }}" class="img-fluid">
    <div class="content">
    <h1>{{ $course['name'] }}</h1>
    <p class="opacity-60 text-uppercase font-10 mt-n2 font-600 mb-1">${{$course['price']}}</p>
    
    <div class="d-flex">
    <div class="mr-auto">
    </div>
    <div>
        <a href="{{ route('course.single', $course['slug']) }}" class="btn btn-full btn-s font-600 rounded-s gradient-highlight mt-1 float-left ">Know More</a>
    </div>
    </div>
    </div>
    </div>
    <div class="divider divider-margins"></div>

@endforeach

</div>

<div data-menu-load="menu-footer.html"></div>
</div>
@endsection
