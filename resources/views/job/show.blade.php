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
                <img src="{{$job->company->user->pathAttachment()}}" alt="single candidate" />
             </div>
             <div class="single-candidate-box-right">
                <h4>{{$job->title}}</h4>
                <p>{{$job->company->title}}</p>
                <div class="job-details-meta">
                   <p><i class="fa fa-file-text"></i> Applications 1</p>
                   <p><i class="fa fa-calendar"></i> July 29, 2017</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-3 col-lg-6">
          <div class="single-candidate-action">
             <a href="#" class="candidate-contact"><i class="fa fa-star"></i>Bookmarks</a>
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
                <p>Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante.Ut sodales arcu sagittis metus molestie molestie. Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, </p>
                <p>faucibus in malesuada a, dignissim at odio. Aenean eleifend urna.Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio.</p>
                <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien</p>
                <p>Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante.Ut sodales arcu sagittis metus molestie molestie. Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, </p>
                <p>faucibus in malesuada a, dignissim at odio. Aenean eleifend urna.Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio.</p>
             </div>
             <div class="single-candidate-widget job-required">
                <h3>Aptitudes y habilidades requeridas</h3>
                <ul class="company-desc-list">
                   <li><i class="fa fa-check"></i> Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                   <li><i class="fa fa-check"></i>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
                   <li><i class="fa fa-check"></i>Cross-browser and platform testing as standard practice</li>
                   <li><i class="fa fa-check"></i>Experience using Invision a plus</li>
                   <li><i class="fa fa-check"></i>Experience in video production a plus or, at a minimum, a willingness to learn</li>
                </ul>
             </div>
             <div class="single-candidate-widget clearfix">
                <h3>Retos y beneficios</h3>
                <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.</p>
                <p>Donec accumsan auctor iaculis. Nullam non tortor massa. Proin ligula leo, hendrerit quis tincidunt a, sodales eget ligula. Aenean et est tristique, dictum lorem vel, porttitor urna.</p>
                <p>Suspendisse gravida elementum lacus, a malesuada tortor sollicitudin ut. Donec pharetra metus lectus, ut eleifend eros sollicitudin et. Ut at lobortis dolor, eget commodo tortor. Curabitur bibendum consequat neque a tincidunt. In in euismod quam. Proin in egestas eros. Cum sociis </p>
             </div>
             <div class="single-candidate-widget clearfix">
                <h3>Comparte este post</h3>
                <ul class="share-job">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
             </div>
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
             <div class="single-candidate-widget-2">
                <a href="{{route('candidate.apply', $job->slug)}}" class="jobguru-btn-2">
                <i class="fa fa-paper-plane-o"></i>
                Aplicar ahora
                </a>
             </div>
             <div class="single-candidate-widget-2">
                <h3>Detalles del trabajo</h3>
                <ul class="job-overview">
                   <li>
                      <h4><i class="fa fa-briefcase"></i> Salario ofrecido</h4>
                      <p>S/{{$related->min_salary}} - S/{{$related->max_salary}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-map-marker"></i> Ubicación</h4>
                      <p>{{$related->province->province}}, {{$related->province->department->department}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-thumb-tack"></i> Tipo de trabajo</h4>
                      <p>{{$related->jobType->job_type}}</p>
                   </li>
                   <li>
                      <h4><i class="fa fa-clock-o"></i> Fecha de publicación</h4>
                      <p>2 days ago</p>
                   </li>
                </ul>
             </div>
             <div class="single-candidate-widget-2">
                <h3>Contacto rápido</h3>
                <form method="POST" route="" novalidate>
                   <p>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre completo">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                   </p>
                   <p>
                      <textarea name="message" placeholder="Mensaje" class="form-control">{{ old('message') }}</textarea>
                   </p>
                   <p>
                      <div class="product-upload">
                         <p>
                            <i class="fa fa-upload"></i>
                            Adjunta tu CV
                         </p>
                         <input type="file" id="w_screen">
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