<style>
.mt-minus-custom {
  margin-top: -5px;
}
</style>
<div class="col-md-4 m-0 p-0">
  <img src="{{ asset('storage/'.$randomPosts[0]->thumbnail) }}" alt="{{ $randomPosts[0]->title }}" class="w-100">
  <div class="rounded detail-card-top-1">
    <h4 class="p-3 text-white"><a href="#" class="text-white text-decoration-none">{{ $randomPosts[0]->title }}</a></h4>
  </div>
</div>
<div class="col-md-4 m-0 p-0">
  <img src="{{ asset('storage/'.$randomPosts[1]->thumbnail) }}" alt="{{ $randomPosts[1]->title }}" class="w-100">
  <div class="rounded detail-card-top-2">
    <h4 class="p-3 text-white"><a href="#" class="text-white text-decoration-none">{{ $randomPosts[1]->title }}</a></h4>
  </div>
</div>
<div class="col-md-4 m-0 p-0">
  <img src="{{ asset('storage/'.$randomPosts[2]->thumbnail) }}" alt="{{ $randomPosts[2]->title }}" class="w-100">
  <div class="rounded detail-card-top-3">
    <h4 class="p-3 text-white"><a href="#" class="text-white text-decoration-none">{{ $randomPosts[2]->title }}</a></h4>
  </div>
</div>
<script>
var thumbs = `<?php echo json_encode($randomPosts[0]->thumbnail) ?>`;
thumbs = thumbs.replace('"', '');
thumbs = thumbs.replace('"', '');
console.log('http://127.0.0.1:8000/storage/' + thumbs);
console.log('hllo')
$(document).ready(function() {
  $('.bg-thumb').css('background-image', thumbs);
  $('.bg-thumb').css('height', '100$');
  $('.detail-card-top-1').css('margin-top', -($('.detail-card-top-1').height() + 20));
  $('.detail-card-top-2').css('margin-top', -($('.detail-card-top-2').height() + 20));
  $('.detail-card-top-3').css('margin-top', -($('.detail-card-top-3').height() + 20));
  console.log($('.detail-card-top-1').height());
  console.log($('.detail-card-top-2').height());
  console.log($('.detail-card-top-3').height());
  console.log($('.bg-thumb').css('background-image', thumbs));
})
</script>