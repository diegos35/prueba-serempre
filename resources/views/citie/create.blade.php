@extends('citie.app')

@section('content')
<div class="col-md-4">
    <br>
    <h4 class="text-center">Crear Ciudad</h4>
    {!! Form::open([ 'route' => 'citie.store', 'method' => 'POST']) !!}
        @include('citie.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
</div>
@endsection