@extends('layouts.main',['titulo'=>'Inicio'],['section'=>'Bienvenido'])

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
  <div class="col-12">
    <div class="row">

    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    console.log("HOLA")
  </script>
@endsection
