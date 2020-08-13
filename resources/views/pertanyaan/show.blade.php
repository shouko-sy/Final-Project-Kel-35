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
                    <h5>From: help@example.com<br>
                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
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