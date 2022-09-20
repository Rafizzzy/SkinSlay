<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/index.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 fixed-top nav-u">
        <a class="navbar-brand" href="/">SkinSlay.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex search" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari barang disini!" aria-label="Search">
      </form>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="mr-auto navbar-nav"></ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('login ') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
  <br>
  
</body>

</html>
