<div class="col-lg-9 col-md-12">
   <div class="dashboard-right">
      <div class="manage-jobs">
         <div class="manage-jobs-heading">
            <h3>My Job Listing</h3>
         </div>
         <div class="single-manage-jobs table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th>Titulo</th>
                     <th>Publicado </th>
                     <th>Expira </th>
                     <th>Estado</th>
                     <th>Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($jobs as $job)
                  <tr>
                     <td class="manage-jobs-title"><a href="#">{{$job->title}}</a></td>
                     <td class="table-date">{{$job->created_at->format('d/m/Y')}}</td>
                     <td class="table-date">{{$job->expiration_date}}</td>
                     <td><span class="pending">{{$job->status()}}</span></td>
                     <td class="action">
                        <a href="{{route('company.dashboard.candidates', $job->slug)}}" class="action-edit" title="Ver postulantes"><i class="fa fa-users"></i></a>
                        <a href="#" class="action-edit" title="Editar"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#" class="action-delete" title="Eliminar"><i class="fa fa-trash-o"></i></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$jobs->links()}}
         </div>
      </div>
   </div>
</div>
