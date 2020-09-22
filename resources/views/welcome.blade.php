@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="single-slider owl-carousel owl-no-dots">

        {{-- TODO COURSE LOOP--}}
            @foreach ($courses['data'] as $course)
            <div>

            
            <a href="{{ route('course.single', $course['slug']) }}">
            <div class="card card-style bg-19" data-card-height="300" style="background-image:url('{{ $course['thumbnail'] }}')"></div>

                <div class="mb-3 ml-3 mr-3">
                        <p class="color-black font-14">
                            Our courses
                        </p>
                        <h1 class="color-black font-800 mb-n2">{{ $course['name'] }}</h1>
                        <p class="color-black font-14 mb-2">
                            ৳{{$course['price']}}
                        </p>
                    </div>
            </a>
            </div>
            @endforeach
        {{-- TODO --}}


    </div>
    <div class="mt-3">
        <h1 class="font-17"><a href="javascript:void()" class="px-3 color-theme">Our blogs</a></h1>
    </div>
    <div class="single-slider owl-carousel owl-no-dots mb-4 p-2">

        {{-- TODO:: BLOG LOOP --}}
        @foreach ($blogs as $blog)
        <div>
            <a href="{{ route('blog.single', $blog['id']) }}">
                <div class="card m-0 card-style bg-20" style="background-image:url('{{ $blog['thumbnail'] }}')" data-card-height="250"></div>
                <h4 class="ml-3">{{ $blog['title'] }}</h4>
                <span class="ml-3">{{ $blog['user']['name'] }}</span>
            </a>
        </div>
        @endforeach
        {{-- TODO:: BLOG LOOP --}}
      
    </div>
    <div class="divider divider-margins"></div>

{{-- ABOUT --}}

    <div class="row mb-0">
    <div class="col-6 pr-0">
    <div class="card card-style">
    <img src="{{ asset('frontend/images/pictures/21.jpg') }}" class="img-fluid">
    <div class="card-center text-center">
            <a href="{{ route('about') }}" class="btn btn-border btn-m font-700 mt-4 bg-white color-black">About Us</a>
        </div>
    </div>
    </div>
    <div class="col-6 pl-0">
    <div class="card card-style">
    <img src="{{ asset('frontend/images/pictures/22.jpg') }}" class="img-fluid">
        <div class="card-center text-center">
            <a href="{{ route('our_mission') }}" class="btn btn-border btn-m font-700 mt-4 bg-white color-black">Our Mission</a>
        </div>
    </div>
    </div>
    </div>

    {{-- TODO:: TEAM --}}
    <div class="single-slider owl-carousel owl-no-dots">

        {{-- TODO TEAM LOOP--}}

        @foreach ($teams as $team)
        <div class="card card-style bg-19 team-card" data-card-height="300" style="background-image:url('{{ $team['photo'] }}')">
            <a href="#">
                <div class="card-bottom mb-3 ml-3 mr-3">
                    <h1 class="color-white font-800 mb-n2">{{ $team['name'] }}</h1>
                    <p class="color-white font-14 mb-2">
                        {{ $team['position'] }}
                    </p>
                </div>
            </a>
        </div>
        @endforeach

        {{-- TODO --}}
    </div>

    {{-- CONTACT --}}

    {{-- <div class="card mb-n5" data-card-height="350">
        <div class="map-full">
        <iframe src="{{ getSystemSetting('type_map') }}"></iframe>
        </div>
        </div> --}}

        {{-- <div class="card card-clear" data-card-height="350"></div> --}}

<div class="drag-line"></div>

<div class="divider mt-4"></div>

<h3 class="font-700">{{ getSystemSetting('type_name') }} Office</h3>
<p class="pb-0 mb-0">{{ getSystemSetting('type_address') }}</p>
<div class="list-group list-custom-small">
<a href="tel:+1 234 567 890">
<i class="fa font-14 fa-phone color-phone"></i>
<span>{{ getSystemSetting('type_number') }}</span>
<span class="badge bg-highlight">TAP TO CALL</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="mailto:mail@domain.com">
<i class="fa font-14 fa-envelope color-mail"></i>
<span>{{ getSystemSetting('type_mail') }}</span>
<span class="badge bg-highlight">TAP TO MAIL</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="{{ getSystemSetting('type_fb') }}">
<i class="fab font-14 fa-facebook color-facebook"></i>
<span>{{ getSystemSetting('type_fb') }}</span>
<i class="fa fa-link"></i>
</a>
<a href="{{ getSystemSetting('type_youtube') }}">
<i class="fab font-14 fa-youtube-square color-twitter"></i>
<span>{{ getSystemSetting('type_youtube') }}</span>
<i class="fa fa-link"></i>
</a>
<a href="{{ getSystemSetting('type_linked') }}" class="border-0">
<i class="fab font-14 fa-linkedin color-linkedin"></i>
<span>{{ getSystemSetting('type_linked') }}</span>
<i class="fa fa-link"></i>
</a>
</div>
</div>
@endsection
