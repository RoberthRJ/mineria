@extends('layouts.app')

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Dashboard"])
<!-- Candidate Dashboard Area Start -->
<section class="candidate-dashboard-area section_70">
 <div class="container">
    <div class="row">

      @include('partials.dashboard.'.\App\User::navigation().'.sidebar')
       
      @include('partials.dashboard.'.\App\User::navigation().'.'.$word)
      
    </div>
 </div>
</section>
<!-- Candidate Dashboard Area End -->

@endsection