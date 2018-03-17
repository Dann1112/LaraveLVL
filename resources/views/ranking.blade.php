@extends('layouts/layout')

@section('content')

  <div class="row d-flex my-3 col-sm-10 col-12 mx-auto" style="background-color: black">

    <div class="p-3 col-md-4 col-12 border-radius rounded" style="background-color: black">

      <form action="ranking.php" method="get" name="rankingForm" id="rankingForm">
        <div id="accordion" role="tablist">
        <div class="card" style="background-color: rgba(255,255,255,.2)">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne" style="color: white">@lang('ranking.general')
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <button type="submit" name="goalsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.goals')</button>
              <button type="submit" name="assistsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.assists')</button>
                <button type="submit" name="playedBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.gamesPlayed')</button>
                <button type="submit" name="yellowCardsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.yellow_cards')</button>
                <button type="submit" name="redCardsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.red_cards')</button>
            </div>
          </div>
        </div>


        <div class="card"  style="background-color: rgba(255,255,255,.2)">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo"  style="color: white">
                @lang('ranking.attacking')
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <button type="submit" name="shotsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%" value="Tiros">@lang('ranking.shots')</button>
              <button type="submit" name="shotsOnTargetBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.shotsOnTarget')</button>
              <button type="submit" name="woodHitsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.shotsOnWood')</button>
              <button type="submit" name="headerGoalsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.headerGoals')</button>
              <button type="submit" name="penaltyGoalsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.penaltyGoals')</button>
              <button type="submit" name="completedPassesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.completedPasses')</button>
              <button type="submit" name="keyPassesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.keyPasses')</button>
              <button type="submit" name="succesfulCrossesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.succesfulCrosses')</button>
              <button type="submit" name="cornerKicksTakenBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.cornerkicksTaken')</button>
            </div>
          </div>
        </div>

        <div class="card" style="background-color: rgba(255,255,255,.2)">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree" style="color: white">
                @lang('ranking.defense')
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <button type="submit" name="tacklesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.tackles')</button>
              <button type="submit" name="interceptionsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.interceptions')</button>
              <button type="submit" name="lastManTacklesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.lastManTackles')</button>
              <button type="submit" name="headersWonBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.headersWon')</button>
              <button type="submit" name="ownGoalsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.ownGoals')</button>
              <button type="submit" name="mistakesLeadingToGoalBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.mistakesLeadingToGoal')</button>
              <button type="submit" name="penaltiesConcededBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.penaltiesConceded')</button>
              <button type="submit" name="foulsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.fouls')</button>
            </div>
          </div>
        </div>

        <div class="card" style="background-color: rgba(255,255,255,.2)">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour" style="color: white">
                @lang('ranking.goalkeeper')
              </a>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
               <button type="submit" name="cleanSheetBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.cleanSheets')</button>
              <button type="submit" name="goalsConcededBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.goalsConceded')</button>
              <button type="submit" name="savesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.saves')</button>
              <button type="submit" name="penaltiesSavedBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.penaltiesSaved')</button>
              <button type="submit" name="1on1WonBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.1on1Won')/button>
              <button type="submit" name="1on1LostBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.1on1Lost')</button>
              <button type="submit" name="mistakesLeadingToGoalGKBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.mistakesLeadingToGoal')</button>
              <button type="submit" name="goalsConcededPerMatchBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.goalsPerMatch')</button>
            </div>
          </div>
        </div>

        <div class="card" style="background-color: rgba(255,255,255,.2)">
            <div class="card-header" role="tab" id="headingFive">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive" style="color: white">
                    @lang('ranking.clubs')
                </a>
              </h5>
            </div>
            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                 <button type="submit" name="winsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.wins')</button>
                  <button type="submit" name="losesBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.loses')</button>
                  <button type="submit" name="goalsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.goals')</button>
                  <button type="submit" name="yellowCardsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.yellowCards')</button>
                  <button type="submit" name="redCardsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.redCards')</button>
                  <button type="submit" name="shotsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.shots')</button>
                  <button type="submit" name="shotsOnTargetClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.shotsOnTarget')</button>
                  <button type="submit" name="completedPassesClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.completedPasses')</button>
                  <button type="submit" name="succesfulCrossesClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.succesfulCrosses')</button>
                  <button type="submit" name="cleanSheetsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.cleanSheets')</button>
                  <button type="submit" name="interceptionsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.interceptions')</button>
                  <button type="submit" name="foulsClubsBtn" class="btn btn-outline-light btn-lg text-left" style="width: 100%">@lang('ranking.fouls')</button>
              </div>
            </div>
        </div>

        </div>
      </form>
    </div>



    <div class="col-md-8 col-12 px-md-3 py-md-0 py-3 px-3 text-center" style="background-color: black">

      <hr style="border-color: white">
      <h1 class="display-4" style="color: white">{{'TOP '.}}</h1>
      <hr style="border-color: white">
      <table class="table table-dark table-striped table-hover table-responsive-xl">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">@lang('ranking.picture')</th><!-- FOTO -->
            <th scope="col">@lang('ranking.name')</th>
            <th scope="col">@lang('ranking.team')</th>
            <th scope="col">@lang('ranking.stat')</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center" style="height:200px">
            <th scope="row " class="h3 align-middle" style="text">1</th>
            <td class="align-middle"><img class="img-fluid" src="profile_pictures/dann1112.jpg" style="max-height: 200px; max-width: 200px"></td>
            <td class="h1 align-middle">Dann1112</td>
            <td class="align-middle"><img class="img-fluid" src="assets/img/teams/azathoth.png" style="max-height: 100px; max-width: 100px"></td>
              <td class="h3 align-middle">11</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  @endsection