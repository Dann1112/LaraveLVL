@extends('layouts/layout')

@section('content')

  <div class="row d-flex my-3 col-sm-10 col-12 mx-auto" style="background-color: black">

        <div class="p-3 col-md-4 col-12 border-radius rounded" style="background-color: rgba(255,255,255,.2); color: white">

        <form method="GET" action="{{route('search_results')}}">

            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.name')</label>
              <input type="text" class="form-control" id="pname" placeholder="Nombre del jugador"  style="width: 150px" name="username"  value="{{request('username')}}">
            </div>

            <div class="form-inline justify-content-between">
              <label for="pposition">@lang('players.position')</label>
              <select class="form-control" id="position" style="width: 150px" name="position">
                <option selected value="">@lang('players.any')</option>
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
              <input type="number"  min="0" max="99" class="form-control" id="pminpace" placeholder="Min" style="width: 73px" name="minPace" value="{{request('minPace')}}">
                <input type="number" min="0" max="99" class="form-control" id="pmaxpace" placeholder="Max" style="width: 73px" name="maxPace" value="{{request('maxPace')}}">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.shooting')</label>
              <div>
                <input type="number" min="0" max="99" class="form-control" id="pminshooting" placeholder="Min" style="width: 73px" name="minShooting" value="{{request('minShooting')}}">
                <input type="number" min="0" max="99" class="form-control" id="pminshooting" placeholder="Max" style="width: 73px" name="maxShooting" value="{{request('maxShooting')}}">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.passing')</label>
              <div>
                <input type="number" min="0" max="99" class="form-control" id="pminpassing" placeholder="Min" style="width: 73px" name="minPassing" value="{{request('minPassing')}}">
                <input type="number" min="0" max="99" class="form-control" id="pminpassing" placeholder="Max" style="width: 73px" name="maxPassing" value="{{request('maxPassing')}}">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.dribbling')</label>
              <div>
                <input type="number" min="0" max="99" class="form-control" id="pmindribbling" placeholder="Min" style="width: 73px" name="minDribbling" value="{{request('minDribbling')}}">
                <input type="number" min="0" max="99" class="form-control" id="pmindribbling" placeholder="Max" style="width: 73px" name="maxDribbling" value="{{request('maxDribbling')}}">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.defense')</label>
              <div>
                <input type="number" min="0" max="99" class="form-control" id="pmindefense" placeholder="Min" style="width: 73px" name="minDefense" value="{{request('minDefense')}}">
                <input type="number" min="0" max="99" class="form-control" id="pmaxdefense" placeholder="Max" style="width: 73px" name="maxDefense" value="{{request('maxDefense')}}">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.physical')</label>
              <div>
                <input type="number" min="0" max="99" class="form-control" id="pminphysical" placeholder="Min" style="width: 73px" name="minPhysical" value="{{request('minPhysical')}}">
                <input type="number" min="0" max="99" class="form-control" id="pmaxphysical" placeholder="Max" style="width: 73px" name="maxPhysical" value="{{request('maxPhysical')}}">
              </div>
            </div>
    
            <hr>
    
    
            <div class="form-inline justify-content-between my-1">
              <label for="pheight">@lang('players.height')&nbsp;(cm)</label>
              <div>
                  <input type="number" min="160" max="250" class="form-control" id="pminheight" placeholder="Min" style="width: 73px" name="minHeight" value="{{request('minHeight')}}">
                  <input type="number" min="160" max="250" class="form-control" id="pmaxheight" placeholder="Max" style="width: 73px" name="maxHeight" value="{{request('maxHeight')}}">
                </div>
            </div>

            <div class="form-inline justify-content-between my-1">
              <label for="pfoot">@lang('players.strong_foot')</label>
              <select class="custom-select" style="width: 150px" name="strong_foot">
                <option value="">@lang('players.any')</option>
                <option value="L">@lang('players.left')</option>
                <option value="R">@lang('players.right')</option>
              </select>
            </div>
    
            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.language')</label>
              <select class="custom-select" style="width: 150px" name="language">
                <option value="">@lang('players.any')</option>
                <option value="es">@lang('players.spanish')</option>
                <option value="en">@lang('players.english')</option>
                <option value="00">@lang('players.other')</option>
              </select>
            </div>

            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.nationality')</label>
              <select name="nationality" class="form-control" style="width:150px">
                    <option value="" selected>@lang('players.any')</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AX">Åland Islands</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia, Plurinational State of</option>
                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Côte d'Ivoire</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Curaçao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran, Islamic Republic of</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao</option>
                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestinian Territory, Occupied</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Réunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthélemy</option>
                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SX">Sint Maarten (Dutch part)</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela, Bolivarian Republic of</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands, British</option>
                      <option value="VI">Virgin Islands, U.S.</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                  </select>
            </div>

            <div class="form-inline justify-content-between my-1">
              <label for="pname">@lang('players.overall')</label>
              <div>
              <input type="text" min="0" max="99" class="form-control" id="pminclausule" placeholder="Min" style="width: 73px" name="minOverall" value="{{request('minOverall')}}">
              <input type="text" min="0" max="99" class="form-control" id="pmaxclausule" placeholder="Max" style="width: 73px" name="maxOverall" value="{{request('maxOverall')}}">
              </div>
            </div>
            
            <hr>

            <div class="form-inline">
                <label class="ml-auto">@lang('players.orderby') &nbsp;</label>
                <select class="form-control" name="orderby">
                  <option value="overall" selected>@lang('players.overall')</option>
                  <option value="username" >@lang('players.name')</option>
                  <option value="position" >@lang('players.position')</option>
                  <option value="pace" >@lang('players.pace')</option>
                  <option value="shooting" >@lang('players.shooting')</option>
                  <option value="passing" >@lang('players.passing')</option>
                  <option value="dribbling" >@lang('players.dribbling')</option>
                  <option value="defense" >@lang('players.defense')</option>
                  <option value="physical" >@lang('players.physical')</option>
                  <option value="height" >@lang('players.height')</option>
                </select>
              </div>

              <hr>
    
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