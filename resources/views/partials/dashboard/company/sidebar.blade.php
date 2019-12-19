<div class="col-md-12 col-lg-3 dashboard-left-border">
   <div class="dashboard-left">
      <ul class="dashboard-menu">
         <li class="{{ $word == 'dashboard' ? 'active' : '' }}">
            <a href="{{route('dashboard.index')}}">
               <i class="fa fa-tachometer"></i>Dashboard
            </a>
         </li>
         <li class="{{ $word == 'profile' ? 'active' : '' }}">
            <a href="{{route('dashboard.index', 'profile')}}">
               <i class="fa fa-users"></i>Perfil de empresa
            </a>
         </li>
         <li class="{{ $word == 'post' ? 'active' : '' }}">
            <a href="{{route('company.dashboard.index', 'post')}}">
               <i class="fa fa-envelope-open"></i>Publica un empleo
            </a>
         </li>
         <li class="{{ $word == 'manage' ? 'active' : '' }}">
            <a href="{{route('company.dashboard.index', 'manage')}}">
               <i class="fa fa-envelope-open"></i>Gestiona los empleos
            </a>
         </li>
         <li class="{{ $word == 'candidates' ? 'active' : '' }}">
            <a href="{{route('company.dashboard.index', 'candidates')}}">
               <i class="fa fa-briefcase"></i>Revisa los candidatos
            </a>
         </li>
         @include('partials.dashboard.password')
         @include('partials.dashboard.logout')
      </ul>
   </div>
</div>