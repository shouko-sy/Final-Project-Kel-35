@extends('template.master')

@section('content')
        <div class="pt-4 pl-4 pr-4">
            <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">Pertanyaan</h3>

                    <div class="card-tools pull-right">
                        <a href="{{ route('pertanyaan.index') }}" class="btn btn-card-tool">Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body no-padding">
                    <div class="mailcard-read-info">
                        <h3>{{ $question->judul }}</h3>
                        <h5>Author : {{ $question->namaUser->name }}<br></h5>
                        <h5>email : {{ $question->namaUser->email }}</h5>
                        <span class="mailbox-read-time pull-right">Dibuat pada {{ $question->created_at }}</span></h5>
                        <div class="float-right">
                            Tags : 
                            @forelse($question->tags as $tag)
                                <button class="btn btn-primary btn-sm"> {{ $tag->tag_name }}</button>
                                @empty
                                No Tags
                            @endforelse
                        </div>
                    </div>
                    <!-- /.mailbox-read-info -->
                    <div class="show-detail">
                        <h4>{{ $question->isi }}</h4>
                    </div>
                    <!-- /.mailbox-read-message -->
                </div>
            </div>

            <div class="card card-primary">
                <form role="form" action="/pertanyaan/{{$question->id}}" method="POST">
                @csrf
                    <div class="form-group m-2">
                        <textarea  class="form-control" name="jawaban" rows="2" cols="50" placeholder="masukan jawaban anda ..."></textarea>
                        <!-- @error("")
                            <div class="alert alert-danger"> {{$message}} </div>
                        @enderror -->
                    </div>
                    <div class="form-group m-2">
                        <button type="submit" class="btn btn-primary">Tambah Jawaban</button>
                    </div>
                </form>
            </div>
                    
            @forelse($answer as $key => $answer)
                <div class="card card-primary">
                    <div class="card-body row">
                        <h5 class="card-title">{{ $answer->isi }}</h5>
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card-body row">
                        <div class="ml-5">
                            <h5 class="card-title">komentar!</h5>
                        </div>
                    </div>
                </div>
                @empty
                    	 <tr>
                    	 	<td colspan="4" align="center">Tidak ada Komentar</td>
                    	 </tr>
            @endforelse
            
        </div>
@endsection