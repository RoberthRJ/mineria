<div class="dashboard-right">
   <div class="earnings-page-box manage-jobs">
      <div class="manage-jobs-heading">
         <h3>Publica una nueva oferta de empleo</h3>
      </div>
      <div class="new-job-submission">
         <form method="POST" action="{{route('company.job.store')}}">
            @csrf
            <div class="resume-box">
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="title">Título del empleo</label>
                     <input type="text" id="title" name="title" value="{{old('title')}}">
                  </div>
                  <div class="single-input">
                     <label for="title">Fecha de expiración</label>
                     <input type="date" id="expiration_date" name="expiration_date" value="{{old('expiration_date')}}">
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="category_id">Categoría:</label>
                     <select id="category_id">
                        <option value="">Categoría</option>
                        @foreach(\App\Category::orderBy('category')->pluck('category', 'id') as $id => $category)
                             <option {{ (int) old('category_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $category }}
                             </option>
                         @endforeach
                     </select>
                  </div>
                  <div class="single-input">
                     <label for="subcategory_id">Subcategoría:</label>
                     <select id="subcategory_id" name="subcategory_id">
                        <option value="">Subcategoría</option>
                        @foreach(\App\Subcategory::orderBy('subcategory')->pluck('subcategory', 'id') as $id => $subcategory)
                             <option {{ (int) old('subcategory_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $subcategory }}
                             </option>
                         @endforeach
                     </select>
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="department_id">Departamento</label>
                     <select id="department_id">
                        <option value=''>Departamento</option>
                        @foreach(\App\Department::orderBy('department')->pluck('department', 'id') as $id => $department)
                             <option {{ (int) old('department_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $department }}
                             </option>
                         @endforeach
                     </select>
                  </div>
                  <div class="single-input">
                     <label for="province_id">Provincia</label>
                     <select id="province_id" name="province_id">
                        <option value=''>Provincia</option>
                        @foreach(\App\Province::pluck('province', 'id') as $id => $province)
                             <option {{ (int) old('province_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $province }}
                             </option>
                         @endforeach
                     </select>
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="job_type_id">Tipo de trabajo</label>
                     <select id="job_type_id" name="job_type_id">
                        <option value="">Tipo</option>
                        @foreach(\App\JobType::pluck('job_type', 'id') as $id => $job_type)
                             <option {{ (int) old('job_type_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $job_type }}
                             </option>
                         @endforeach
                     </select>
                  </div>
                  <div class="single-input">
                     <label for="external_link">Aplicación externa <span>(optional)</span></label>
                     <input type="text" id="external_link" name="external_link">
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="min_salary">Salario minimo (S/):</label>
                     <input type="text" id="min_salary" name="min_salary">
                  </div>
                  <div class="single-input">
                     <label for="max_salary">Salario máximo (S/):</label>
                     <input type="text" id="max_salary" name="max_salary">
                  </div>
               </div>
               <div class="single-resume-feild">
                  <div class="single-input">
                     <label for="description">Descripción del trabajo:</label>
                     <textarea id="description" name="description"></textarea>
                  </div>
               </div>
            </div>
            <div class="single-input submit-resume">
               <button type="submit">Postear empleo</button>
            </div>
         </form>
      </div>
   </div>
</div>
