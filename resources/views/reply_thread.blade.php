@extends('layouts.layout-principal')
@section('body')

<div class="container .col-md-6 .offset-md-3 ">
<div class="mb-10 col-sm-11 mt-5">
  <h1>TITULO DE HILO</h1>
  <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium delectus aperiam alias officiis ad dolor, illo iste rem quis dolores cupiditate ducimus possimus dolorum non culpa exercitationem, mollitia ullam totam.</p>
  <textarea class="form-control mt-2" id="exampleFormControlTextarea1" placeholder="Respuesta de Hilo" rows="8" ></textarea>
  <div class="d-flex justify-content-end mt-5">
    <a href="home" class="btn btn-primary">Responder</a>
  </div>
</div>
</div>

@endsection