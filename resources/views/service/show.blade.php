@extends('layouts.app')

@push('styles')

    <link href="{{asset('assets/css/service.show.css')}}" rel="stylesheet">

@endpush

@section('content')

<section id="images">
	<div class="container pb-5">
		<div class="row">

			<div class="col-sm-12">
				<h1>Maquinaria pesada Tractor</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicin.</p>
			</div>

			<div class="col-sm-12 no-gutters d-flex">
				<div class="col-sm-6 max">
					<img src="{{$service->pathAttachment()}}" alt="" class="img-fluid">
				</div>

				<div class="col-sm-6 min">
					<div class="float-right">
						<img src="assets/images/details/portada-1.jpg" alt="" >
					</div>
					<div class="float-right">
						<img src="assets/images/details/portada-2.jpg" alt="" >
					</div>
					<div class="float-right">
						<img src="assets/images/details/portada-3.jpg" alt="" >
					</div>
					<div class="float-right">
						<img src="assets/images/details/portada-4.jpg" alt="" >
					</div>
				</div>
			</div>	
			
		</div>
	</div>
</section>

<hr>

<section id="details">
	<div class="container pt-3">
		<div class="row">
			<div class="col-sm-7">
				<div class="header d-flex">
					<div class="col-8 d-block" style="padding: 0px;">
						<p><b>{{$service->title}}</b></p>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-4">
						<img src="assets/images/users/user.png" alt="" class="float-right">
					</div>
				</div>

				<hr>

				<div>
					{{$service->description}}
				</div>

			</div>

			<div class="col-sm-5">
				<div class="contact fixed-top">
					<span>S/160 / hora</span>
					<a href="tel:{{$service->company->user->phone}}" target="_BLANK" class="btn btn-block btn-primary">Contactar</a>
				</div>
			</div>

			<div class="col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20238.004854198756!2d-77.04480455329994!3d-12.084132863348378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79d65e7645c13e87!2sDeco...Stylos!5e0!3m2!1ses!2spe!4v1575053547734!5m2!1ses!2spe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</section>

<section id="related">
	<div class="container pt-5">
		<div class="row">

			@foreach($related as $service)

			@include('service.card', $service)

			@endforeach

		</div>
	</div>
</section>

@endsection

@push('scripts')

<script>
    jQuery(document).ready(function() {
        $(".main-card").on("click", function(){
            var url = $(this).attr("route");
            window.open(url);
        })
    })
</script>

@endpush