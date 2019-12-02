<div class="main-card d-flex no-gutters" route="{{route('offert.show', $offert->slug)}}">
	<div class="col-md-3">
		<div class="img-card text-center">
			<span>Hace 2 días</span><br>
			<img src="assets/images/card/cards.jpg" alt="...">
		</div>
	</div>
	<div class="col-md-9 pl-1">
		<div class="title-card text-primary">
			<span>{{str_limit($offert->title, 40)}}</span> 
		</div>
		<div class="text-card">
			<p>Empresa minera Cajatambo SAC</p>
		</div>
		<div class="desc-card">
			<p>{{str_limit($offert->description, 199)}}</p>
		</div>
	</div>
</div>