@extends('layouts.layout')


@section('content')

<div class="container row my-3 mx-auto">
    <div class="col-3">
        <ul class="list-group  text-center">
            <a href="{{route('panel')}}"<li class="list-group-item"><i class="fas fa-user mr-2"></i>@lang('panel.teams')</li></a>
            <a href="{{route('competitions')}}"<li class="list-group-item"><i class="fas fa-trophy mr-2"></i>@lang('panel.competitions')</li></a>
        </ul>
    </div>
    <div class="col-9" style="background-color:black">
        @yield('option_content')
    </div>
</div>

@endsection