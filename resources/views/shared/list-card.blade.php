<div class="main-card d-flex no-gutters" route="{{route('offert.show', $offert->slug)}}">
	<div class="col-md-3">
		<div class="img-card text-center">
			<span>Hace 2 días</span><br>
			<img src="{{$offert->company->user->pathAttachment()}}" style="max-height: 80px;">
		</div>
	</div>
	<div class="col-md-9 pl-1">
		<div class="title-card text-primary">
			<span>{{str_limit($offert->title, 40)}}</span> 
		</div>
		<div class="text-card">
			<p><b>{{$offert->company->title}}</b></p>
		</div>
		<div class="desc-card">
			<p>{{str_limit($offert->description, 199)}}</p>
		</div>
	</div>
</div>