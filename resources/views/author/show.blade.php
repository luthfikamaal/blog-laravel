@extends('layouts.main')
@section('container')
<div class="pt-3">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card position-sticky" style="top: 4.5rem;">
        <img src="{{ asset('storage/img/avatar/'.$author->avatar) }}" alt="{{ $author->name }}" class="card-img-top">
        <div class="card-body">
          <h6 class="mb-1">{{ $author->name }}</h6>
          <span class="text-muted fst-italic">{{ $author->about }}</span>
        </div>
        <div class="card-footer">
          <a href="https://instagram.com/luthfikml_/" class="btn btn-primary" target="_blank"><i
              class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <h4>{{ $title }}</h4>
      <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="text-title">{{ $post->title }}</h5>
              <span class="mb-0 badge rounded-pill bg-secondary"> {{ $post->created_at->format('d M Y') }}</span>
              <span class="mb-0 me-1 badge rounded-pill bg-secondary">Dibaca {{ $post->views }} kali</span>
            </div>
            <div class="card-footer">
              <a href="/{{ $post->slug }}" class="btn btn-primary">Baca</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection