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
                                            <option value="">@lang('month')</option>
                                            <option value="1">@lang('jan')</option>
                                            <option value="2">@lang('feb')</option>
                                            <option value="3">@lang('mar')</option>
                                            <option value="4">@lang('apr')</option>
                                            <option value="5">@lang('may')</option>
                                            <option value="6">@lang('jun')</option>
                                            <option value="7">@lang('jul')</option>
                                            <option value="8">@lang('aug')</option>
                                            <option value="9">@lang('sep')</option>
                                            <option value="10">@lang('oct')</option>
                                            <option value="11">@lang('nov')</option>
                                            <option value="12">@lang('dec')</option>
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
                                <option value="AFG">Afghanistan</option>
                                <option value="ALA">Åland Islands</option>
                                <option value="ALB">Albania</option>
                                <option value="DZA">Algeria</option>
                                <option value="ASM">American Samoa</option>
                                <option value="AND">Andorra</option>
                                <option value="AGO">Angola</option>
                                <option value="AIA">Anguilla</option>
                                <option value="ATA">Antarctica</option>
                                <option value="ATG">Antigua and Barbuda</option>
                                <option value="ARG">Argentina</option>
                                <option value="ARM">Armenia</option>
                                <option value="ABW">Aruba</option>
                                <option value="AUS">Australia</option>
                                <option value="AUT">Austria</option>
                                <option value="AZE">Azerbaijan</option>
                                <option value="BHS">Bahamas</option>
                                <option value="BHR">Bahrain</option>
                                <option value="BGD">Bangladesh</option>
                                <option value="BRB">Barbados</option>
                                <option value="BLR">Belarus</option>
                                <option value="BEL">Belgium</option>
                                <option value="BLZ">Belize</option>
                                <option value="BEN">Benin</option>
                                <option value="BMU">Bermuda</option>
                                <option value="BTN">Bhutan</option>
                                <option value="BOL">Bolivia, Plurinational State of</option>
                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BIH">Bosnia and Herzegovina</option>
                                <option value="BWA">Botswana</option>
                                <option value="BVT">Bouvet Island</option>
                                <option value="BRA">Brazil</option>
                                <option value="IOT">British Indian Ocean Territory</option>
                                <option value="BRN">Brunei Darussalam</option>
                                <option value="BGR">Bulgaria</option>
                                <option value="BFA">Burkina Faso</option>
                                <option value="BDI">Burundi</option>
                                <option value="KHM">Cambodia</option>
                                <option value="CMR">Cameroon</option>
                                <option value="CAN">Canada</option>
                                <option value="CPV">Cape Verde</option>
                                <option value="CYM">Cayman Islands</option>
                                <option value="CAF">Central African Republic</option>
                                <option value="TCD">Chad</option>
                                <option value="CHL">Chile</option>
                                <option value="CHN">China</option>
                                <option value="CXR">Christmas Island</option>
                                <option value="CCK">Cocos (Keeling) Islands</option>
                                <option value="COL">Colombia</option>
                                <option value="COM">Comoros</option>
                                <option value="COG">Congo</option>
                                <option value="COD">Congo, the Democratic Republic of the</option>
                                <option value="COK">Cook Islands</option>
                                <option value="CRI">Costa Rica</option>
                                <option value="CIV">Côte d'Ivoire</option>
                                <option value="HRV">Croatia</option>
                                <option value="CUB">Cuba</option>
                                <option value="CUW">Curaçao</option>
                                <option value="CYP">Cyprus</option>
                                <option value="CZE">Czech Republic</option>
                                <option value="DNK">Denmark</option>
                                <option value="DJI">Djibouti</option>
                                <option value="DMA">Dominica</option>
                                <option value="DOM">Dominican Republic</option>
                                <option value="ECU">Ecuador</option>
                                <option value="EGY">Egypt</option>
                                <option value="SLV">El Salvador</option>
                                <option value="GNQ">Equatorial Guinea</option>
                                <option value="ERI">Eritrea</option>
                                <option value="EST">Estonia</option>
                                <option value="ETH">Ethiopia</option>
                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                <option value="FRO">Faroe Islands</option>
                                <option value="FJI">Fiji</option>
                                <option value="FIN">Finland</option>
                                <option value="FRA">France</option>
                                <option value="GUF">French Guiana</option>
                                <option value="PYF">French Polynesia</option>
                                <option value="ATF">French Southern Territories</option>
                                <option value="GAB">Gabon</option>
                                <option value="GMB">Gambia</option>
                                <option value="GEO">Georgia</option>
                                <option value="DEU">Germany</option>
                                <option value="GHA">Ghana</option>
                                <option value="GIB">Gibraltar</option>
                                <option value="GRC">Greece</option>
                                <option value="GRL">Greenland</option>
                                <option value="GRD">Grenada</option>
                                <option value="GLP">Guadeloupe</option>
                                <option value="GUM">Guam</option>
                                <option value="GTM">Guatemala</option>
                                <option value="GGY">Guernsey</option>
                                <option value="GIN">Guinea</option>
                                <option value="GNB">Guinea-Bissau</option>
                                <option value="GUY">Guyana</option>
                                <option value="HTI">Haiti</option>
                                <option value="HMD">Heard Island and McDonald Islands</option>
                                <option value="VAT">Holy See (Vatican City State)</option>
                                <option value="HND">Honduras</option>
                                <option value="HKG">Hong Kong</option>
                                <option value="HUN">Hungary</option>
                                <option value="ISL">Iceland</option>
                                <option value="IND">India</option>
                                <option value="IDN">Indonesia</option>
                                <option value="IRN">Iran, Islamic Republic of</option>
                                <option value="IRQ">Iraq</option>
                                <option value="IRL">Ireland</option>
                                <option value="IMN">Isle of Man</option>
                                <option value="ISR">Israel</option>
                                <option value="ITA">Italy</option>
                                <option value="JAM">Jamaica</option>
                                <option value="JPN">Japan</option>
                                <option value="JEY">Jersey</option>
                                <option value="JOR">Jordan</option>
                                <option value="KAZ">Kazakhstan</option>
                                <option value="KEN">Kenya</option>
                                <option value="KIR">Kiribati</option>
                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                <option value="KOR">Korea, Republic of</option>
                                <option value="KWT">Kuwait</option>
                                <option value="KGZ">Kyrgyzstan</option>
                                <option value="LAO">Lao People's Democratic Republic</option>
                                <option value="LVA">Latvia</option>
                                <option value="LBN">Lebanon</option>
                                <option value="LSO">Lesotho</option>
                                <option value="LBR">Liberia</option>
                                <option value="LBY">Libya</option>
                                <option value="LIE">Liechtenstein</option>
                                <option value="LTU">Lithuania</option>
                                <option value="LUX">Luxembourg</option>
                                <option value="MAC">Macao</option>
                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MDG">Madagascar</option>
                                <option value="MWI">Malawi</option>
                                <option value="MYS">Malaysia</option>
                                <option value="MDV">Maldives</option>
                                <option value="MLI">Mali</option>
                                <option value="MLT">Malta</option>
                                <option value="MHL">Marshall Islands</option>
                                <option value="MTQ">Martinique</option>
                                <option value="MRT">Mauritania</option>
                                <option value="MUS">Mauritius</option>
                                <option value="MYT">Mayotte</option>
                                <option value="MEX">Mexico</option>
                                <option value="FSM">Micronesia, Federated States of</option>
                                <option value="MDA">Moldova, Republic of</option>
                                <option value="MCO">Monaco</option>
                                <option value="MNG">Mongolia</option>
                                <option value="MNE">Montenegro</option>
                                <option value="MSR">Montserrat</option>
                                <option value="MAR">Morocco</option>
                                <option value="MOZ">Mozambique</option>
                                <option value="MMR">Myanmar</option>
                                <option value="NAM">Namibia</option>
                                <option value="NRU">Nauru</option>
                                <option value="NPL">Nepal</option>
                                <option value="NLD">Netherlands</option>
                                <option value="NCL">New Caledonia</option>
                                <option value="NZL">New Zealand</option>
                                <option value="NIC">Nicaragua</option>
                                <option value="NER">Niger</option>
                                <option value="NGA">Nigeria</option>
                                <option value="NIU">Niue</option>
                                <option value="NFK">Norfolk Island</option>
                                <option value="MNP">Northern Mariana Islands</option>
                                <option value="NOR">Norway</option>
                                <option value="OMN">Oman</option>
                                <option value="PAK">Pakistan</option>
                                <option value="PLW">Palau</option>
                                <option value="PSE">Palestinian Territory, Occupied</option>
                                <option value="PAN">Panama</option>
                                <option value="PNG">Papua New Guinea</option>
                                <option value="PRY">Paraguay</option>
                                <option value="PER">Peru</option>
                                <option value="PHL">Philippines</option>
                                <option value="PCN">Pitcairn</option>
                                <option value="POL">Poland</option>
                                <option value="PRT">Portugal</option>
                                <option value="PRI">Puerto Rico</option>
                                <option value="QAT">Qatar</option>
                                <option value="REU">Réunion</option>
                                <option value="ROU">Romania</option>
                                <option value="RUS">Russian Federation</option>
                                <option value="RWA">Rwanda</option>
                                <option value="BLM">Saint Barthélemy</option>
                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KNA">Saint Kitts and Nevis</option>
                                <option value="LCA">Saint Lucia</option>
                                <option value="MAF">Saint Martin (French part)</option>
                                <option value="SPM">Saint Pierre and Miquelon</option>
                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                <option value="WSM">Samoa</option>
                                <option value="SMR">San Marino</option>
                                <option value="STP">Sao Tome and Principe</option>
                                <option value="SAU">Saudi Arabia</option>
                                <option value="SEN">Senegal</option>
                                <option value="SRB">Serbia</option>
                                <option value="SYC">Seychelles</option>
                                <option value="SLE">Sierra Leone</option>
                                <option value="SGP">Singapore</option>
                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                <option value="SVK">Slovakia</option>
                                <option value="SVN">Slovenia</option>
                                <option value="SLB">Solomon Islands</option>
                                <option value="SOM">Somalia</option>
                                <option value="ZAF">South Africa</option>
                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                <option value="SSD">South Sudan</option>
                                <option value="ESP">Spain</option>
                                <option value="LKA">Sri Lanka</option>
                                <option value="SDN">Sudan</option>
                                <option value="SUR">Suriname</option>
                                <option value="SJM">Svalbard and Jan Mayen</option>
                                <option value="SWZ">Swaziland</option>
                                <option value="SWE">Sweden</option>
                                <option value="CHE">Switzerland</option>
                                <option value="SYR">Syrian Arab Republic</option>
                                <option value="TWN">Taiwan, Province of China</option>
                                <option value="TJK">Tajikistan</option>
                                <option value="TZA">Tanzania, United Republic of</option>
                                <option value="THA">Thailand</option>
                                <option value="TLS">Timor-Leste</option>
                                <option value="TGO">Togo</option>
                                <option value="TKL">Tokelau</option>
                                <option value="TON">Tonga</option>
                                <option value="TTO">Trinidad and Tobago</option>
                                <option value="TUN">Tunisia</option>
                                <option value="TUR">Turkey</option>
                                <option value="TKM">Turkmenistan</option>
                                <option value="TCA">Turks and Caicos Islands</option>
                                <option value="TUV">Tuvalu</option>
                                <option value="UGA">Uganda</option>
                                <option value="UKR">Ukraine</option>
                                <option value="ARE">United Arab Emirates</option>
                                <option value="GBR">United Kingdom</option>
                                <option value="USA">United States</option>
                                <option value="UMI">United States Minor Outlying Islands</option>
                                <option value="URY">Uruguay</option>
                                <option value="UZB">Uzbekistan</option>
                                <option value="VUT">Vanuatu</option>
                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                <option value="VNM">Viet Nam</option>
                                <option value="VGB">Virgin Islands, British</option>
                                <option value="VIR">Virgin Islands, U.S.</option>
                                <option value="WLF">Wallis and Futuna</option>
                                <option value="ESH">Western Sahara</option>
                                <option value="YEM">Yemen</option>
                                <option value="ZMB">Zambia</option>
                                <option value="ZWE">Zimbabwe</option>
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

<!--


                <div class="card-header">@lang('register.titulo')</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

-->