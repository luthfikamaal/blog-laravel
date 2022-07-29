@extends('layouts.main')
@section('container')
<div class="row pt-3">
  @foreach($authors as $author)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="{{ asset('/storage/img/avatar/'.$author->avatar) }}" alt="{{ $author->name }}" class="card-img-top">
      <div class="card-body">
        <h5 class="m-0">{{ $author->name }}</h5>
      </div>
      <div class="card-footer">
        <a href="/author/{{ $author->username }}" class="btn btn-primary">Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection