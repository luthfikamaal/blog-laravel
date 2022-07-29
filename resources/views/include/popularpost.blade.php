<div class="card border-0">
  <h4 class="card-title text-black mb-3">Artikel Terpopuler</h4>
  <div class="card-body p-0">
    @foreach($popularPosts as $popularPost)
    <div class="card mb-3 border-0">
      <a href="/{{ $popularPost->slug }}" class="text-decoration-none text-black source-sans-pro">
        <div class="card-body p-0 row border-0">
          <div class="col-sm-6">
            <img src="{{ asset('storage/'.$popularPost->thumbnail) }}" alt="Thumbnail" class="rounded w-100">
          </div>
          <div class="col-sm-6">
            <div class="detail">
              <h5 class="card-title mb-0">
                {{ $popularPost->title }}
              </h5>
              <span class="text-muted fs-6 source-sans-pro">{{ $popularPost->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>