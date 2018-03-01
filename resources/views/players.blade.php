@extends('layouts/layout')

@section('content')

  <div class="row d-flex my-3 col-sm-10 col-12 mx-auto" style="background-color: black">

        <div class="p-3 col-md-4 col-12 border-radius rounded" style="background-color: rgba(255,255,255,.2); color: white">
          <form>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Nombre</label>
              <input type="text" class="form-control" id="pname" placeholder="Nombre del jugador"  style="width: 150px">
            </div>
            <div class="form-inline justify-content-between">
              <label for="pposition">Posicion</label>
              <select class="form-control" id="pposition" style="width: 150px">
                <option selected>Elige Posicion</option>
                <option value="PO">PO</option>
                <option value="LI">LI</option>
                <option value="DFC">DFC</option>
                <option value="LD">LD</option>
                <option value="MI">MI</option>
                <option value="MCD">MCD</option>
                <option value="MC">MC</option>
                <option value="MCO">MCO</option>
                <option value="MP">MP</option>
                <option value="MD">MD</option>
                <option value="EI">EI</option>
                <option value="ED">ED</option>
                <option value="SD">SD</option>
                <option value="DC">DC</option>
              </select>
            </div>
    
            <hr>
    
            <label style="font-weight: bold">HABILIDADES</label>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Ritmo</label>
              <div>
                <input type="text" class="form-control" id="pminpace" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxpace" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Tiro</label>
              <div>
                <input type="text" class="form-control" id="pminshooting" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pminshooting" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Passing</label>
              <div>
                <input type="text" class="form-control" id="pminpassing" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pminpassing" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Regate</label>
              <div>
                <input type="text" class="form-control" id="pmindribbling" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmindribbling" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Defensa</label>
              <div>
                <input type="text" class="form-control" id="pmindefense" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxdefense" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Físico</label>
              <div>
                <input type="text" class="form-control" id="pminphysical" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxphysical" placeholder="Max" style="width: 73px">
              </div>
            </div>
    
            <hr>
    
    
            <div class="form-inline justify-content-between my-1">
              <label for="pheight">Estatura</label>
              <input type="text" class="form-control" id="pheight" placeholder="Estatura" style="width: 150px">
            </div>
    
            <div class="form-inline justify-content-between my-1">
              <label for="pstatus">Estado</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">Cualquiera</option>
                <option value="al">Agente libre</option>
                <option value="ce">Con Equipo</option>
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pfoot">Pie Habil</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">Cualquiera</option>
                <option value="al">Izquierdo</option>
                <option value="ce">Derecho</option>
              </select>
            </div>
    
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Precio</label>
              <div>
                <input type="text" class="form-control" id="pminprice" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxprice" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Clausula de Recesion</label>
              <div>
                <input type="text" class="form-control" id="pminclausule" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxclausule" placeholder="Max" style="width: 73px">
              </div>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Idioma</label>
              <select class="custom-select" style="width: 150px">
                <option value="clq">Cualquiera</option>
                <option value="al">Español</option>
                <option value="ce">Inglés</option>
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Nacionalidad</label>
              <select class="custom-select" style="width: 150px">
              </select>
            </div>
            <div class="form-inline justify-content-between my-1">
              <label for="pname">Valoracion Global</label>
              <div>
                <input type="text" class="form-control" id="pminclausule" placeholder="Min" style="width: 73px">
                <input type="text" class="form-control" id="pmaxclausule" placeholder="Max" style="width: 73px">
              </div>
            </div>
    
            <button class="btn btn-primary btn-lg my-3" type="submit" style="width: 100%">Buscar</button>
            <button class="btn btn-warning btn-lg " type="submit" style="width: 100%">Limpiar</button>
          </form>
        </div>
    
        

        <div class="col-md-8 col-12 px-md-3 py-md-0 py-3 px-3" style="background-color: black">

            @extends('layouts/alerts')

          <table class="table table-dark table-striped table-hover table-responsive-md">
            <thead class="thead-dark">
              <tr class="text-center">
                <th scope="col">Foto</th><!-- FOTO -->
                <th scope="col">Nacionalidad</th><!-- NACIONALIDAD -->
                <th scope="col">Nombre</th>
                <th scope="col">Global</th>
                <th scope="col">Posiciones Preferidas</th>
                <th scope="col">Equipo</th><!-- EQUIPO -->
              </tr>
            </thead>
            <tbody>

              @foreach($players->all() as $player)
                <tr class="text-center">
                  <th scope="row"><img src="/assets/img/profile_pictures/{{$player->username}}.jpg" style="max-height: 30px; max-width: 30px"></th>
                <td><img src="/assets/img/nationalities/{{$player->nationality}}.jpg" style="max-height: 30px; max-width: 30px"></td>
                <td><a href="/players/{{ $player->username }}/">{{ $player->username }}</a></td>
                  <td>{{$player->overall}}</td>
                  <td><span class="badge badge-success">{{$player->position}}</span>&#160<span class="badge badge-success">{{$player->second_position}}</span>&#160<span class="badge badge-success">{{$player->third_position}}</span></td>
                  <td><img src="assets/img/teams/azathoth.png" style="max-height: 30px; max-width: 30px">
                  
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $players->links() }}
        </div>
    
      </div>
@endsection