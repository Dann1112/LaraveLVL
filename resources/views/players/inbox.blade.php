@extends('dashboards.player')

@section('option_content')

    <hr class="border" style="color:white">
    <h3 class="text-center" style="width:100%">@lang('inbox.title')</h3>
    <hr class="border" style="color:white">
    
    <table class="table table-dark table-striped table-hover table-responsive-md rounded">
        <thead class="thead-dark">
          <tr class="text-center" >
            <th scope="col">@lang('inbox.date')</th><!-- FOTO -->
            <th scope="col" >@lang('inbox.from')</th><!-- NACIONALIDAD -->
            <th scope="col">@lang('inbox.message')</th>
            <th scope="col">@lang('inbox.actions')</th>
          </tr>
        </thead>
        <tbody style="color:white">
            
          @foreach($messages->all() as $message)
          @foreach($teams->all() as $team)

          @if($team->manager == $message->from)

          <form action={{route('joined_team')}} method="POST">
            {{csrf_field()}}
          <tr class="text-center">
            <input type="hidden" name="team" value={{$team->name}}>
            <input type="hidden" name="username" value={{$message->to}}>
            <td>{{$message->created_at}}</td>
            <td><img src="/storage/{{$team->logo}}" style="max-height: 30px; max-width: 30px">&nbsp;{{$team->abbreviation}}</td>
            <td><span class="font-weight-bold font-italic">{{$message->from}}</span> @lang('inbox.club_request')</td>
            <td><button class="btn btn-success">@lang('inbox.accept_request')</button><button class="btn btn-danger">@lang('inbox.decline_request')</button></td>
          </tr>
          </form>

            @else
            @continue
            @endif
        
            @endforeach
            @endforeach
          
        </tbody>
      </table>

@endsection