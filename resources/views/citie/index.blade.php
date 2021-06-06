@extends('citie.app')
@section('content') 
<div class="w-80">
    <a class="btn btn-success pull-right" href="{{ url('/citie/create') }}" role="button">Nueva Ciudad</a>
    @include('citie.partials.table')
</div>
@endsection