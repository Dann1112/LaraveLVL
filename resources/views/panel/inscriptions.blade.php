@extends('dashboards/control')

@section('option_content')

<ul class="nav nav-tabs" id="inscriptionsTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="newInscription-tab" data-toggle="tab" href="#newInscription" role="tab" >@lang('panel.new')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="editInscription-tab" data-toggle="tab" href="#editInscription" role="tab">@lang('panel.edit')</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="deleteInscription-tab" data-toggle="tab" href="#deleteInscription" role="tab">@lang('panel.delete')</a>
        </li>
</ul>

<div class="tab-content" id="InscriptionTabContent">

    <div class="tab-pane fade show active" id="newInscription" role="tabpanel" aria-labelledby="tab-Inscription">
        <hr class="border" style="color:white">
        <h3 class="text-center" style="width:100%">@lang('panel.new_inscription')</h3>
        <hr class="border" style="color:white">

        @include('layouts.errors')


      <form class="text-center" method="POST" action="{{route('inscriptions')}}" enctype="multipart/form-data">

        {{csrf_field()}}

            <div class="form-row text-center my-2">
              <label class="col-form-label col-2" for="competition">@lang('panel.competition')&nbsp<span class="text-danger">*</span></label>
              <select class="form-control col-10" name="competition">
                  <option selected disabled hidden>@lang('panel.choose_option')</option>
                  @foreach($competitions as $comp)
                    <option value="{{$comp->id}}">{{$comp->name}}</option>
                  @endforeach
              </select>
              <br>
            </div>

            <div class="form-row text-center my-2">
                <label class="col-form-label col-2" for="team">@lang('panel.team')&nbsp<span class="text-danger">*</span></label>
                <select class="form-control col-10" name="team">
                    <option selected disabled hidden>@lang('panel.choose_option')</option>
                    @foreach($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                </div>

            
            <button type="submit" class="btn btn-primary btn-lg my-3" style="width:50%">@lang('panel.add')</button>
      </form>


    </div>

</div>




    
  @endsection