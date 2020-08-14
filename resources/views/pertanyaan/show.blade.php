@extends('template.master')

@section('content')
    <!-- <div class="pt-4 pl-4 pr-4">
        <h4> {{ $question->judul }} </h4>
        <p> {{ $question->isi }} </p>
    </div> -->

    <div class="pt-4 pl-4 pr-4">
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Pertanyaan</h3>

                <div class="card-tools pull-right">
                    <a href="#" class="btn btn-card-tool">Kembali</a>
                </div>
            </div>
                <!-- /.card-header -->
            <div class="card-body no-padding">
                <div class="mailcard-read-info">
                    <h3>{{ $question->judul }}</h3>
                    <h5>Author : {{ $question->namaUser->name }}<br></h5>
                    <h5>email : {{ $question->namaUser->email }}</h5>
                    <span class="mailbox-read-time pull-right">Dibuat pada {{ $question->created_at }}</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
    
                <div class="show-detail">
                    <h4>{{ $question->isi }}</h4>
                </div>
                <!-- /.mailbox-read-message -->
                </div>
            </div>
        </div>
@endsection