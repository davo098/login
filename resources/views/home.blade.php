@extends('layouts.layout-principal')
@section('body')


<div class="container">

    <div class="card mt-4 bg-info col-sm-11">
        <div class="card-header">
            TEMA
        </div>
        <div class="card-body">
            <h5 class="card-tittle">Autor:</h5>
            <h5 class="card-text">Fecha:</h5>
            <div class="d-flex justify-content-end">
                <a href="reply_thread" class="btn btn-primary">Responder</a>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="card mt-4 bg-success col-sm-11">
        <div class="card-header">
            TEMA
        </div>
        <div class="card-body">
            <h5 class="card-tittle">Autor:</h5>
            <h5 class="card-text">Fecha:</h5>
            <div class="d-flex justify-content-end">
                <a href="reply_thread" class="btn btn-primary">Responder</a>
            </div>
        </div>
    </div>
</div>
@endsection
