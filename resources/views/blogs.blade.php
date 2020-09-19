@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="tab-controls mr-3 ml-3 tabs-round tab-animated tabs-medium tabs-rounded clearfix shadow-xl mb-4" data-tab-items="2" data-tab-active="bg-highlight activated color-white">
<a href="{{ route('courses') }}" class="font-12 w-100" data-tab-active data-tab="tab-1">All Blogs</a>

</div>
<div class="tab-content" id="tab-1">

@foreach ($blogs as $blog) 
    <div class="card card-style">
    <img src="{{ $blog['thumbnail'] }}" class="img-fluid">
    <div class="content">
    <h1>{{ $blog['title'] }}</h1>
    <p class="opacity-60 text-uppercase font-10 mt-n2 font-600 mb-1">{{ $blog['user']['name'] }}</p>
    <div class="d-flex">
    <div class="mr-auto">
    </div>
    <div>
        <a href="{{ route('blog.single', $blog['id']) }}" class="btn btn-full btn-s font-600 rounded-s gradient-highlight mt-1 float-left ">Read More</a>
    </div>
    </div>
    </div>
    </div>
    <div class="divider divider-margins"></div>

@endforeach

</div>

</div>
@endsection
