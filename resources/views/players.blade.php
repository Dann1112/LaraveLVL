@extends('layouts/layout')

@section('content')

  <div class="row d-flex my-3 col-sm-10 col-12 mx-auto" style="background-color: black">

        <div class="p-3 col-md-4 col-12 border-radius rounded" style="background-color: rgba(255,255,255,.2); color: white">
          <form>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.name')</label>
              <input type="text" class="form-control" id="pname" placeholder="Nombre del jugador"  style="width: 150px">
            </div>
            <div class="form-inline justify-content-between">
              <label for="pposition">@lang('players.position')</label>
              <select class="form-control" id="position" style="width: 150px">
                <option selected>@lang('players.choosePosition')</option>
                <option value="GK">@lang('position.GK')</option>
                <option value="LB">@lang('position.LB')</option>
                <option value="CB">@lang('position.CB')</option>
                <option value="RB">@lang('position.RB')</option>
                <option value="LM">@lang('position.LM')</option>
                <option value="CDM">@lang('position.CDM')</option>
                <option value="CM">@lang('position.CM')</option>
                <option value="CAM">@lang('position.CAM')</option>
                <option value="RM">@lang('position.RM')</option>
                <option value="LW">@lang('position.LW')</option>
                <option value="RW">@lang('position.RW')</option>
                <option value="ST">@lang('position.ST')</option>
              </select>
            </div>
    
            <hr>
    
            <label style="font-weight: bold">@lang('players.skills')</label>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.pace')</label>
              <div>
                <input type="text" class="form-control" id="pminpace" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxpace" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.shooting')</label>
              <div>
                <input type="text" class="form-control" id="pminshooting" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pminshooting" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.passing')</label>
              <div>
                <input type="text" class="form-control" id="pminpassing" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pminpassing" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.dribbling')</label>
              <div>
                <input type="text" class="form-control" id="pmindribbling" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmindribbling" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.defense')</label>
              <div>
                <input type="text" class="form-control" id="pmindefense" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxdefense" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.physical')</label>
              <div>
                <input type="text" class="form-control" id="pminphysical" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxphysical" placeholder="Max" style="width: 73px">
              </div>
            </div>
    
            <hr>
    
    
            <div class="form-inline justify-content-between my-1">
              <label for="pheight">@lang('players.height')</label>
              <input type="text" class="form-control" id="pheight" placeholder="Estatura" style="width: 150px">
            </div>
    
            <div class="form-inline justify-content-between my-1">
              <label for="pstatus">@lang('players.status')</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">@lang('players.any')</option>
                <option value="al">@lang('players.freeAgent')</option>
                <option value="ce">@lang('players.team')</option>
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pfoot">@lang('players.preferredFoot')</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">@lang('players.choose')</option>
                <option value="al">@lang('players.left')</option>
                <option value="ce">@lang('players.right')</option>
              </select>
            </div>
    
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.price')</label>
              <div>
                <input type="text" class="form-control" id="pminprice" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxprice" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.clause')</label>
              <div>
                <input type="text" class="form-control" id="pminclausule" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxclausule" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.language')</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">@lang('players.both')</option>
                <option value="al">@lang('players.spanish')</option>
                <option value="ce">@lang('players.english')</option>
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.nationality')</label>
              <select class="custom-select" style="width: 150px">
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.overall')</label>
              <div>
                <input type="text" class="form-control" id="pminclausule" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxclausule" placeholder="Max" style="width: 73px">
              </div>
            </div>
    
            <button class="btn btn-primary btn-lg my-3" type="submit" style="width: 100%">@lang('players.search')</button>
            <button class="btn btn-warning btn-lg " type="submit" style="width: 100%">@lang('players.clean')</button>
          </form>
        </div>
    
        

        <div class="col-md-8 col-12 px-md-3 py-md-0 py-3 px-3" style="background-color: black">

            @include('layouts/errors')

          <table class="table table-dark table-striped table-hover table-responsive-md">
            <thead class="thead-dark">
              <tr class="text-center">
                <th scope="col">@lang('players.picture')</th><!-- FOTO -->
                <th scope="col">@lang('players.nationality')</th><!-- NACIONALIDAD -->
                <th scope="col">@lang('players.name')</th>
                <th scope="col">@lang('players.overall')</th>
                <th scope="col">@lang('players.preferredPositions')</th>
                <th scope="col">@lang('players.team')</th><!-- EQUIPO -->
              </tr>
            </thead>
            <tbody>

              @foreach($players->all() as $player)
            <a href="players/{{$player->username}}">
            <tr class="text-center clickable-row" data-href='players/{{$player->username}}' style="cursor:pointer">
                <th scope="row"><img src="storage/{{$player->profile_picture}}" style="max-height: 30px; max-width: 30px"></th>
                <td><img src="/assets/img/flags/{{$player->nationality.'@'}}3x.png" alt="{{$player->nationality}}" style="max-height: 30px; max-width: 30px"></td>
                <td>{{$player->username}}</td>
                  <td>{{$player->overall}}</td>
                  <td>@include('partials.positions')</td>
                  <td><img src="assets/img/teams/azathoth.png" style="max-height: 30px; max-width: 30px">
                  
                </tr></a>
              @endforeach
            
              <script>
              jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
          </script>
            </tbody>
          </table>
          {{ $players->links() }}
        </div>
    
      </div>
@endsection