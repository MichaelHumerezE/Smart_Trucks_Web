@extends('layouts.app-master')
@section('content')
    <div class="card mt-4">
        <div class="card-header d-inline-flex">
            <h1>Formulario - Ver Basuras</h1>
        </div>
        <div class="card-header d-inline-flex">
            <a href="{{ route('basuras.index') }}" class="btn btn-primary ml-auto">
                <i class="fas fa-arrow-left"></i>
                Volver</a>
        </div>
        <div class="card-body">
            <form action="{{ route('basuras.store') }}" method="POST" enctype="multipart/form-data" id="create">
                @include('basuras.partials.form')
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
