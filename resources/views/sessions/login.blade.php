
<!doctype html>
<html lang="en">

        @include('..\partials\head')

<script defer src="/assets/js/fontawesome-all.js"></script>

<body style="background-color: #F9F9F9">

  <!-- Container principal-->
  <div class="container-fluid px-5 py-5" >

    <div class="container border rounded px-5" style="width: 500px; background-color: #FFFFFF">
      <section>
        <img class="img-fluid mx-auto d-block" src="/assets/img/logos/1x1_white.png" style="height:150px">
        <h1 class="entry-title text-center text-dark">Iniciar Sesión</h1>
        <hr>
      
        @include('layouts.errors')

    
        <form action="{{ route('login') }}" class="form-group" method="POST" name="signup" id="signup" enctype="multipart/form-data" >

            {{ csrf_field ()}}

          <!--USERNAME-->
          <div class="form-group">
            <label class="col-form-label" for="username">Usuario<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Ingresa tu nombre de usuario" required autofocus>
              </div>
          </div>


          <!--PASSWORD-->
          <div class="form-group">
            <label class="control-label" for="password">Contraseña <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña" required>
              </div>
              <small><a class="btn btn-link" href="#">
                    ¿Olvidaste tu contraseña?
                </a></small>
          </div>

          <h5 class="text-right">¿Aún no estás registrado?<br><a href="{{route('register')}}">Crea una cuenta.</a></h5>
          <br>
      <div class="form-group">
        <div class="d-flex flex-column justify-content-center text-center">
          <input name="Submit" type="submit" value="Iniciar Sesion" class="btn btn-primary my-2">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                </label>
        </div>
      </div>
    </div>
  </form>
</div>
</div>


</body>
</html>