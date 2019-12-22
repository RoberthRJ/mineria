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
                     <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                     @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
                  <div class="single-input">
                     <label for="expiration_date">Fecha de expiración</label>
                     <input type="date" id="expiration_date" class="form-control @error('expiration_date') is-invalid @enderror" name="expiration_date" value="{{old('expiration_date') ?: Carbon\Carbon::now()->format('Y-m-d')}}">
                     @error('expiration_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="category_id">Categoría:</label>
                     <select id="category_id" name="category_id">
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
                     <select id="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id">
                        <option value="">Subcategoría</option>
                        @if(old('category_id'))
                        @foreach(\App\Subcategory::whereCategoryId(old('category_id'))->orderBy('subcategory')->pluck('subcategory', 'id') as $id => $subcategory)
                             <option {{ (int) old('subcategory_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $subcategory }}
                             </option>
                        @endforeach
                        @endif
                     </select>
                     @error('subcategory_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="department_id">Departamento</label>
                     <select id="department_id" name="department_id">
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
                     <select id="province_id" name="province_id" class="form-control @error('province_id') is-invalid @enderror">
                        <option value=''>Provincia</option>
                        @if(old('department_id'))
                        @foreach(\App\Province::whereDepartmentId(old('department_id'))->pluck('province', 'id') as $id => $province)
                             <option {{(int) old('province_id') === $id ? 'selected' : ''}} value="{{$id}}">
                                 {{$province}}
                             </option>
                        @endforeach
                        @endif
                     </select>
                     @error('province_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="job_type_id">Tipo de trabajo</label>
                     <select id="job_type_id" name="job_type_id" class="form-control @error('job_type_id') is-invalid @enderror">
                        <option value="">Tipo</option>
                        @foreach(\App\JobType::pluck('job_type', 'id') as $id => $job_type)
                             <option {{ (int) old('job_type_id') === $id ? 'selected' : '' }} value="{{ $id }}">
                                 {{ $job_type }}
                             </option>
                         @endforeach
                     </select>
                      @error('job_type_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
                  <div class="single-input">
                     <label for="external_link">Aplicación externa <span>(optional)</span></label>
                     <input type="text" id="external_link" name="external_link">
                  </div>
               </div>
               <div class="single-resume-feild feild-flex-2">
                  <div class="single-input">
                     <label for="min_salary">Salario minimo (S/):</label>
                     <input type="text" id="min_salary" name="min_salary" class="form-control @error('min_salary') is-invalid @enderror">
                     @error('min_salary')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
                  <div class="single-input">
                     <label for="max_salary">Salario máximo (S/):</label>
                     <input type="text" id="max_salary" name="max_salary" class="form-control @error('max_salary') is-invalid @enderror">
                     @error('max_salary')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>
               </div>
               <div class="single-resume-feild">
                  <div class="single-input">
                     <label for="description">Descripción del trabajo:</label>
                     <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                     @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
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
