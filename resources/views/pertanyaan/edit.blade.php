@extends('template.master')

@section('content')
	<div class="pt-4 pl-4 pr-4">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Edit Pertanyaan {{$question->id}}</h3>
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
						<textarea  class="form-control" id="isi" name="isi" rows="4" cols="50">{{old('isi', $question->isi)}}</textarea>
	                   	<!-- <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $question->isi) }}" placeholder="masukkan isi"> -->
	                   	@error("isi")
	                   		<div class="alert alert-danger"> {{$message}} </div>
	                   	@enderror
	               	</div>
	               	<div class="form-group">
	                   	<label for="tags">Tag</label>
	                   	<input type="text" class="form-control" id="tags" name="tags" value="{{old('tags' ?? $tags->tag_name)}}" placeholder="pisahkan tags dengan koma">
	                   	@error("tag")
	                   		<div class="alert alert-danger"> {{$message}} </div>
	                   	@enderror
	              	</div>
	            </div>
	            </div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Pebarui</button>
				</div>
			</form>
	     </div>
     </div>
@endsection