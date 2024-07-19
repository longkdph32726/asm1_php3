@extends('client.layout.master')
@section('content')
<div class="row">
  @foreach ($posts as $item)
  <div class="col-4">

            <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p>{{ $item->tieude }}</p>
            <a href="{{ route('detail.list',$item->id) }}" class="btn btn-primary">Xem chi tiết</a>
          </div>
        </div>

  
  </div>
  @endforeach
</div>

@endsection