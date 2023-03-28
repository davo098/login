@extends('layouts.layout-principal')
@section('body')

<div class="container .col-md-6 .offset-md-3 mt-5 p-5">
<div class="mb-3">
  <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Titulo de Hilo">
</div>
<div class="mb-3 mt-5">
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Texto de Hilo" rows="8"></textarea>
</div>
<div class="d-flex justify-content-end mt-5">
    <a href="home" class="btn btn-primary">Crear</a>
  </div>
</div>
@endsection