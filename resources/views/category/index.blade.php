@extends('layouts.app')

@push('styles')

@endpush

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Busca por categorías"])

<!-- Categories Area Start -->
<section class="jobguru-categories-area browse-category-page section_70">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="browse-job-head-option">
             <div class="job-browse-search">
                <form>
                   <input type="search" placeholder="Busca trabajo...">
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
          <div class="all-sub-category clearfix">
             
			@foreach($categories as $category)
             <div class="search-category-box">
                <h3>{{$category->category}}</h3>
                <ul class="list_category">
                	@foreach($category->subcategories as $subcategory)
                   <li class="in checkbox">
                      <input class="checkbox-spin" type="checkbox" id="cat_{{$subcategory->id}}">
                      <label for="cat_{{$subcategory->id}}"><span></span>{{$subcategory->subcategory}}</label>
                   </li>
                   @endforeach
                </ul>
             </div>
			@endforeach

          </div>
       </div>
    </div>
 </div>
</section>
<!-- Categories Area End -->

@endsection

@push('scripts')

@endpush
