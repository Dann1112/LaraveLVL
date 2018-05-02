<header class="fixed-top container-fluid d-flex p-0">

	<!-- Top Nav bar -->
	<div class="col-12 col-md-10 p-0 d-flex justify-content-around" style="height:100%">

		<nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-center p-0 m-0" style="height:100%">
			<img class="mr-5" src="/assets/img/logos/1x3_white.png" style="height:90%; width:50%; min-width:200px; max-width:350px; max-height:100px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div>
					<!-- Teams List-->
					<div class="d-none d-md-flex m-0 p-0 justify-content-center" style="height: 50%">

						<!-- CURRENT LEAGUE TEAMS BADGES-->
						<ul class="list-inline d-none d-sm-flex justify-content-around align-items-center" style="height: 100%">
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/azathoth.png" alt="azathoth">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/chmasters.png" alt="chmasters"> </a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/dracosfc.png" alt="dracosfc">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/fcveracruz.png" alt="4" </a> </li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/fiferosunited.png" alt="5">
								</a>
							</li>

							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/goldentigers.png" alt="6">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/nemesisxi.png" alt="7">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/redhuskysfc.png" alt="8">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/teamcr.png" alt="9">
								</a>
							</li>
							<li class="list-inline-item mr-lg-2 mr-0">
								<a href="#">
									<img class="team-badge" src="/assets/img/teams/unionmagdalena.png" alt="10">
								</a>
							</li>
							<br>
						</ul>
					</div>

					<ul class="navbar-nav nav-fill nav-pills px-0 py-2 m-0 mob-background">
						<li class="nav-item">
							<a class="nav-link current rounded" href="{{route('home')}}">@lang('header.home')
								<span class="sr-only">(current)</span>
							</a>
						</li>

						<li class="nav-item">
						<a class="nav-link " href="{{route('standings')}}">@lang('header.standings')</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{route('players')}}">@lang('header.players')</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{route('home')}}">@lang('header.ranking')</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{route('home')}}">@lang('header.contact')</a>
						</li>
						<!-- Authentication Links -->
						@guest
							<li class="d-flex d-md-none">
								<a href="{{route('login')}}" class="btn btn-success" style="width:100% font-weight:bold"><i class="fas fa-sign-in-alt mr-2"></i>INGRESAR</a>
								<a href="{{route('register')}}" class="btn btn-success" style="width:100% font-weight:bold"><i class="fas fa-sign-in-alt mr-2"></i>REGISTRARSE</a>
							</li>
                        @else
                            
                        @endguest
						

					</ul>

				</div>

			</div>
		</nav>

	</div>

	<!-- Session Data (Login or User Info) -->
	@if(Auth::check())
	<div class="d-flex col-2 text-center">
			<div class="my-auto">
								<div class="d-flex">
									<div class="btn-group mx-auto">
									<a href="\players\{{auth()->user()->username}}" > <button type="button" class="btn btn-outline-light">
										<img class="rounded-circle" src="/storage/{{auth()->user()->profile_picture}}" style="max-height: 50px"></button></a>
											<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="{{route('edit_profile')}}"><i class="fas fa-user mr-2"></i>Mi Perfil</a>
												<a class="dropdown-item" href="{{route('inbox')}}"><i class="fas fa-envelope mr-2"></i>Mis Mensajes</a>
												<a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Mis Contratos</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item bg-danger" href="{{route('logout')}}" style="color:white"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión</a>
											</div>
										</div>
									</div>
								<span style="color:white; font-weight: bold">{{Auth::user()->username}}</span><br>
								</div>
							</div>
						</div>

	@else
	<div class="col-0 col-md-2 p-0 d-none d-md-flex flex-column align-items-center justify-content-around">
			<a href="{{route('login')}}" class="btn btn-success" style="width:100%M font-weight:bold"><i class="fas fa-sign-in-alt mr-2"></i>INGRESAR</a>
			<a href="{{route('register')}}" class="btn btn-info" style="width:100%M font-weight:bold"><i class="fas fa-sign-in-alt mr-2"></i>REGISTRARSE</a>
	</div>
	@endif

</header>