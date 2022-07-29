<div class="row mb-3">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item hover-hand @if($activePage==1) disabled @endif">
        <a class="page-link" href="/page/{{$activePage-1}}"><i class="bi bi-chevron-double-left"></i></a>
      </li>
      @if($activePage == 1)
      <li class="page-item active">
        <a class="page-link" href="/page/{{$activePage}}">{{$activePage}}</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="/page/{{$activePage+1}}">{{$activePage+1}}</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
      <li class="page-item">
        <a href="/page/{{ $nPage }}" class="page-link disabled">{{ $nPage }}</a>
      </li>
      @elseif($activePage == 2)
      <li class="page-item">
        <a class="page-link" href="/page/{{$activePage - 1}}">{{$activePage - 1}}</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="/page/{{$activePage}}">{{$activePage}}</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="/page/{{$activePage+1}}">{{$activePage+1}}</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
      <li class="page-item">
        <a href="/page/{{ $nPage }}" class="page-link disabled">{{ $nPage }}</a>
      </li>
      @elseif($activePage == 3)
      <li class="page-item">
        <a class="page-link" href="/page/{{$activePage - 2}}">{{$activePage - 2}}</a>
      </li>
      <li class="page-item ">
        <a class="page-link" href="/page/{{$activePage -1}}">{{$activePage -1}}</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="/page/{{$activePage}}">{{$activePage}}</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="/page/{{$activePage + 1}}">{{$activePage + 1}}</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">...</a>
      </li>
      <li class="page-item">
        <a href="/page/{{ $nPage }}" class="page-link disabled">{{ $nPage }}</a>
      </li>
      @elseif($activePage > 3 && $activePage < $nPage - 2) <li class="page-item">
        <a class="page-link" href="/page/1">1</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="/page/{{$activePage - 1}}">{{$activePage - 1}}</a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="/page/{{$activePage}}">{{$activePage}}</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="/page/{{$activePage+1}}">{{$activePage+1}}</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="/page/{{$nPage}}">{{$nPage}}</a>
        </li>
        @elseif($activePage == $nPage - 2)
        <li class="page-item">
          <a href="/page/1" class="page-link disabled">1</a>
        </li>
        <li class="page-item">
          <a href="#" class="page-link disabled">...</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $activePage - 1 }}" class="page-link disabled">{{ $activePage - 1 }}</a>
        </li>
        <li class="page-item active">
          <a href="/page/{{ $activePage }}" class="page-link disabled">{{ $activePage }}</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $activePage + 1 }}" class="page-link disabled">{{ $activePage + 1 }}</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $nPage }}" class="page-link disabled">{{ $nPage }}</a>
        </li>
        @elseif($activePage == $nPage - 1)
        <li class="page-item">
          <a href="/page/1" class="page-link disabled">1</a>
        </li>
        <li class="page-item">
          <a href="#" class="page-link disabled">...</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $activePage - 1 }}" class="page-link disabled">{{ $activePage - 1 }}</a>
        </li>
        <li class="page-item active">
          <a href="/page/{{ $activePage }}" class="page-link disabled">{{ $activePage }}</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $nPage }}" class="page-link disabled">{{ $nPage }}</a>
        </li>
        @elseif($activePage == $nPage)
        <li class="page-item">
          <a href="/page/1" class="page-link disabled">1</a>
        </li>
        <li class="page-item">
          <a href="#" class="page-link disabled">...</a>
        </li>
        <li class="page-item">
          <a href="/page/{{ $activePage - 1 }}" class="page-link disabled">{{ $activePage - 1 }}</a>
        </li>
        <li class="page-item active">
          <a href="/page/{{ $activePage }}" class="page-link disabled">{{ $activePage }}</a>
        </li>
        @endif
        <li class="page-item  @if($activePage==$nPage) disabled @endif">
          <a class="page-link" href="/page/{{$activePage+1}}"><i class="bi bi-chevron-double-right"></i></a>
        </li>
    </ul>
  </nav>
</div>