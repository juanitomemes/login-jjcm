@extends('layouts.app-master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success mt-2">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Product List</b></div>
			<div class="col col-md-6">
				<a href="{{ route('applications.create') }}" class="btn btn-success btn-sm float-end">Agregar</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Product Name</th>
				<th>Description</th>
				<th>Category</th>
				<th>Accion</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->id}}</td>
						<td>{{ $row->application_description }}</td>
						<td>{{ $row->application_date }}</td>
                        <td>{{$row->student->student_name}}</td>
						<td>
							<form method="post" action="{{ route('applications.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('applications.show', $row->id) }}" class="btn btn-primary btn-sm">Ver</a>
								<a href="{{ route('applications.edit', $row->id) }}" class="btn btn-warning btn-sm">Editar</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>

						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No hay solicitudes</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}

        <p>
			Displaying {{$data->count()}} of {{ $data->total() }} Applications(s).
		</p>
	</div>
</div>

@endsection
