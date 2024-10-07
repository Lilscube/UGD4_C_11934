<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home-11934</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/app.css">


  <style>
    p, a, h1, h2, h3, h4, h5 {
      font-family: "Gowun Batang", serif;
      font-weight: 400;
      font-style: normal;
    }

    .gowun-batang-bold {
      font-family: "Gowun Batang", serif;
      font-weight: 700;
      font-style: normal;
    }

  </style>
</head>

<body style="font-family: 'Courgette', cursive;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AtmaTech</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item font-weight-bold">
            <a class="nav-link active border-bottom border-3 border-dark pb-2"
              href="{{url('/home-11934')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/profile-Anjes')}}">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/img1.jpg" class="d-block w-100" alt="img1" style="height: 900px; object-fit:cover" >
      </div>

      <div class="carousel-item">
        <img src="/images/img2.jpg" class="d-block w-100" alt="img2" style="height: 900px; object-fit:cover">
      </div>

      <div class="carousel-item">
        <img src="/images/img3.jpg" class="d-block w-100" alt="img3" style="height: 900px; object-fit:cover">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="card w-25 container text-center mx-auto m-5">
    <div class="card-body row align-items-start">

      <div class="col">
        <a href="https://www.instagram.com/anjesvrnda/" class="link-dark"><i class="bi bi-instagram"></i></a>
      </div>

      <div class="col">
        <a href="https://www.linkedin.com/feed/" class="link-dark"><i class="bi bi-linkedin"></i></a>
      </div>

      <div class="col">
        <a href="https://github.com/dashboard" class="link-dark"><i class="bi bi-github"></i></a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>