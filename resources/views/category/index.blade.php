@extends('layouts.main')
@section('container')
<div class="row pt-3">
  @foreach($posts as $post)
  <div class="col-md-6 mb-4">
    <div class="card border-0">
      <div class="card-body p-0">
        <div class="position-absolute category-box">
          <a href="/category/{{ $post->category->slug }}"
            class="text-white category-tag text-decoration-none">{{ $post->category->name }}</a>
        </div>
        <img src="{{asset('storage/'.$post->thumbnail)}}" alt="Thumbnail" class="mb-2 rounded img-top w-100">
        <div class="blog-card-detail">
          <a href="/{{$post->slug}}" class="text-decoration-none text-black">
            <h4 class="card-title my-0">{{ $post->title }}</h4>
          </a>
          <div class="text-muted source-sans-pro d-flex align-items-center">
            <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            <i class="bi bi-clock ms-2 me-1 icon-jam"></i>{{ $post->created_at->format('d M Y') }}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection