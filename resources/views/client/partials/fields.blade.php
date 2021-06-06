<div class="form-group">
    {!! Form::label('cod', 'COD', ['for' => 'cod'] ) !!}
    {!! Form::text('cod', null , ['class' => 'form-control', 'id' => 'cod', 'placeholder' => 'Escribe el cod del Cliente...' ,'required' => 'required' ]  ) !!}
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'name' => 'name', 'placeholder' => 'Escribe el nombre del Cliente...' ,'required' => 'required' ]  ) !!}
  
</div>

<div class="form-group">
    {!! Form::label('citie_id', 'ciudad', ['for' => 'citie_id'] ) !!}
    {!! Form::select('citie_id', $cities, null, ['class' => 'form-control'])  !!}
</div>
