@extends('citie.app')
@section('content') 
<div class="col-lg-12">
    <a class="btn btn-success pull-right" href="{{ url('/client/create') }}" role="button">Nuevo Client</a>
    @include('client.partials.table')
</div>
@endsection