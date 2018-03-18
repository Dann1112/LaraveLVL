@extends('layouts.layout')

@section('content')

<div class="container-fluid" style="background: linear-gradient(to bottom, skyblue, black);">
    <div class="container py-5 d-flex align-items-center justify-content-center">
        <img class="mr-5" style="height:auto; width:auto; max-height:200px; max-width:200px" src="/assets/img/logos/logo.png"  alt="TeamName">
        <div class="text-center">
            <h1 class="display-3">Wolfgang United</h1>
            <ul class="inline-list mx-auto p-0" style="font-size:4em; color:white">
                <li class="list-inline-item"><i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i></li>
                <li class="list-inline-item"><i class="fab fa-twitter" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></li>
                <li class="list-inline-item"><i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></li>
                <li class="list-inline-item"><i class="fab fa-twitch" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></li>
                <li class="list-inline-item"><i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:black">
    <div class="container">
        <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">DATOS GENERALES</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="plantilla-tab" data-toggle="tab" href="#plantilla" role="tab" aria-controls="general" aria-selected="true">PLANTILLA</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="temporada-tab" data-toggle="tab" href="#temporada" role="tab" aria-controls="general" aria-selected="true">TEMPORADA ACTUAL</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="estadisticas-tab" data-toggle="tab" href="#estadisticas" role="tab" aria-controls="general" aria-selected="true">ESTADISTICAS</a>
                </li>
              </ul>
            

            <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <section>
                            <div class="container">
                                <!-- Banners jogos e grafico de forma clube -->
                                <div class="row justify-content-around my-3" style="max-height:180px">
                        
                                    <!-- Último jogo -->
                                    
                                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>Ultimo Juego</h4>        

                                            <div class="d-flex mb-3">
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                </div>

                                                <div class="text-center mx-3">
                                                    <span style="font-size: 2em; color:white">2 : 0</span><br>
                                                    <span >17/Marzo</span><br>
                                                    <span >20:30hrs</span>
                                                </div>
                            
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                </div>
                                            </div>


                                    </div>
                        
                                    <!-- Próximo jogo -->
                                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>Proximo Juego</h4>        
                                            


                                            <div class="d-flex mb-3">
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                </div>

                                                <div class="text-center mx-3">
                                                    <span style="font-size: 2em; color:white">VS</span><br>
                                                    <span >17/Marzo</span><br>
                                                    <span >20:30hrs</span>
                                                </div>
                            
                                                <div class="text-center">
                                                    <img style="height:auto; width:auto; max-height:50px; max-width:50px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                </div>
                                            </div>


                                    </div>
                        
                                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-between border rounded py-3">
                                        <h4>Forma</h4>        
                                            


                                            <div class="d-flex mb-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <div class="d-flex flex-column">
                                                            <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: greenyellow; height:40px; width:40px">
                                                                <span style="color:black; font-weight: bold">3:1</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                            <div class="d-flex flex-column">
                                                                <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                                <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: greenyellow; height:40px; width:40px">
                                                                    <span style="color:black; font-weight: bold">3:1</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-inline-item">
                                                                <div class="d-flex flex-column">
                                                                    <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: orange; height:40px; width:40px">
                                                                        <span style="color:black; font-weight: bold">1:1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                    <div class="d-flex flex-column">
                                                                        <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                                        <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: red; height:40px; width:40px">
                                                                            <span style="color:black; font-weight: bold">0:1</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                        <div class="d-flex flex-column">
                                                                            <img class="mb-1" style="height:auto; width:auto; max-height:40px; max-width:40px" src="/assets/img/logos/logo.png"  alt="TeamName">
                                                                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="background-color: greenyellow; height:40px; width:40px">
                                                                                <span style="color:black; font-weight: bold">3:1</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                </ul>
                                            </div>


                                    </div>
                        
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="plantilla" role="tabpanel" aria-labelledby="plantilla-tab">Plantilla</div>
                    <div class="tab-pane fade" id="temporada" role="tabpanel" aria-labelledby="temporada-tab">Temporada</div>
                    <div class="tab-pane fade" id="estadisticas" role="tabpanel" aria-labelledby="estadisticas-tab">Estadisticas</div>
                  </div>
                </div>
</div>

@endsection