@extends('template.master')

@section('content')
	<div class="mt-3 ml-3">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Edit Question {{$question->id}}</h3>
			</div>
	              <!-- /.card-header -->
	              <!-- form start -->
			<form role="form" action="/pertanyaan/{{$question->id}}" method="POST">
				@csrf
				@method('PUT')
	            <div class="card-body">
	               	<div class="form-group">
	                   	<label for="judul">Judul</label>
	                   	<input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $question->judul) }}" placeholder="masukkan judul">
	                   	@error("judul")
	                   		<div class="alert alert-danger"> {{$message}} </div>
	                   	@enderror
	              	</div>
	               	<div class="form-group">
	                  	<label for="isi">Isi</label>
	                   	<input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $question->isi) }}" placeholder="masukkan isi">
	                   	@error("isi")
	                   		<div class="alert alert-danger"> {{$message}} </div>
	                   	@enderror
	               	</div>
	            </div>
	            </div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
	     </div>
     </div>
@endsection