<div class="main-card col-md-4 float-right d-flex mb-3" route="{{route('offert.show', $related->slug)}}">
	<img src="{{$related->company->user->pathAttachment()}}" class="card-img-top" alt="...">
	<div class="pl-2">
		<h6>{{$related->title}}</h6>
		<span>{{$related->company->title}}</span><span>{{$related->location->department}}</span>
	</div>
</div>