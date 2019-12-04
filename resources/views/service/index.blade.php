@extends('layouts.app')

@push('styles')

    <link href="{{asset('assets/css/service.index.css')}}" rel="stylesheet">

@endpush

@section('content')

<section id="list">
	<div class="container">
		<div class="row">
			<div class="list-title col-sm-12">
				<p>
					<i class="fa fa-list"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deleniti veritatis recusandae, quas aliquid, distinctio soluta corporis quo expedita sapiente laboriosam. Ad deleniti maxime asperiores architecto, ipsum itaque nisi hic.
				</p>
			</div>
			<div class="pt-3 col-sm-12 d-sm-block">
				<div>
					<h3>20 servicios</h3>
				</div>

				<div class="pt-2">

					@foreach($services as $service)

					@include('service.card')

					@endforeach

				</div>		
			</div>

			<div>
				{{$services->links()}}
			</div>
				
		</div>
	</div>
</section>

@endsection

@push('scripts')

@endpush