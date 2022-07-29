<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Muhammad Luthfi Kamal">
  <title>{{ $title }} | Web-Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- navbar -->
  @include('include.navbar')
  <!-- navbar -->

  @if(Request::is('/'))
  <div class="container-fluid">
    <div class="row">
      @include('include.randompost')
    </div>
  </div>
  @endif
  <div class="container pt-3">
    <div class="row">
      <div class="col-lg-8">
        @yield('container')
      </div>
      <div class="col-lg-4">
        <div class="card my-3">
          <div class="card-body">
            @include('include.latestpost')
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-body">
            @include('include.popularpost')
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="footer" class="bg-dark">
    <div class="container py-4">
      <div class="d-flex align-items-center mb-4">
        <span class="text-white">
          <a href="#">Beranda</a> /
          <a href="#">About</a> /
          <a href="#">Services</a> /
          <a href="#">Contact</a>
        </span>
        <span class="ms-auto">
          <a href="#"><i class="ms-1 bi bi-instagram"></i></a>
          <a href="#"><i class="ms-1 bi bi-twitter"></i></a>
          <a href="#"><i class="ms-1 bi bi-facebook"></i></a>
          <a href="#"><i class="ms-1 bi bi-youtube"></i></a>
        </span>
      </div>
      <hr class="line">
      <div class="text-white d-flex align-items-center mt-4">
        <span>Copyright 2022 Kodingsans</span>
      </div>
    </div>
  </section>

  <!-- Modal Navbar -->
  <!-- Modal -->

  <!-- Modal Navbar -->
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  $(document).ready(function() {
    var heightNav = $(".navbar").height();
    console.log(heightNav);
    $("body").css("padding-top", heightNav);
    $('#modalSearch').on('shown.bs.modal', function() {
      if ($('#searchControl').val() == null) {
        $('#searchControl').focus();
      }
    });
  });
  </script>
</body>

</html>