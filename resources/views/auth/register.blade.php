<!doctype html>
<html lang="es">

     @push('stylesheets')
        <link rel="stylesheet" href="/assets/css/register-styles.css">
    @endpush
    
    @include('..\partials\head')


    <body>
        <!-- Container principal-->
        <div class="container-fluid py-2">
            <div class="container border rounded signup-box px-5 py-2 px-sm-10 col-md-5 col-sm-10 col-xs-12">
            <section>
                    <img class="logo-h1 img-fluid mx-auto d-block my-3" src="/assets/img/logos/1x2_white.png">
                    <h1 class="text-center" style="color:black">@lang('register.title')</h1>
                    <p class="text-center">@lang('register.valuesMarked')(<span class="text-danger">*</span>)@lang('register.areRequired')</p>
                    <hr>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <hr>
                    @endif

                                
                    

                    <form class="form-group" action="{{ route('register') }}" method="post" name="signup" enctype="multipart/form-data" >
                    @csrf

                        <!--USERNAME-->
                        <div class="form-group">
                            <label class="col-form-label">@lang('register.username')<span class="text-danger">*</span></label>
                            <input type="text" data-toggle="tooltip" title="@lang('register.usernameHint')"
                            class="form-control" name="username" placeholder="@lang('register.usernamePlc')" required>
                            <small>@lang('register.usernameHint')</small>
                        </div>

                        <!--EMAIL-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.email')<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" placeholder="@lang('register.emailPlc')" required>
                            <small>@lang('register.emailExplained')</small>
                        </div>

                        <!--PASSWORD-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.password')<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" placeholder="@lang('register.passwordPlc')" data-toggle="tooltip" required>
                            <small>@lang('register.passwordHint')</small>
                        </div>    

                        <!--CONFIRMA PASSWORD-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.passwordConf')<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" id="cpassword" placeholder="@lang('register.passwordConfPlc')" required>
                        </div>

                        <!--NOMBRE COMPLETO-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.fullName')<span class="text-danger">*</span></label>
                            <div class="form-inline">
                                <input type="text" class="form-control" name="name" placeholder="@lang('register.name')" data-toggle="tooltip" required>
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('register.lastName')" data-toggle="tooltip" required>
                            </div>
                        </div>

                        <!--FECHA NACIMIENTO-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.birthDate')<span class="text-danger">*</span></label>
                            <div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <select name="dd" class="form-control" required>
                                            <option value="">@lang('register.day')</option>
                                            <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="mm" class="form-control" required>
                                            <option value="">@lang('register.month')</option>
                                            <option value="1">@lang('months.jan')</option>
                                            <option value="2">@lang('months.feb')</option>
                                            <option value="3">@lang('months.mar')</option>
                                            <option value="4">@lang('months.apr')</option>
                                            <option value="5">@lang('months.may')</option>
                                            <option value="6">@lang('months.jun')</option>
                                            <option value="7">@lang('months.jul')</option>
                                            <option value="8">@lang('months.aug')</option>
                                            <option value="9">@lang('months.sep')</option>
                                            <option value="10">@lang('months.oct')</option>
                                            <option value="11">@lang('months.nov')</option>
                                            <option value="12">@lang('months.dec')</option>
                                        </select>
                                    </div>  
                                    <div class="form-group" >
                                        <select name="yyyy" class="form-control" required>
                                            <option value="0">@lang('register.year')</option>
                                            <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!--GENERO-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.gender')<span class="text-danger"></span></label>
                            <div>
                                <label><input name="gender" type="radio" value="M" checked >@lang('register.male')</label>
                                <label><input name="gender" type="radio" value="F" >@lang('register.female')</label>
                            </div>
                        </div>

                        <!--PIE-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.strongFoot')<span class="text-danger"></span></label>
                            <div>
                                <label><input name="strong_foot" type="radio" value="L" checked >@lang('register.left')</label>
                                <label><input name="strong_foot" type="radio" value="R" >@lang('register.right')</label>
                            </div>
                        </div>

                        <!--NACIONALIDAD-->
                        <div class="form-group" >
                            <label class="control-label">@lang('register.nationality') <span class="text-danger">*</span></label>
                            <select name="nationality" class="form-control" required>
                                <option value="inicial">@lang('register.choose')</option>
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

                        <!-- LANGUAGE -->
                        <div class="form-group">
                            <label class="control-label">@lang('register.language')<br></label>
                            <select name="language" class="form-control" required>
                                <option value="inicial">@lang('register.choose')</option>
                                <option value="es">@lang('register.spanish')</option>
                                <option value="en">@lang('register.english')</option>
                                <option value="00">@lang('register.both')</option>
                            </select>
                        </div>

                        <!--FOTO PERFIL-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.profilePicture')<br></label>
                            <div class="input-group">
                                <input type="file" name="profile_picture" id="fileToUpload">
                            </div>
                        </div>

                        <!--POSICION PREFERIDA-->
                        <div class="form-group">
                            <label class="control-label">@lang('register.position')<span class="text-danger">*</span></label>
                            <div class="form-check align-items-center">
                                <label class="form-check-label" style="color:black"><input class="form-check-input" type="radio" name="position" value="GK">@lang('register.goalkeeper')</label>
                                <br><br>
                                <label class="form-check-label" style="color:orange"><input class="form-check-input" type="radio" name="position" value="LB">@lang('register.leftBack')</label><br>
                                <label class="form-check-label" style="color:orange"><input class="form-check-input" type="radio" name="position" value="CB">@lang('register.centralBack')</label><br>
                                <label class="form-check-label" style="color:orange"><input class="form-check-input" type="radio" name="position" value="RB">@lang('register.rightBack')</label><br>
                                <br><br>

                                <label class="form-check-label" style="color:green"><input class="form-check-input" type="radio" name="position" value="CDM">@lang('register.centralDefensiveMidfielder')</label><br>
                                <label class="form-check-label" style="color:green"><input class="form-check-input" type="radio" name="position" value="CAM">@lang('register.centralAttackMidfielder')</label><br>
                                <label class="form-check-label" style="color:green"><input class="form-check-input" type="radio" name="position" value="LM">@lang('register.leftMidfielder')</label><br>
                                <label class="form-check-label" style="color:green"><input class="form-check-input" type="radio" name="position" value="RM">@lang('register.rightMidfielder')</label><br>
                                <br><br>
                                <label class="form-check-label" style="color:blue"><input class="form-check-input" type="radio" name="position" value="LW">@lang('register.leftWinger')</label><br>
                                <label class="form-check-label" style="color:blue"><input class="form-check-input" type="radio" name="position" value="ST">@lang('register.striker')</label><br>
                                <label class="form-check-label" style="color:blue"><input class="form-check-input" type="radio" name="position" value="RW">@lang('register.rightWinger')</label><br>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <h4 class="text-center" style="font-weight:bold; color:black">@lang('register.dontMiss')</h4>
                        <span mx-auto>@lang('register.clickHere')</span>

                        <div class="fb-page" data-href="https://www.facebook.com/lvlesports" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lvlesports" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lvlesports">Liga Virtual Latinoamericana</a></blockquote></div>
                            <hr>
                            <span class="text-muted d-none">@lang('register.termsAndCookies')</span>
                            <br>

                        
                            <input name="submit" type="submit" value="@lang('register.title')" class="btn btn-primary mx-auto d-block">
                        </div>
                    </form>
                </section>
            </div>
        </div>
    
    </body>
</html>