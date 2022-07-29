<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">Web-Blog</a>
    <!-- <div>
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-search"></i>
      </button>
      <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#navbarModal">
        <i class="bi bi-list"></i>
      </button>
    </div> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
        @foreach($categories as $category)
        <li class="nav-item">
          <a class="nav-link {{ Request::is('category/'.$category->slug) ? 'active' : '' }}"
            href="/category/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
        @endforeach
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
          </form>
        </li>
        <li class="nav-item me-2">
          <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">Administrator</a>
        </li>
        <li class="nav-item me-2">
          <a href="/author" class="nav-link {{ Request::is('author*') ? 'active' : '' }}">Author</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalSearch">
            <i class="bi bi-search"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="navbarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Web-Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          @foreach($categories as $category)
          <div class="mb-3">
            <a href="/category/{{ $category->slug }}"
              class="btn w-100 {{ Request::is('category/'.$category->slug) ? 'btn-primary' : 'btn-outline-primary' }}">{{ $category->name }}</a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal Search -->
<div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="search" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="/search" method="post">
          @csrf
          <input type="text" class="form-control" name="search" placeholder="Search..." autocomplete="off"
            value="{{ Request::is('search/*') ? $keyword : '' }}" id="searchControl">
      </div>
      <div class="modal-footer">
        <button id="closeBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
            class="bi bi-x-lg"></i></button>
        <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search -->