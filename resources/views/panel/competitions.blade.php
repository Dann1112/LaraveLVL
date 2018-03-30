@extends('dashboards/control')

@section('option_content')

<ul class="nav nav-tabs" id="CompetitionsTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="newCompetition-tab" data-toggle="tab" href="#newCompetition" role="tab" >@lang('panel.new')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="editCompetition-tab" data-toggle="tab" href="#editCompetition" role="tab">@lang('panel.edit')</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="deleteCompetition-tab" data-toggle="tab" href="#deleteCompetition" role="tab">@lang('panel.delete')</a>
        </li>
</ul>

<div class="tab-content" id="CompetitionTabContent">

    <div class="tab-pane fade show active" id="newCompetition" role="tabpanel" aria-labelledby="tab-competition">
        <hr class="border" style="color:white">
        <h3 class="text-center" style="width:100%">@lang('panel.new_competition')</h3>
        <hr class="border" style="color:white">

        @include('layouts.errors')


      <form class="text-center" method="POST" action="{{route('competitions')}}" enctype="multipart/form-data">

        {{csrf_field()}}

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="name">@lang('panel.name')&nbsp<span class="text-danger">*</span></label>
              <input type="text" class="form-control col-10" name="name" required>
              <br>
            </div>

            <div class="form-row text-center my-2">
            <label class="col-form-label col-2 " for="start_date">@lang('panel.start_date')&nbsp<span class="text-danger">*</span></label>
              <input type="date" class="form-control col-10" name="start_date" required>
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="end_date">@lang('panel.end_date')</label>
              <input type="date" class="form-control col-10" name="end_date">
              
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="prize">@lang('panel.prize')</label>
              <input type="number" class="form-control col-10" name="prize">
            </div>

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="champion">@lang('panel.champion')</label>
              <input type="text" class="form-control col-10" name="champion" >
            </div>

            <button type="submit" class="btn btn-primary btn-lg my-3" style="width:50%">@lang('panel.add')</button>
      </form>


    </div>

</div>




    
  @endsection