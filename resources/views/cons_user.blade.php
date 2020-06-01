@extends('layouts.main',['titulo'=>'Usuarios'],['section'=>'Administración de Usuarios'])

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
  <div class="col-lg- col-12 mb-4 d-flex flex-row-reverse">
    <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modelAgregar">Agregar Usuario</button>
  </div>
  <!-- Modal Agregar -->
  <div class="modal fade" id="modelAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registrar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/cons_user" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="name">
              </div>
              <div class="form-group">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="email">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="pass1" placeholder="password">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="pass2" placeholder="confirm password">
              </div>
              <select class="form-group" name="nivel">
                <option>Admin</option>
                <option>Chalan</option>
              </select>
              <div class="form-group">
                <input class="form-control" type="file" name="img" value="{{ old('img') }}" placeholder="imagen de perfil">
              </div>
                <br>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Registrar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Modal Agregar-->

  <!-- Modal Editar -->
  <div class="modal fade" id="modelEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/cons_user" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="idEdit">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{old ('name')}}" id="nameEdit" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" name="email" value="{{old ('email')}}" id="emailEdit" aria-describedby="emailHelp" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="pass1"  placeholder="Contraseña">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="pass2" placeholder="Confirmar Contraseña">
              </div>
              <br>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Modal Editar-->

  <!-- Modal Eliminar -->
  <div class="modal fade" id="modelEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>¿Deseas eliminar el usuario?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger btnModelEliminar">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Eliminar-->
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Nivel</th>
                <th scope="col">Imagen</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $p)
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->name}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->nivel}}</td>
                <td>{{$p->img}}</td>
                <td>
                  <button type="button"
                  data-id="{{ $p -> id}}"
                  data-name="{{ $p -> name}}"
                  data-email="{{ $p -> email}}"
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="{{ $p->id }}" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="{{ url ('/cons_user', ['id'=>$p->id]) }}" method="post" id="formEli_{{ $p->id}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    var idEliminar = 0;
    $(document).ready(function(){
      @if($message = Session::get('ErrorInsert'))
        $("#modelAgregar").modal('show');
      @endif
      $(".btnEliminar").click(function(){
        idEliminar = $(this).data("id");
      });
      $(".btnModelEliminar").click(function(){
        $("#formEli_"+idEliminar).submit();
      });
      $(".btnEditar").click(function(){
        $('#idEdit').val($(this).data("id"));
        $('#nameEdit').val($(this).data("name"));
        $('#emailEdit').val($(this).data("email"));
      });
    });
  </script>
@endsection
