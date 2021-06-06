<div class="form-group">
    {!! Form::label('cod', 'COD', ['for' => 'cod'] ) !!}
    {!! Form::text('cod', null , ['class' => 'form-control', 'id' => 'cod', 'placeholder' => 'Escribe el cod de la Ciudad...' ,'required' => 'required']  ) !!}
    {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'name' => 'name', 'placeholder' => 'Escribe el nombre de la ciudad...' ,'required' => 'required']  ) !!}
</div>

