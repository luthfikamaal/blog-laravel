<div class="card border-0">
  <h4 class="card-title text-black mb-3">Artikel Terbaru</h4>
  <div class="card-body p-0">
    @foreach($latestPosts as $latestPost)
    <div class="card mb-3 border-0">
      <a href="/{{ $latestPost->slug }}" class="text-decoration-none text-black source-sans-pro">
        <div class="card-body p-0 row border-0">
          <div class="col-6">
            <img src="{{ asset('storage/'.$latestPost->thumbnail) }}" alt="Thumbnail" class="rounded w-100">
          </div>
          <div class="col-6">
            <div class="detail">
              <h5 class="card-title mb-0">
                {{ $latestPost->title }}
              </h5>
              <span class="text-muted fs-6 source-sans-pro">{{ $latestPost->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>