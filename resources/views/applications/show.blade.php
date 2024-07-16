@extends('layouts.app-master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Detalles de Solicitud</b></div>
			<div class="col col-md-6">
				<a href="{{ route('applications.index') }}" class="btn btn-primary btn-sm float-end">Ver lista completa</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Descripcion de Solicitud</b></label>
			<div class="col-sm-10">
				{{ $application->application_description }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Fecha de Solicitud</b></label>
			<div class="col-sm-10">
				{{ $application->application_date }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Estudiante</b></label>
			<div class="col-sm-10">
				{{ $application->student->student_name }}
			</div>
		</div>

		</div>
	</div>
</div>

@endsection('content')
