<nav class="navbar navbar-expand-lg">
	<a class="navbar-brand" href="{{route('home.index')}}">
		<img src="{{asset('assets/images/agenda-minera-logo.svg')}}" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Encuentra servicios</a>
			</li> -->
			<li class="nav-item dropdown">
				<a class="nav-link" href="#">Oferta tus servicios</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Bolsa de trabajo
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('offert.index')}}">Postulante</a>
					<!-- <a class="dropdown-item" href="#">Postulante</a> -->
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Empresa</a>
				</div>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Ayuda</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="#">Ingresa</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-register" href="#">Registrate</a>
			</li>
		</ul>
	</div>
</nav>