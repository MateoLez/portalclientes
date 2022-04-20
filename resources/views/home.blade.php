@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Tablero MonoApp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-tittle">
                Hola Mundo
            </h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt ipsum, ducimus id vel delectus rem nobis, omnis tenetur, deleniti facere veniam autem eius tempora? Tempora nulla voluptates unde earum aliquam.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
