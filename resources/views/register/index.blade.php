<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Register</title>
</head>

<body>

  <div class="container">
    <div class="row pt-3 justify-content-center">
      <div class="col-md-5">
        <form action="/register" method="post">
          @csrf
          <div class="card">
            <div class="card-header">
              <h4 class="m-0">{{ $title }}</h4>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="div">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
              <hr>
              <span>Sudah punya akun? <a href="/login">Login</a></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>