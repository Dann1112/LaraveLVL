@extends('layouts/layout')

@section('content')
  <div class="container-fluid" style="background-color:black">
  <div class="container" >

      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">@lang('control_panel.teams')</a>
          </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <section class="row my-5">
                <div class="nav flex-column nav-pills col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">NEW</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">EDIT</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">DELETE</a>
                </div>
                <div class="tab-content col-9" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="tab-team" role="tabpanel" aria-labelledby="tab-team">
                        <hr class="border" style="color:white">
                        <h3 class="text-center" style="width:100%">@lang('control.new_team')</h3>
                        <hr class="border" style="color:white">


                      <form class="text-center" method="POST" action="/teams">

                        {{csrf_field()}}

                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Team Name&nbsp<span class="text-danger">*</span></label>
                              <input type="text" class="form-control col-10" name="name" required>
                              <br>
                            </div>
      
                            <div class="form-row text-center my-2">
                            <label class="col-form-label col-2 ">Abbreviation&nbsp<span class="text-danger">*</span></label>
                              <input type="text" class="form-control col-10" name="abbreviation" style="max-width:100px" required>
                            </div>
      
                            <div class="form-row text-center my-2">
                            <label class="col-form-label col-2">Website</label>
                              <input type="text" class="form-control col-10">
                              <br>
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Manager&nbsp<span class="text-danger">*</span></label>
                              <input type="text" class="form-control col-10" name="manager" required>
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">CoManager</label>
                              <input type="text" class="form-control col-10" name="comanager">
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Streaming Channel</label>
                              <input type="text" class="form-control col-10" name="streaming_channel" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Primary Color&nbsp<span class="text-danger">*</span></label>
                              <input type="text" class="form-control col-10" placeholder="In RGB (255,255,255), can't be white" name="primary_color" required>
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Secondary Color</label>
                              <input type="text" class="form-control col-10" name="secondary_color" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Logo&nbsp<span class="text-danger">*</span></label>
                              <input type="file" class="form-control-file col-10" name="logo" required>
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Twitter</label>
                              <input type="text" class="form-control col-10" name="twitter" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Facebook</label>
                              <input type="text" class="form-control col-10" name="facebook" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Twitch</label>
                              <input type="text" class="form-control col-10" name="twitch" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Youtube</label>
                              <input type="text" class="form-control col-10" name="youtube" >
                            </div>
      
                            <div class="form-row text-center my-2">
                              <label class="col-form-label col-2">Instagram</label>
                              <input type="text" class="form-control col-10" name="instagram" >
                            </div>
      
                            <button type="submit" class="btn btn-primary btn-lg my-3" style="width:50%">Save</button>
                          </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <hr class="border" style="color:white">
                            <h3 class="text-center" style="width:100%">Edit Team</h3>
                            <hr class="border" style="color:white">
                          <form class="text-center">
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Team Name&nbsp<span class="text-danger">*</span></label>
                                  <select class="form-control col-10">
                                    <option>Default</option>
                                  </select>
                                  <br>
                                </div>
          
                                <div class="form-row text-center my-2">
                                <label class="col-form-label col-2 ">Abbreviation&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" placeholder="ABV" style="max-width:100px" required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                <label class="col-form-label col-2">Website</label>
                                  <input type="text" class="form-control col-10">
                                  <br>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Manager&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">CoManager</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Streaming Channel</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Primary Color&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" placeholder="In RGB (255,255,255), can't be white"  required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Secondary Color</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Logo&nbsp<span class="text-danger">*</span></label>
                                  <input type="file" class="form-control-file col-10"  required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Twitter</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Facebook</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Twitch</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Youtube</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Instagram</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <button type="submit" class="btn btn-warning btn-lg my-3" style="width:50%">Update</button>
                              </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <hr class="border" style="color:white">
                            <h3 class="text-center" style="width:100%">Edit Team</h3>
                            <hr class="border" style="color:white">
                          <form class="text-center">
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Team Name&nbsp<span class="text-danger">*</span></label>
                                  <select class="form-control col-10">
                                    <option>Default</option>
                                  </select>
                                  <br>
                                </div>
          
                                <div class="form-row text-center my-2">
                                <label class="col-form-label col-2 ">Abbreviation&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" placeholder="ABV" style="max-width:100px" required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                <label class="col-form-label col-2">Website</label>
                                  <input type="text" class="form-control col-10">
                                  <br>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Manager&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">CoManager</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Streaming Channel</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Primary Color&nbsp<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control col-10" placeholder="In RGB (255,255,255), can't be white"  required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Secondary Color</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Logo&nbsp<span class="text-danger">*</span></label>
                                  <input type="file" class="form-control-file col-10"  required>
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Twitter</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Facebook</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Twitch</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Youtube</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <div class="form-row text-center my-2">
                                  <label class="col-form-label col-2">Instagram</label>
                                  <input type="text" class="form-control col-10">
                                </div>
          
                                <button type="submit" class="btn btn-warning btn-lg my-3" style="width:50%">Update</button>
                              </form>
                        </div>

                    </div>
                </div>
                  
            </section>
          </div>
        </div>
  </div>
</div>

  @endsection