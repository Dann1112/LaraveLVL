@extends('layouts.layout')

@section('content')

<!-- Filter Options-->
<div class="container-fluid py-3 col-sm-10 col-12 mx-auto" style="background-color: black">

        <div class="container d-flex justify-content-between p-3 mb-1">
          <select class="custom-select" id="inputGroupSelect01">
            <option value="01022018" selected>Temporada Enero/Marzo 2018</option>
          </select>
    </div>
    
        <!-- Table -->
        <div class="container-fluid">
          <table class="table table-striped table-dark table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Pos</th>
                <th scope="col">Equipo</th>
                <th scope="col">PJ</th>
                <th scope="col" class="d-none d-sm-table-cell">PG</th>
                <th scope="col" class="d-none d-sm-table-cell">PE</th>
                <th scope="col" class="d-none d-sm-table-cell">PP</th>
                <th scope="col">DG</th>
                <th scope="col" class="d-none d-sm-table-cell">GF</th>
                <th scope="col" class="d-none d-sm-table-cell">GC</th>
                <th scope="col">Pts</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-success">
                <th scope="row">1&nbsp<i class="fa fa-caret-up" style="color:green" aria-hidden="true"></i></th>
                <td><img src="assets/img/teams/azathoth.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Azathoth FC</span>
                  <span class="d-inline d-sm-none">AZT</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">2&nbsp-</th>
                <td><img src="assets/img/teams/dracosfc.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Dracos FC</span>
                  <span class="d-inline d-sm-none">DRC</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">3&nbsp-</th>
                <td><img src="assets/img/teams/fcveracruz.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160FC Veracruz</span>
                  <span class="d-inline d-sm-none">VER</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">4&nbsp-</th>
                <td><img src="assets/img/teams/fiferosunited.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Fiferos United</span>
                  <span class="d-inline d-sm-none">FIF</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">5&nbsp-</th>
                <td><img src="assets/img/teams/goldentigers.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Golden Tigers</span>
                  <span class="d-inline d-sm-none">GOL</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">6&nbsp-</th>
                <td><img src="assets/img/teams/lospibesfc.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Los Pibes FC</span>
                  <span class="d-inline d-sm-none">PIB</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">7&nbsp-</th>
                <td><img src="assets/img/teams/nemesisxi.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Nemesis XI</span>
                  <span class="d-inline d-sm-none">NEM</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">8&nbsp-</th>
                <td><img src="assets/img/teams/oncecaldos.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Once Caldos</span>
                  <span class="d-inline d-sm-none">OCA</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">9&nbsp-</th>
                <td><img src="assets/img/teams/redhuskysfc.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Red Huskys FC</span>
                  <span class="d-inline d-sm-none">RED</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">10&nbsp<i class="fa fa-caret-down" style="color:red" aria-hidden="true"></i></th>
                <td><img src="assets/img/teams/teamcr.png" style="max-height: 20px; max-width: 20px">
                  <span class="d-none d-sm-inline">&#160&#160Team CR</span>
                  <span class="d-inline d-sm-none">TCR</span></td>
                <td style="font-weight: bold">0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <th scope="col" class="d-none d-sm-table-cell">0</th>
                <td>0</td>
              </tr>
            </tbody>
          </table>
        </div>
    
        <p class="text-center" style="width: 100%; color: white">
        POS: Muestra la ubicación general del equipo en la tabla y su movimiento respecto a la jornada anterior<br>
        PJ: Partidos Jugados<br>
        PG: Partidos Ganados<br>
        PE: Partidos Empatados<br>
        PP: Partidos Perdidos<br>
        DG: Diferencia de Goles<br>
        GF: Goles a Favor<br>
        GC: Goles en Contra<br>
        Pts: Puntos acumulados hasta este momento
        </p>
    
      </div>

@endsection