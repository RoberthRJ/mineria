@extends('layouts.app')

@push('styles')

    <link href="{{asset('assets/css/offert-detail.css')}}" rel="stylesheet">

@endpush

@section('content')
<section id="images">
	<div class="container pb-2">
		<div class="row">

			<div class="col-sm-12 no-gutters d-flex company">
				<img src="assets/images/details/portada.jpg" alt="">
				<div class="company-desc pl-3">
					<h4>Los Naranjos SAC</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus pariatur, recusandae repellendus ea veniam possimus aliquid dolor, soluta iste repellat ex consectetur quidem voluptatibus rerum ad voluptates tenetur. Beatae, adipisci.</p>
					<p>reclutamiento@losnaranjos.com</p>
					<p>www.losnaranjos.com</p>
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
						<p><b>3 cargadores frontales</b></p>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-4">
						<img src="assets/images/users/user.png" alt="" class="float-right">
					</div>
				</div>

				<hr>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque eaque eos, aliquam, inventore suscipit. Non veniam ad unde nulla temporibus? Vitae quisquam maxime dignissimos adipisci repellat, rem commodi ea.</p>
				</div>

			</div>

			<div class="col-sm-5">
				<div class="contact fixed-top">
					<h3>Postula</h3>
					<form class="pb-4">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Teléfono</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Teléfono">
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFileLang" lang="es">
							<label class="custom-file-label" for="customFileLang">Adjuntar CV</label>
						</div>
						<br><br>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Postular</button>
						</div>
					</form>
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
			<div class="col-md-12 col-sm-12">
				<h4>Empleos relacionados</h4>
			</div>
			<div class="cards col-sm-12">


				@include('offert.related-card')
				

			</div>
		</div>
	</div>
</section>

<hr>

<section id="options">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4>Explora otras opciones en Perú</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
				<div class="col-sm-3 float-right link-parent">
					<a href="#">Lima</a>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	
</footer>

@push('scripts')

@endpush