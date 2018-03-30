@extends('layouts.layout')


@section('content')

<div class="container row my-3">
    <div class="col-3">
        <ul class="list-group  text-center">
            <a href="{{route('edit_profile')}}"<li class="list-group-item"><i class="fas fa-user mr-2"></i>@lang('players.edit_profile')</li></a>
            <a href="{{route('home')}}"<li class="list-group-item"><i class="fas fa-envelope mr-2"></i>@lang('players.messages')</li></a>
            <a href="{{route('home')}}"<li class="list-group-item"><i class="fas fa-edit mr-2"></i>@lang('players.contracts')</li></a>
        </ul>
    </div>
    <div class="col-9">
        @yield('option_content')
    </div>
</div>

@endsection