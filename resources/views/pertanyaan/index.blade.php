@extends('template.master')

@section('content')
	<div class="mt-3 ml -3">
		<div class="card">
			<div class="card-header">
            	<h3 class="card-title">Questions Table</h3>
            </div>
            	<!-- /.card-header -->
            <div class="card-body">
            	@if(session('success'))
            		<div class="alert alert-success">
            			{{ session('success') }}
            		</div>
            	@endif
            	<a class="btn btn-primary mb-2" href="{{ route('pertanyaan.create') }}">Create New Question</a>
                <table class="table table-bordered">
                <thead>                  
                    <tr>
                    	<th style="width: 10px">#</th>
                    	<th>Judul</th>
                    	<th>Isi</th>
                    	<th style="width: 40px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($questions as $key => $questions)
                    	<tr>
                    		<td> {{$key+1}} </td>
                    		<td> {{$questions->judul}} </td>
                    		<td> {{$questions->isi}} </td>
                    		<td style="display: flex;"> 
                    			<a href="{{ route('pertanyaan.show', ['pertanyaan' => $questions->id]) }}" class="btn btn-info btn-sm">Show</a>
                    			<a href="{{ route('pertanyaan.edit', ['pertanyaan' => $questions->id]) }}" class="btn btn-default btn-sm">Edit</a>
                    			<form action="{{ route('pertanyaan.destroy', ['pertanyaan' => $questions->id]) }}
                    				@method('DELETE')
                    				<input type="submit" value="delete" class="btn btn-danger btn-sm">
                    			</form>
                    		</td>
                    	</tr>
                    	@empty
                    	 <tr>
                    	 	<td colspan="4" align="center">No Question</td>
                    	 </tr>
                    @endforelse
                </tbody>
            	</table>
        	</div>
		</div>
	</div>
@endsection