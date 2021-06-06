@extends('citie.app')

@section('content')
<div class="col-md-4">
    <br>
    <h4 class="text-center">Editar Ciudad: {{ $citie->name }}</h4>
    {!! Form::model($citie, [ 'route' => ['citie.update', $citie], 'method' => 'PUT']) !!}
        @include('citie.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
    <script>
        
    </script>
</div>
@endsection