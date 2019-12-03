@extends('layouts.app')

@push('styles')

    <link href="{{asset('assets/css/list-offert.css')}}" rel="stylesheet">

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
			<div class="pt-3 d-block">

				<div class="col-sm-12">
					<h3>250 servicios</h3>
				</div>

				<div class="pt-2 d-md-flex">

					<div class="filter col-md-3">
						<h4>Filtros</h4>
						<hr>
						<p><b>Departamento</b></p>
						@foreach(\App\Location::orderBy('department')->pluck('department', 'id') as $id => $department)
                            <a href="{{route('offert.location', str_slug($department, '-'))}}">{{$department}}</a><br>
                        @endforeach

						<p><b>Área</b></p>

						@foreach(\App\Category::orderBy('category')->pluck('category', 'id') as $id => $category)
                            <a href="#">{{$category}}</a><br>
                        @endforeach

					</div>

					<div class="d-block col-sm-9">


						<div class="cards">
							
							@foreach($offerts as $offert)

							@include('shared.list-card')

							@endforeach


						</div>

						<hr>

						{{ $offerts->links() }}

					</div>
				</div>
			</div>
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