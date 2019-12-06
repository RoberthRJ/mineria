<div class="col-md-12 col-lg-3 dashboard-left-border">
   <div class="dashboard-left">
      <ul class="dashboard-menu">
         <li>
            <a href="employer-dashboard.html">
            <i class="fa fa-tachometer"></i>
            Dashboard
            </a>
         </li>
         <li class="active"><a href="company-profile.html"><i class="fa fa-users"></i>Company Profile</a></li>
         <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li>
         <li><a href="post-job.html"><i class="fa fa-envelope-open"></i>post a job</a></li>
         <li><a href="manage-candidates.html"><i class="fa fa-briefcase"></i>manage candidates</a></li>
         <li><a href="transaction.html"><i class="fa fa-rocket"></i>transaction</a></li>
         @include('partials.dashboard.password')
         @include('partials.dashboard.logout')
      </ul>
   </div>
</div>