@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="card card-style">
    <div class="content">

    <p>{!! $our_mission->desc  !!}</p>
   
    </div>
    </div>

<div data-menu-load="menu-footer.html"></div>
</div>
@endsection
