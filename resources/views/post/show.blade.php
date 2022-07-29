@extends('layouts.main')
@section('container')
<style>
.body-font p {
  margin-bottom: 0.5rem;
}

.body-font div {
  margin-bottom: 0.5rem;
}
</style>
<article>
  <h3 class="title-font mt-2 mb-0">{{ $post->title }}</h3>
  <p class="mb-3 source-sans-pro">Oleh <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
  <div class="row justify-content-center">
    <div class="col-md-9">
      <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="" class="w-100 text-center mb-3 rounded">
    </div>
  </div>
  <div id="body-blog" class="body-font mb-4">{!! $post->body !!}</div>
</article>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
  $('#body-blog a').attr('target', '_blank');
});
</script>
@endsection