@extends('layouts.main',['titulo'=>'Vinos'],['section'=>'Administración de los Vinos'])

@section('section')
  @if($mensaje = Session::get('Listo'))
    <div class="alert alert-success alert-block">
      <strong>{{ $mensaje }}</strong>
    </div>
  @endif

  <div class="col-lg- col-12 mb-4 d-flex flex-row-reverse">
    <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modelAgregar">Agregar Vino</button>
  </div>
  <!-- Modal Agregar -->
  <div class="modal fade" id="modelAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registrar Vino</h5>
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
                <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="color" value="" placeholder="Color">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="fermentacion" value="" placeholder="Fermentación">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="grado_alcohol" value="" placeholder="Grado de alcohol">
              </div>
              <select class="form-group" name="contenedor">
                <option>Barrica</option>
                <option>Botella</option>
              </select>
              <div class="form-group">
                <input class="form-control" type="text" name="t_clasificacion" value="" placeholder="Tipo de clasificación">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="tiempo" value="" placeholder="Tiempo">
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
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Vino</h5>
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
                <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="color" value="" placeholder="Color">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="fermentacion" value="" placeholder="Fermentación">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="grado_alcohol" value="" placeholder="Grado de alcohol">
              </div>
              <select class="form-group" name="contenedor">
                <option>Barrica</option>
                <option>Botella</option>
              </select>
              <div class="form-group">
                <input class="form-control" type="text" name="t_clasificacion" value="" placeholder="Tipo de clasificación">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="tiempo" value="" placeholder="Tiempo">
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
          <h5>¿Deseas eliminar el vino?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger btnModelEliminar">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Eliminar-->
  <!--Tabla de registros-->
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Color</th>
                <th scope="col">Fermentación</th>
                <th scope="col">Grado de Alcohol</th>
                <th scope="col">Contenedor</th>
                <th scope="col">Tipo de clasificación</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Vino Tinto</td>
                <td>Rojo</td>
                <td>Seco</td>
                <td>12.5%</td>
                <td>Botella</td>
                <td>Rosado</td>
                <td>6 meses</td>
                <td>
                  <button type="button"
                  data-id=""
                  data-name=""
                  data-email=""
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="" method="post" id="">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>

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
