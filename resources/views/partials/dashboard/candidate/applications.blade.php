<div class="col-lg-9 col-md-12">
   <div class="dashboard-right">
      <div class="manage-jobs">
         <div class="manage-jobs-heading">
            <h3>Mis aplicaciones</h3>
         </div>
         <div class="single-manage-jobs table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th>Titulo</th>
                     <th>Fecha de posteo </th>
                     <th>Fecha de expiracion </th>
                     <th>Estado</th>
                     <th>Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse($applications as $application)
                  <tr>
                     <td class="manage-jobs-title"><a href="{{route('job.show',$application->slug)}}">{{$application->title}}</a></td>
                     <td class="table-date">{{$application->created_at->format('d-m-Y')}}</td>
                     <td class="table-date">{{--$application->expiration_date->format('d-m-Y')--}}</td>
                     <td><span class="pending">Pending Approval</span></td>
                     <td class="action">
                        <a href="#" class="action-edit"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                     </td>
                  </tr>
                  @empty
                  <tr>
                     <td class="table-date">No tienes postulaciones</td>
                  </tr>
                  @endforelse
               </tbody>
            </table>
            <div class="pagination-box-row">
               {{$applications->links()}}
            </div>
         </div>
      </div>
   </div>
</div>
