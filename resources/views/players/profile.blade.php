  @extends('layouts.layout')

  @section('content')
  
  <div class="container rounder py-3" style="background-color: rgba(0,0,0,.5)">

       <div class="row p-3">
      <div class="col-3 text-center rounded-circle p-3" style="background-image: url('/assets/img/bg_light.jpg'); height:300px">
      <img class="image-fluid" alt="{{$player->username}}" src="/storage/{{$player->profile_picture}}" style="height:100%; max-width:100%; ">
      </div>
      <div class="col-9 text-center my-auto" style="">
        <div class="d-flex justify-content-center">
          <h1 class="display-3 my-auto mx-2" style="color:white">{{$player->username}}</h1>
          <img class="rounded my-auto" src="/assets/img/flags/{{$player->nationality.'@'}}3x.png" alt="{{$player->nationality}}" style="height:50px; width:100px">

          
        </div>
        @if(Auth::check())
        @if(Auth::user()->role == '1')

        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        <li>@lang('profile.player_inscribed')</li>
                    </ul>
                </div>
            </div>
        @endif

        <form class="text-center" method="POST" action="{{route('club_request')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="username" value={{$player->username}}>
          <button type="submit" class="btn btn-primary btn-lg" style="width:50%">@lang('profile.invite')</button>
        </form>
        @endif
        @endif
        
      </div>
    </div>



    <div class="row p-3">
      <div class="col-3">
        <div class="card text-center">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">@lang('profile.team'):<br>
              <img src="/assets/img/equipos/azathoth.png" style="width:30px; height: 30px">Azathoth eSports</li>
            <li class="list-group-item">@lang('profile.positions'):<br>
              @include('partials.positions')
            @if($player->second_position)
              <span class="badge badge-success">{{$player->second_position}}</span>
            @endif
            @if($player->third_position)
              <span class="badge badge-success">{{$player->third_position}}</span>
              @endif
            </li>
            <li class="list-group-item">@lang('profile.birth_date'):<br>{{$player->birth_date}}</li>
            <li class="list-group-item">@lang('profile.height'):<br>{{$player->height}} cm</li>
            <li class="list-group-item">@lang('profile.weight'):<br>63 kg</li>
          </ul>
        </div>
      </div>
      <div class="col-9 text-center">
        <hr class="border" style="color:white">
        <h1 class="text-center" style="color:white">@lang('profile.latest_news')</h1>
        <div class="d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/assets/img/logos/1x2_azul.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          
        </div>
      </div>

    </div>

    <hr class="border" style="color:white">

    <h1 class="text-center" style="color:white">@lang('profile.statistics')</h1>
    <table class="table table-dark table-striped table-sm mx-auto" style="width:90%">
      <thead class="thead-dark">
        <tr>
          <th scope="col">@lang('profile.team')</th>
          <th scope="col">@lang('profile.goals')</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Azathoth</td>
          <td>0</td>
        </tr>

        <tr class="table-info font-weight-bold" style="color:black">
          <td>@lang('profile.totals')</td>
          <td>0</td>
        </tr>

      </tbody>
    </table>

    <hr class="border" style="color:white">

    <h1 class="text-center" style="color:white">@lang('profile.history')</h1>
    <table class="table table-dark table-striped table-sm mx-auto" style="width:90%">
      <thead class="thead-dark">
        <tr>
          <th scope="col">EQUIPO</th>
          <th scope="col">GOLES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Azathoth</td>
          <td>0</td>
        </tr>
        <tr class="table-info font-weight-bold" style="color:black">
          <td>@lang('profile.totals')</td>
          <td>0</td>
        </tr>

      </tbody>
    </table>

  </div>

  @endsection