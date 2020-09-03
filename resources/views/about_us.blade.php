@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="card card-style">
    <div class="content">

    <p>{!! $about->desc  !!}</p>
   
    </div>
    </div>

<div data-menu-load="menu-footer.html"></div>
</div>
@endsection
