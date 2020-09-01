@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="card card-style">
    <img src="hfhf" class="img-fluid">
    <div class="content">
    <h1>{{ $single_blog->title ?? '' }}</h1>
    <p class="opacity-60 text-uppercase font-10 mt-n2 font-600 mb-1">
        {{ $single_blog->user->name ?? '' }}
    </p>

    <p>{!! $single_blog->description ?? '' !!}</p>
   
    </div>
    </div>

<div data-menu-load="menu-footer.html"></div>
</div>
@endsection
