@extends('client.layout.master')
@section('content')
<div class="row">
  @foreach ($cate as $item)
  <div class="card">
    <a class="nav-link" href="{{ route('posts.list',$item->id) }}">{{ $item->name }}</a>
  </div>
  @endforeach


</div>
@endsection