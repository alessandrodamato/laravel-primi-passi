<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Laravel - Home</title>
</head>

<body>

    <header style="height: 100px;" class="text-bg-dark">
        <nav class="navbar navbar-expand-lg text-bg-dark">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('products') }}">Prodotti</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

  <main class="text-center" style="height: calc(100vh - 200px); background-color: yellow;">
    <h1 class="py-5">{{ $title }}</h1>
    <div class="container">
      <div class="row row-cols-2">

        <?php foreach ($products as $product): ?>
        <div class="col">
          <h5 class="bg-success p-3">{{ $product }}</h5>
        </div>
        <?php endforeach ?>

      </div>
    </div>
  </main>

  <footer style="height: 100px;" class="text-uppercase text-bg-dark d-flex align-items-center justify-content-center ">
    <span>laravel &copy;</span>
  </footer>

</body>

</html>
