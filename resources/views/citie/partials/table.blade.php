<h1 class="text-primary">Control de Ciudades</h1>

@include('flash::message')
<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Cod</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Fecha creación </th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cities as $citie)
        <tr>
            <td class="text-center">{{ $citie->id }}</td>
            <td class="text-center">{{ $citie->cod }}</td>
            <td class="text-center">{{ $citie->name }}</td>
        <td class="text-center">{{ $citie->created_at }}</td>

        {!! Form::open(['route' => ['citie.destroy', $citie->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    Eliminar
                </button>
                <a href="{{ url('/citie/'.$citie->id.'/edit') }}" class="btn btn-secondary">
                    Editar
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>

  </tfoot>
</table>