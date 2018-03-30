@extends('dashboards/control')

@section('option_content')

<ul class="nav nav-tabs" id="fixturesTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="newFixture-tab" data-toggle="tab" href="#newFixture" role="tab" >@lang('panel.new')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="editFixture-tab" data-toggle="tab" href="#editFixture" role="tab">@lang('panel.edit')</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="deleteFixture-tab" data-toggle="tab" href="#deleteFixture" role="tab">@lang('panel.delete')</a>
        </li>
</ul>

<div class="tab-content" id="FixtureTabContent">

    <div class="tab-pane fade show active" id="newFixture" role="tabpanel" aria-labelledby="tab-fixture">
        <hr class="border" style="color:white">
        <h3 class="text-center" style="width:100%">@lang('panel.new_fixture')</h3>
        <hr class="border" style="color:white">

        @include('layouts.errors')


      <form class="text-center" method="POST" action="{{route('fixtures')}}" enctype="multipart/form-data">

        {{csrf_field()}}

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="competition">@lang('panel.competition')&nbsp<span class="text-danger">*</span></label>
              <select class="form-control col-10" name="competition">
                  <option selected disabled hidden>@lang('panel.choose_option')</option>
                  @foreach($competition as $comp)
                    <option value="{{$comp->id}}">{{$comp->name}}</option>
                  @endforeach
              </select>
              <br>
            </div>

            <div class="form-row text-center my-2">
            <label class="col-form-label col-2 " for="start_date">@lang('panel.status')&nbsp<span class="text-danger">*</span></label>
              <select class="form-control col-3" name="status">
                    <option selected disabled hidden>@lang('panel.choose_option')</option>
                    <option value="0">@lang('panel.unstarted')</option>
                    <option value="1">@lang('panel.live')</option>
                    <option value="2">@lang('panel.finished')</option>
                    <option value="3">@lang('panel.postponed')</option>
              </select>
              <label class="col-form-label col-2 " for="matchday">@lang('panel.matchday')&nbsp<span class="text-danger">*</span></label>
              <input class="form-control col-2" type="text" name="matchday">
            </div>

            <hr class="border" style="color:white">

            <div class="form-row text-center justify-content-around my-2">
              <select class="form-control col-3" name="home_team">
                  <option selected disabled hidden>@lang('panel.home_team')</option>
                  @foreach($teams as $team)
                    <option value="{{$team->name}}">{{$team->name}}</option>
                  @endforeach
              </select>
              <input class="form-control col-1" type="number" value="0" name="home_goals" placeholder="@lang('panel.home')">
              <span class="col-1" >VS</span>
              <input class="form-control col-1" type="number" value="0" name="away_goals" placeholder="@lang('panel.away')">
              <select class="form-control col-3" name="away_team">
                    <option selected disabled hidden>@lang('panel.away_team')</option>
                    @foreach($teams as $team)
                    <option value="{{$team->name}}">{{$team->name}}</option>
                  @endforeach
                </select>

            </div>

            <hr class="border" style="color:white">

            <div class="form-row text-center justify-content-around my-2">
              <label class="col-form-label col-2" for="date">@lang('panel.date')</label>
              <input type="date" class="form-control col-3" name="date">
              <label class="col-form-label col-2" for="time">@lang('panel.time')</label>
              <input type="time" class="form-control col-3" name="time" >
            </div>

            <button type="submit" class="btn btn-primary btn-lg my-3" style="width:50%">@lang('panel.add')</button>
      </form>


    </div>

</div>




    
  @endsection