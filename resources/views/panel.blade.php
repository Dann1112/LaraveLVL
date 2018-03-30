@extends('dashboards/control')

@section('option_content')

<ul class="nav nav-tabs" id="teamsTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="newTeam-tab" data-toggle="tab" href="#newTeam" role="tab" >@lang('panel.new')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="editTeam-tab" data-toggle="tab" href="#editTeam" role="tab">@lang('panel.edit')</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="deleteTeam-tab" data-toggle="tab" href="#deleteTeam" role="tab">@lang('panel.delete')</a>
        </li>
</ul>

<div class="tab-content" id="teamsTabContent">

    <div class="tab-pane fade show active" id="newTeam" role="tabpanel" aria-labelledby="tab-team">
        <hr class="border" style="color:white">
        <h3 class="text-center" style="width:100%">@lang('panel.new_team')</h3>
        <hr class="border" style="color:white">

        @include('layouts.errors')


      <form class="text-center" method="POST" action="{{route('teams')}}" enctype="multipart/form-data">

        {{csrf_field()}}

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="name">@lang('panel.name')&nbsp<span class="text-danger">*</span></label>
              <input type="text" class="form-control col-10" name="name" required>
              <br>
            </div>

            <div class="form-row text-center my-2">
            <label class="col-form-label col-2 " for="abbreviation">@lang('panel.abbreviation')&nbsp<span class="text-danger">*</span></label>
              <input type="text" class="form-control col-10" name="abbreviation" style="max-width:100px" required>
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="manager">@lang('panel.manager')&nbsp<span class="text-danger">*</span></label>
              <input type="text" class="form-control col-10" name="manager" required>
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="comanager">@lang('panel.comanager')</label>
              <input type="text" class="form-control col-10" name="comanager">
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="streaming_channel">@lang('panel.streaming_channel')</label>
              <input type="text" class="form-control col-10" name="streaming_channel" >
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="primary_color">@lang('panel.primary_color')&nbsp<span class="text-danger">*</span></label>
              <input type="text" class="form-control col-10" placeholder="In RGB (255,255,255), can't be white" name="primary_color" required>
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="logo">@lang('panel.logo')&nbsp<span class="text-danger">*</span></label>
              <input type="file" class="col-10" name="logo" required>
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="twitter">@lang('panel.twitter')</label>
              <input type="text" class="form-control col-10" name="twitter" >
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="Facebook">@lang('panel.facebook')</label>
              <input type="text" class="form-control col-10" name="facebook" >
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="twitch">@lang('panel.twitch')</label>
              <input type="text" class="form-control col-10" name="twitch" >
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="youtube">@lang('panel.youtube')</label>
              <input type="text" class="form-control col-10" name="youtube" >
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="instagram">@lang('panel.instagram')</label>
              <input type="text" class="form-control col-10" name="instagram" >
            </div>

            <button type="submit" class="btn btn-primary btn-lg my-3" style="width:50%">@lang('panel.add')</button>
      </form>


    </div>

</div>




    
  @endsection