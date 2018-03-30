@extends('layouts.layout')

@section('content')

<div class="container-fluid" style="background: linear-gradient(to bottom, {{$team->primary_color}}, black);">
    <div class="container py-5 d-flex align-items-center justify-content-center">
    <img class="mr-5" style="height:auto; width:auto; max-height:200px; max-width:200px" src="/storage/{{$team->logo}}"  alt="{{$team->name}}">
        <div class="text-center">
        <h1 class="display-3">{{$team->name}}</h1>
            <ul class="inline-list mx-auto p-0" style="font-size:4em; color:white">
            <li class="list-inline-item"><a href="{{$team->facebook}}"> <i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i></a></li>
                <li class="list-inline-item"><a href="{{$team->twitter}}"><i class="fab fa-twitter" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></a></li>
                <li class="list-inline-item"><a href="{{$team->youtube}}"><i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></a></li>
                <li class="list-inline-item"><a href="{{$team->twitch}}"><i class="fab fa-twitch" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></a></li>
                <li class="list-inline-item"><a href="{{$team->instagram}}"><i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:black">
    <div class="container">
        <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="general" aria-selected="true">@lang('teams.overview')</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="squad-tab" data-toggle="tab" href="#squad" role="tab" aria-controls="general" aria-selected="true">@lang('teams.squad')</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="season-tab" data-toggle="tab" href="#season" role="tab" aria-controls="general" aria-selected="true">@lang('teams.current_season')</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="stats-tab" data-toggle="tab" href="#stats" role="tab" aria-controls="general" aria-selected="true">@lang('teams.stats')</a>
                </li>
              </ul>
            

            <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="general-tab">
                        <section class="mb-3">
                                <hr class="border" style="color:white">
                                <h3 class="text-center" style="width:100%">@lang('teams.fixtures')</h3>
                                <hr class="border" style="color:white">
                            <div class="container">
                                
                                <div class="row justify-content-around my-3" style="max-height:180px">
                        
                                    
                                    
                                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>@lang('teams.last_fixture')</h4>        

                                        
                                            <div class="d-flex mb-3">

                                                @if($last_fixture)
                                                <div class="text-center">
                                                <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/storage/{{$last_home_team->logo}}"  alt="TeamName">
                                                </div>

                                                
                                                <div class="text-center mx-3">
                                                    <span style="font-size: 2em; color:white">{{$last_fixture->home_goals}} : {{$last_fixture->away_goals}}</span><br>
                                                    <span >{{$last_fixture->date}}</span><br>
                                                    <span >{{$last_fixture->time}}</span>
                                                </div>
                            
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/storage/{{$last_away_team->logo}}"  alt="TeamName">
                                                </div>
                                            

                                                @else

                                                <div class="text-center">
                                                    <p>N/A</p>
                                                </div>

                                                @endif
                                            </div>


                                    </div>
                        
                                    
                                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>@lang('teams.next_fixture')</h4>        
                                            


                                            <div class="d-flex mb-3">
                                                @if($next_fixture)
                                                
                                                <div class="text-center">
                                                <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/storage/{{$next_home_team->logo}}"  alt="TeamName">
                                                </div>

                                                <div class="text-center mx-3">
                                                    <span style="font-size: 2em; color:white">VS</span><br>
                                                    <span >{{$next_fixture->date}}</span><br>
                                                    <span >{{$next_fixture->time}}</span>
                                                </div>
                            
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/storage/{{$next_away_team->logo}}"  alt="TeamName">
                                                </div>

                                                @else
                                                <div class="text-center">
                                                    <p>N/A</p>
                                                </div>

                                                @endif
                                            </div>


                                    </div>
                        
                                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>@lang('teams.form')</h4>        
                                            


                                            <div class="d-flex mb-3">
                                                <ul class="list-inline">
                                                    @foreach($last_5_matches as $match)

                                                    @foreach($last_5_teams as $team)

                                                    @if($match->home_team == $team->name || $match->away_team == $team->name)

                                                    <li class="list-inline-item">
                                                            <div class="d-flex flex-column">
                                                            <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/storage/{{$team->logo}}"  alt="TeamName">

                                                            @if($match->home_team == $team->name)
                                                                @if($match->home_goals > $match->away_goals)
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: red; height:40px; width:40px">
                                                                @elseif($match->home_goals < $match->away_goals)
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: greenyellow; height:40px; width:40px">
                                                                @else
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: orange; height:40px; width:40px">
                                                                @endif

                                                            @else
                                                                @if($match->home_goals > $match->away_goals)
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: greenyellow; height:40px; width:40px">
                                                                @elseif($match->home_goals < $match->away_goals)
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: red; height:40px; width:40px">
                                                                @else
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: orange; height:40px; width:40px">
                                                        @endif

                                                            @endif
                                                                
                                                                    <span style="color:black; font-weight: bold">{{$match->home_goals}}:{{$match->away_goals}}</span>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    @else
                                                    @continue

                                                    @endif

                                                    


                                                    

                                                        @endforeach
                                                        @endforeach

                                                    
                                                </ul>
                                            </div>


                                    </div>
                        
                                </div>
                            </div>
                        </section>

                        <section class="mb-3">
                                <hr class="border" style="color:white">
                                <h3 class="text-center" style="width:100%">@lang('teams.club_ranking')</h3>
                            <hr class="border" style="color:white">
                            <div class="row d-flex justify-content-around">
                                    <div class="card col-3 text-center">
                                            <h4 class="mt-2" style="color:white">@lang('teams.top_scorer')</h4>
                                            <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                            <div class="card-body">
                                                
                                              <p class="card-text">Dann1112<br>15 @lang('teams.goals')</p>
                                            </div>
                                          </div>
                                          <div class="card col-3 text-center">
                                                <h4 class="mt-2" style="color:white">@lang('teams.top_assists')</h4>
                                                <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                                <div class="card-body">
                                                    
                                                  <p class="card-text">Spirex1678<br>12 @lang('teams.assists')</p>
                                                </div>
                                              </div>
                                              <div class="card col-3 text-center">
                                                    <h4 class="mt-2" style="color:white">@lang('teams.the_best')</h4>
                                                    <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                                    <div class="card-body">
                                                        
                                                      <p class="card-text">Myrod45<br>@lang('teams.average') <br> 8.7</p>
                                                    </div>
                                                  </div>
                            </div>
                        </section>
                        
                        <section class="mb-3">
                                <hr class="border" style="color:white">
                                <h3 class="text-center" style="width:100%">@lang('teams.latest_news')</h3>
                            <hr class="border" style="color:white">
                            <div class="row d-flex justify-content-around">
                                    <div class="card col-3">
                                            <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                            <div class="card-body">
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          <div class="card col-3">
                                                <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                                <div class="card-body">
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                              </div>
                                              <div class="card col-3">
                                                    <img class="card-img-top align-self-center" src="http://via.placeholder.com/1024x768" style="height:auto; width:auto; max-height:200px; max-width:200px" alt="Card image cap">
                                                    <div class="card-body">
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                  </div>
                            </div>
                        </section>
            </div>

            <div class="tab-pane fade" id="squad" role="tabpanel" aria-labelledby="squad-tab">
                <div class="container my-3">
                        <table class="table table-dark table-striped table-hover table-responsive-md">
                                <thead class="thead-dark">
                                  <tr class="text-center">
                                    <th scope="col">@lang('players.picture')</th><!-- FOTO -->
                                    <th scope="col">@lang('players.nationality')</th><!-- NACIONALIDAD -->
                                    <th scope="col">@lang('players.name')</th>
                                    <th scope="col">@lang('players.overall')</th>
                                    <th scope="col">@lang('players.position')</th>
                                  </tr>
                                </thead>
                                <tbody>
                    
                                  
                                </tbody>
                              </table>
                        </div>
            </div>
            <div class="tab-pane fade" id="temporada" role="tabpanel" aria-labelledby="temporada-tab">
                    <div class="container my-3">
                        <section>
                            <hr class="border" style="color:white">
                            <h3 class="text-center" style="width:100%">@lang('teams.last_fixtures')</h3>
                            <hr class="border" style="color:white">
                            <table class="table table-dark table-striped table-hover table-responsive-md">
                                    <thead class="thead-dark">
                                      <tr class="text-center">
                                        <th scope="col">@lang('teams.competition')</th><!-- FOTO -->
                                        <th scope="col">@lang('teams.score')</th><!-- NACIONALIDAD -->
                                        <th scope="col">@lang('teams.date')</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                        
                                      
                                    </tbody>
                                  </table>
                        </section>
                        <section class="my-3">
                                <hr class="border" style="color:white">
                                <h3 class="text-center" style="width:100%">@lang('teams.next_fixtures')</h3>
                                <hr class="border" style="color:white">
                                <table class="table table-dark table-striped table-hover table-responsive-md">
                                        <thead class="thead-dark">
                                          <tr class="text-center">
                                            <th scope="col">@lang('teams.competition')</th><!-- FOTO -->
                                            <th scope="col">@lang('teams.fixture')</th><!-- NACIONALIDAD -->
                                            <th scope="col">@lang('teams.date')</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                            
                                          
                                        </tbody>
                                      </table>
                            </section>
                            </div>
            </div>
            <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            </div>
</div>

@endsection