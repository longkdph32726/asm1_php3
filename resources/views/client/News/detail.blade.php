@extends('client.layout.master')
@section('content')

<div class="row">
    <div class="row p-5">
        <h1>ABC</h1>
        <p class="text-danger"><strong>{{ $post->name }}</strong></p>
        <hr>
        <div class="row p-5">
            <h4 class="text-danger">{{ $post->tieude }}</h4>
            <p>{{ $post->noidung }}</p>
        </div>
    </div>
</div>
@endsection