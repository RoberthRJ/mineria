<div class="col-lg-9 col-md-12">
   <div class="dashboard-right">
      <div class="candidate-profile">
         <div class="candidate-single-profile-info">
            <div class="single-resume-feild resume-avatar">
               <div class="resume-image">
                  <img src="{{auth()->user()->pathAttachment()}}" alt="{{auth()->user()->candidate->name}}">
                  <div class="resume-avatar-hover">
                     <div class="resume-avatar-upload">
                        <p>
                           <i class="fa fa-pencil"></i>
                           Editar
                        </p>
                        <input type="file" name="picture">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="candidate-single-profile-info">
            <form method="POST" novalidate>
               <div class="resume-box">
                  <h3>Mi perfil</h3>
                  <div class="single-resume-feild feild-flex-2">
                     <div class="single-input">
                        <label for="name">Nombre</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?: auth()->user()->candidate->name }}" required autocomplete="false">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                     <div class="single-input">
                        <label for="last_name">Apellido</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?: auth()->user()->candidate->last_name }}" required autocomplete="false">
                         @error('last_name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                  </div>
                  <div class="single-resume-feild feild-flex-2">
                     <div class="single-input">
                        <label for="title">Titulo profesional</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') ?: auth()->user()->candidate->title }}" required autocomplete="false">
                         @error('title')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                     <div class="single-input single-job-sidebar sidebar-keywords">
                        <label for="title">Idiomas</label>
                        <select class="sidebar-category-select" name="states[]" multiple="multiple">
                           <option value="1">Español</option>
                           <option value="2">Inglés</option>
                           <option value="3">Francés</option>
                        </select>
                     </div>
                  </div>
                  <div class="single-resume-feild ">
                     <div class="single-input">
                        <label for="biography">Biografía</label>
                        <textarea id="biography" class="form-control">{{ old('biography') }}</textarea>
                     </div>
                  </div>
               </div>
               <div class="resume-box">
                  <h3>Información de contacto</h3>
                  <div class="single-resume-feild feild-flex-2">
                     <div class="single-input">
                        <label for="phone">Teléfono</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" phone="phone" value="{{ old('phone') }}" required autocomplete="false">
                         @error('phone')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                     <div class="single-input">
                        <label for="address">Dirección</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" address="address" value="{{ old('address') }}" required autocomplete="false">
                         @error('address')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                  </div>
                  <div class="single-resume-feild feild-flex-2">
                     <div class="single-input">
                        <label for="department_id">Departamento</label>
                        <select id="department_id" name="department_id" class="form-control">
                           @foreach(\App\Department::orderBy('department')->pluck('department', 'id') as $id => $department)
                             <option {{ (int) old('department_id') === $id }} value="{{ $id }}">
                                 {{ $department }}
                             </option>
                            @endforeach
                        </select>
                     </div>
                     <div class="single-input">
                        <label for="provice">Provincia</label>
                        <input type="text" id="provice" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="resume-box">
                  <h3>Redes sociales</h3>
                  <div class="single-resume-feild feild-flex-2">
                     <div class="single-input">
                        <label for="twitter">
                        <i class="fa fa-facebook facebook"></i>
                        Facebook
                        </label>
                        <input type="text" value="https://www.twitter.com/" id="facebook" name="facebook">
                     </div>
                     <div class="single-input">
                        <label for="linkedin">
                        <i class="fa fa-linkedin linkedin"></i>
                        Linkedin
                        </label>
                        <input type="text" value="https://www.linkedin.com/" id="linkedin" name="twitter">
                     </div>
                  </div>
               </div>
               <div class="submit-resume">
                  <button type="submit">Actualizar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>