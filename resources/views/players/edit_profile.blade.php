@extends('dashboards.player')

@section('option_content')

    <hr class="border" style="color:white">
    <h3 class="text-center" style="width:100%">@lang('edit_profile.title')</h3>
    <hr class="border" style="color:white">

    <form>
        {{csrf_field()}}
        <div class="form-inline my-2">
            <label for="username" style="min-width:200px">@lang('edit_profile.username')&nbsp;</label>
            <input type="text" name="username" class="form-control" value="{{$player->username}}" readonly disabled>
        </div>

        <div class="form-inline my-2">
                <label style="min-width:200px" for="profile_picture">@lang('edit_profile.new_profile_picture')</label>
                <div class="input-group">
                    <input type="file" name="profile_picture" id="fileToUpload">
                </div>
            </div>

        <div class="form-inline my-2">
                <label for="name" style="min-width:200px">@lang('edit_profile.name')</label>
                <input type="text" name="name" class="form-control" value="{{$player->name}}">
                <label for="last_name" style="min-width:200px">@lang('edit_profile.last_name')</label>
                <input type="text" name="last_name" class="form-control" value="{{$player->last_name}}">
            </div>

        <div class="form-inline my-2">
            <label for="birth_date" style="min-width:200px">@lang('edit_profile.birth_date')</label>
            <input type="date" name="birth_date" class="form-control" value="{{$player->birth_date}}">
        </div>

        <div class="form-inline my-2">
                <label for="gender" style="min-width:200px">@lang('edit_profile.gender')</label>
                @if($player->gender == 'F')
                    <label><input name="gender" type="radio" value="M" style="min-width:100px" >@lang('edit_profile.male')</label>
                    <span style="width:100px"></span>
                    <label><input name="gender" type="radio" value="F" style="min-width:100px" checked>@lang('edit_profile.female')</label>
                @else
                    <label><input name="gender" type="radio" value="M" style="min-width:100px" checked >@lang('edit_profile.male')</label>
                    <span style="width:100px"></span>
                    <label><input name="gender" type="radio" value="F" style="min-width:100px" >@lang('edit_profile.female')</label>
                @endif
        </div>
        <hr class="border" style="color:white">
        <div class="form-group my-2 text-center">
                    <label for="position" style="min-width:200px" class="">@lang('edit_profile.position') </label>
                <ul class="list-inline">
                    <li class="list-inline-item"><label><input name="position" type="radio" value="GK" style="width:50px; max-width:50px" >@lang('position.GK')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="CB" style="width:50px; max-width:50px" >@lang('position.CB')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="LB" style="width:50px; max-width:50px" >@lang('position.LB')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="RB" style="width:50px; max-width:50px" >@lang('position.RB')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="CM" style="width:50px; max-width:50px" >@lang('position.CM')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="CAM" style="width:50px; max-width:50px" >@lang('position.CAM')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="CDM" style="width:50px; max-width:50px" >@lang('position.CDM')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="LM" style="width:50px; max-width:50px" >@lang('position.LM')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="RM" style="width:50px; max-width:50px" >@lang('position.RM')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="ST" style="width:50px; max-width:50px" >@lang('position.ST')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="LW" style="width:50px; max-width:50px" >@lang('position.LW')</label></li>
                    <li class="list-inline-item"><label><input name="position" type="radio" value="RW" style="width:50px; max-width:50px" >@lang('position.RW')</label></li>
                </ul>
            </div>

            <hr class="border" style="color:white">

            <div class="form-group my-2">
                <div class="form-inline my-2">
                    <label for="overall" style="min-width:200px">@lang('edit_profile.overall')&nbsp;</label>
                    <input type="number" name="overall" class="form-control" value="{{$player->overall}}" style="max-width:80px">
                </div>
        
                <div class="form-inline">
                    <label for="pace" style="min-width:200px">@lang('edit_profile.pace')&nbsp;</label>
                    <input type="number" name="pace" class="form-control" value="{{$player->pace}}" style="max-width:80px">
                    <label for="shooting" style="min-width:200px">@lang('edit_profile.shooting')&nbsp;</label>
                    <input type="number" name="shooting" class="form-control" value="{{$player->shooting}}" style="max-width:80px">
                </div>
                <div class="form-inline my-2">
                    <label for="passing" style="min-width:200px">@lang('edit_profile.passing')&nbsp;</label>
                    <input type="number" name="passing" class="form-control" value="{{$player->passing}}" style="max-width:80px">
                    <label for="physical" style="min-width:200px">@lang('edit_profile.physical')&nbsp;</label>
                    <input type="number" name="physical" class="form-control" value="{{$player->physical}}" style="max-width:80px">
                </div>
                <div class="form-inline my-2">
                    <label for="defense" style="min-width:200px">@lang('edit_profile.defense')&nbsp;</label>
                    <input type="number" name="defense" class="form-control" value="{{$player->defense}}" style="max-width:80px">
                    <label for="dribbling" style="min-width:200px">@lang('edit_profile.dribbling')&nbsp;</label>
                    <input type="number" name="dribbling" class="form-control" value="{{$player->dribbling}}" style="max-width:80px">
                </div>
                    
            </div>

            <hr class="border" style="color:white">

        <div class="form-inline my-2">
            <label for="height" style="min-width:200px">@lang('edit_profile.height')&nbsp;</label>
            <input type="text" name="height" class="form-control" value="{{$player->height}}" style="max-width:80px">
            <label for="weight" style="min-width:200px">@lang('edit_profile.weight')&nbsp;</label>
            <input type="text" name="weight" class="form-control" value="{{$player->weight}}" style="max-width:80px">
        </div>

        <div class="form-inline my-2">
            <label for="language" style="min-width:200px">@lang('edit_profile.language')</label>
            <label><input name="language" type="radio" value="es" style="min-width:80px" >@lang('edit_profile.spanish')</label>
            <span style="width:100px"></span>
            <label><input name="language" type="radio" value="en" style="min-width:80px" checked>@lang('edit_profile.english')</label>
            <span style="width:100px"></span>
            <label><input name="language" type="radio" value="00" style="min-width:80px" checked>@lang('edit_profile.other')</label>
        </div>

        <div class="form-inline my-2">
            <label for="strong_foot" style="min-width:200px">@lang('edit_profile.strong_foot')</label>
            <label><input name="strong_foot" type="radio" value="R" style="min-width:80px" >@lang('edit_profile.right')</label>
            <span style="width:100px"></span>
            <label><input name="strong_foot" type="radio" value="L" style="min-width:80px" checked>@lang('edit_profile.left')</label>
        </div>

        <div class="form-group my-4 text-center">
            <button class="btn btn-primary btn-lg mx-auto">@lang('edit_profile.update')
        </div>


        
        

    </form>

@endsection