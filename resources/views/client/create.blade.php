@extends('citie.app')

@section('content')
<div class="col-md-4">
    <br>
    <h4 class="text-center">Registrar Cliente</h4>
    {!! Form::open([ 'route' => 'client.store', 'method' => 'POST']) !!}
        @include('client.partials.fields')
        <br>
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
</div>
@endsection