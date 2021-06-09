<h1 class="text-primary">Control de Clientes</h1>

@include('flash::message')
<a href="/export-clients" class="btn btn-success" role="button" aria-pressed="true">Excel</a>

<div class="links">
    {!! Form::label('cod', 'Importar Excel', ['for' => 'cod'] ) !!}
    <form method="post" action="{{url('import-clients')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="excel">
        <br><br>
        <input type="submit" value="Enviar" style="padding: 10px 20px;">
    </form>
</div>
<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Cod</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Ciudad</th>
        <th class="text-center">Fecha creación </th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
        <tr>
            <td class="text-center">{{ $client->id }}</td>
            <td class="text-center">{{ $client->cod }}</td>
            <td class="text-center">{{ $client->name }}</td>
            <td class="text-center">{{ $client->citie->name }}</td>
        <td class="text-center">{{ $client->created_at }}</td>

        {!! Form::open(['route' => ['client.destroy', $client->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    Eliminar
                </button>
                <a href="{{ url('/client/'.$client->id.'/edit') }}" class="btn btn-secondary">
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
{{ $clients->links('pagination::bootstrap-4') }} 