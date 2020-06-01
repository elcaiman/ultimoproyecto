@extends('layouts.main',['titulo'=>'Mi Perfil'],['section'=>'Administración de Perfil'])

@section('section')
  @if($mensaje = Session::get('Listo'))
    <div class="alert alert-success alert-block">
      <strong>{{ $mensaje }}</strong>
    </div>
  @endif
  @if($errors->any())
     <div class="col-12 alert alert-danger alert-dismissable fade show">
       <h5>Error</h5>
       <ul>
         @foreach($errors->all() as $e)
         <li>{{ $e }}</li>
         @endforeach
       </ul>
     </div>
   @endif
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="{{asset('/dash/assets/img/theme/fondoPerfil.jpg')}}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset('/users/'. Auth::user()->img) }}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Conectar</a>
                <a href="#" class="btn btn-sm btn-success float-right">Mensaje</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="text-center">
                <h5 class="h3">
                  {{ Auth::User()->name }}
                </h5>
                <div>
                  <i class="ni education_hat mr-2"></i>Tecnológico Superior de Nuevo Casas Grandes
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Editar Perfil </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Configuración</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Información de Usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nombre</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Nombre" value="{{Auth::User()->name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Correo Electrónico</label>
                        <input type="email" id="input-email" class="form-control" placeholder="Correo Electrónico" value="{{Auth::User()->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nivel</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Nivel" value="{{Auth::User()->nivel}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Contraseña</label>
                        <input type="password" id="input-last-name" class="form-control" placeholder="Contraseña" value="{{Auth::User()->password}}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Acerca de mi</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Acerca de mi</label>
                    <textarea rows="4" class="form-control" placeholder="A few words about you ...">Un hermoso dashboard para Bootstrap 4. Y es de codigo libre.</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
