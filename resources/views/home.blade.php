@extends('layouts.home-app')

@push('styles')

@endpush

@section('content')

<!--Home Video Start-->
<section class="home-video-banner parallax" data-src="assets/img/slider-1.jpeg" data-jarallax-video="https://www.youtube.com/watch?v=dk9uNWPP7EA&list=PL7cdQfbJcOxP_Ii2ifE-8NXj_qP1Mzb7a',containment:'#welcome-video', showControls:false, autoPlay:true, mute:true, loop:true, startAt:0, quality:'default', opacity:1,}">
   <div class="banner-area">
      <div class="banner-caption container">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 content-home">
                  <div class="banner-welcome">
                     <h4>Over <span>100,000+</span> jobs are waiting for you</h4>
                     <form>
                        <div class="video-banner-input">
                           <input type="text" placeholder="Job Title, Keywords, or Phrase">
                        </div>
                        <div class="video-banner-input">
                           <input type="text" placeholder="City, State or ZIP">
                        </div>
                        <div class="video-banner-input">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                     </form>
                     <div class="top-search-cat">
                        <p>Top Search :</p>
                        <a href="#">Design</a>
                        <a href="#">Analysis</a>
                        <a href="#">training</a>
                        <a href="#">Music</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Home Video End-->

<!-- Categories Area Start -->
<section class="jobguru-categories-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>top Trending <span>Categories</span></h2>
               <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p>
            </div>
         </div>
      </div>
      <div class="row">

        @php

        for($i=0; $i < 4 ; $i++) { 
            echo '<div class="col-lg-3 col-md-6 col-sm-6">
              <a href="#" class="single-category-holder account_cat">
                 <div class="category-holder-icon">
                    <i class="fa '.$categories[$i]->icon.'"></i>
                 </div>
                 <div class="category-holder-text">
                    <h3>'.$categories[$i]->category.'</h3>
                 </div>
                 <img src="assets/img/account_cat.jpg" alt="category" />
              </a>
           </div>';
        };

        @endphp

      </div>
      <div class="row">
        @php

        for($i=4; $i < 8 ; $i++) { 
            echo '<div class="col-lg-3 col-md-6 col-sm-6">
              <a href="#" class="single-category-holder account_cat">
                 <div class="category-holder-icon">
                    <i class="fa '.$categories[$i]->icon.'"></i>
                 </div>
                 <div class="category-holder-text">
                    <h3>'.$categories[$i]->category.'</h3>
                 </div>
                 <img src="assets/img/account_cat.jpg" alt="category" />
              </a>
           </div>';
        };

        @endphp
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="#" class="jobguru-btn">browse all categories</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Categories Area End -->
 
 
<!-- Inner Hire Area Start -->
<section class="jobguru-inner-hire-area section_100">
   <div class="hire_circle"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="inner-hire-left">
               <h3>Hire an employee</h3>
               <p>placerat congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandit nunc.congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandi </p>
               <a href="#" class="jobguru-btn-3">sign up as company</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Inner Hire Area End -->
 
 
<!-- Job Tab Area Start -->
<section class="jobguru-job-tab-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>Companies & <span>job offers</span></h2>
               <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class=" job-tab">
               <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Empresas</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">Ofertas nuevas</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                  <div class="top-company-tab">
                     <ul>

                        @foreach($companies as $company)

                          @include('home.top-company-card')
                          
                        @endforeach
                        
                     </ul>
                  </div>
               </div>
               <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <div class="top-company-tab">
                     <ul>

                        @foreach($jobs as $job)

                          @include('home.job-card')

                        @endforeach

                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="#" class="jobguru-btn">browse more listing</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Job Tab Area End -->
 
 
<!-- Video Area Start -->
<section class="jobguru-video-area section_100">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="video-container">
               <h2>Hire experts freelancers today for <br> any job, any time.</h2>
               <div class="video-btn">
                  <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-R6AFn9-ek">
                  <i class="fa fa-play"></i>
                  how it works
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Video Area End -->
 
 
<!-- How Works Area Start -->
<section class="how-works-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>how it <span>works</span></h2>
               <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="how-works-box box-1">
               <img src="assets/img/arrow-right-top.png" alt="works" />
               <div class="works-box-icon">
                  <i class="fa fa-user"></i>
               </div>
               <div class="works-box-text">
                  <p>sign up</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="how-works-box box-2">
               <img src="assets/img/arrow-right-bottom.png" alt="works" />
               <div class="works-box-icon">
                  <i class="fa fa-gavel"></i>
               </div>
               <div class="works-box-text">
                  <p>post job</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="how-works-box box-3">
               <div class="works-box-icon">
                  <i class="fa fa-thumbs-up"></i>
               </div>
               <div class="works-box-text">
                  <p>choose expert</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- How Works Area End -->
       


@endsection


@push('scripts')

@endpush
