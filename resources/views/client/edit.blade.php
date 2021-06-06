@extends('citie.app')

@section('content')
<div class="col-md-4">
    <br>
    <h4 class="text-center">Editar Cliente: {{ $client->name }}</h4>
    {!! Form::model($client, [ 'route' => ['client.update', $client], 'method' => 'PUT']) !!}
        @include('client.partials.fields')
        <br>
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
</div>
@endsection