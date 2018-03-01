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
							<a class="nav-link current rounded" href="#">INICIO
								<span class="sr-only">(current)</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="#">CLASIFICACION</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">JUGADORES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">RANKING</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">CONTACTO</a>
						</li>
						<!-- Authentication Links -->
                        @guest
							<li class="d-flex d-md-none">
								<button class="btn btn-success"  href="{{ route('login') }}"  style="width:100%; font-weight: bold">
									<i class="fas fa-sign-in-alt mr-2"></i>INGRESAR</button>
								<button class="btn btn-primary"  href="{{ route('register') }}" style="width:100%; font-weight: bold">
									<i class="fas fa-edit mr-2"></i>REGISTRARSE</button>
							</li>
                        @else
                            
                        @endguest
						

					</ul>

				</div>

			</div>
		</nav>

	</div>

	<!-- Session Data (Login or User Info) -->
	<div class="col-0 col-md-2 p-0 d-none d-md-flex flex-column align-items-center justify-content-around">
		<button class="btn btn-success disabled">
			<i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesion</button>
		<button class="btn btn-primary disabled">
			<i class="fas fa-edit mr-2"></i>Registrarse</button>
	</div>

</header>