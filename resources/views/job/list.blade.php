@extends('layouts.app')

@push('styles')

@endpush

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Los mejores empleos en minería"])

<!-- Top Job Area Start -->
<section class="jobguru-top-job-area browse-page section_70">
 <div class="container">
    <div class="row">

       @include('job.filter')

       <div class="col-md-12 col-lg-9">
          <div class="job-grid-right">
             <div class="browse-job-head-option">
                <div class="job-browse-search">
                   <form>
                      <input type="search" placeholder="Search Jobs Here...">
                      <button type="submit"><i class="fa fa-search"></i></button>
                   </form>
                </div>
                <div class="job-browse-action">
                   <div class="email-alerts">
                      <input type="checkbox" class="styled" id="b_1">
                      <label class="styled" for="b_1">email alerts for this search</label>
                   </div>
                   <div class="dropdown">
                      <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur" data-toggle="dropdown" aria-haspopup="true">Short By</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                         <li>Newest</li>
                         <li>Oldest</li>
                         <li>Random</li>
                      </ul>
                   </div>
                </div>
             </div>
             <!-- end job head -->
             <div class="job-sidebar-list-single">
                
				@include('job.list-card')

             </div>
             <!-- end job sidebar list -->
             <div class="pagination-box-row">
                <p>Page 1 of 6</p>
                <ul class="pagination">
                   <li class="active"><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li>...</li>
                   <li><a href="#">6</a></li>
                   <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
             </div>
             <!-- end pagination -->
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Top Job Area End -->

@endsection

@push('scripts')

@endpush