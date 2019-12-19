@extends('layouts.app')

@push('styles')

@endpush

@section('content')

<!-- Single Candidate Start -->
<section class="single-candidate-page section_70">
 <div class="container">
    <div class="row">
       <div class="col-md-9 col-lg-6">
          <div class="single-candidate-box">
             <div class="single-candidate-img">
                <img src="{{$job->company->user->pathAttachment()}}" alt="{{$job->company->title}}" />
             </div>
             <div class="single-candidate-box-right">
                <h4>{{$job->title}}</h4>
                <p>{{$job->company->title}}</p>
                <div class="job-details-meta">
                   <!-- <p><i class="fa fa-file-text"></i> Applications 1</p> -->
                   <p><i class="fa fa-calendar"></i> {{$job->created_at->format('d-m-Y')}}</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-3 col-lg-6">
          <div class="single-candidate-action">
             <a href="{{route('company.show', $job->company->slug)}}" class="candidate-contact" target="_BLANK"><i class="fa fa-star"></i>Ver perfil de la empresa</a>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Single Candidate End -->


<!-- Single Candidate Bottom Start -->
<section class="single-candidate-bottom-area section_70">
 <div class="container">
    <div class="row">
       <div class="col-md-8 col-lg-9">
          <div class="single-candidate-bottom-left">
             <div class="single-candidate-widget">
                <h3>Descripción de la oferta de empleo</h3>
                <p>{{$job->description}}</p>
             </div>
             <!-- <div class="single-candidate-widget clearfix">
                <h3>Comparte este post</h3>
                <ul class="share-job">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
             </div> -->
             <div class="single-candidate-widget">
                <h3>Ofertas similares</h3>
                
                @foreach($related as $related)
                @include('job.related-card')
                @endforeach
                
             </div>
          </div>
       </div>
       <div class="col-md-4 col-lg-3">
          <div class="single-candidate-bottom-right">
             @include('partials.job.apply_button')
             <div class="single-candidate-widget-2">
                <h3>Detalles del trabajo</h3>
                <ul class="job-overview">
                   <li>
                      <h4><i class="fa fa-briefcase"></i> Salario ofrecido</h4>
                      <p>S/{{round($job->min_salary, 0)}} - S/{{round($job->max_salary, 0)}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-map-marker"></i> Ubicación</h4>
                      <p>{{$job->province->province}}, {{$job->province->department->department}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-thumb-tack"></i> Tipo de trabajo</h4>
                      <p>{{$job->jobType->job_type}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-clock-o"></i> Fecha de publicación</h4>
                      <p>{{$job->created_at->format('d/m/Y')}}</p>
                   </li>
                </ul>
             </div>
             <div class="single-candidate-widget-2">
                <h3>Contacto rápido</h3>
                <form method="POST" action="{{route('job.fast_mail', $job->slug)}}">
                  @csrf
                   <p>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Nombre completo">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Correo electrónico">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Teléfono">
                      @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <textarea name="message" placeholder="Mensaje" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                      @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <div class="product-upload">
                       <p>
                          <i class="fa fa-upload"></i>
                          Adjunta tu CV (.pdf)
                       </p>
                       <input type="file" class="form-control @error('cv') is-invalid @enderror" name="cv">
                      @error('cv')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                   </p>
                   <p>
                      <button type="submit">Enviar mensaje</button>
                   </p>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Single Candidate Bottom End -->

@endsection

@push('scripts')

@endpush