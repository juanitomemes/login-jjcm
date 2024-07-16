@extends('layouts.app-master')

@section('content')

<div class="card">
	<div class="card-header">Edit Category</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}" />
				</div>
			</div>

		
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Imagen</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
					<br />
					<img src="{{ asset('images/' . $student->student_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_student_image" value="{{ $student->student_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				<input type="submit" class="btn btn-primary" value="Editar" />
			</div>
		</form>
	</div>
</div>
<script>
document.getElementsByName('student_gender')[0].value = "{{ $student->student_gender }}";
</script>

@endsection('content')
