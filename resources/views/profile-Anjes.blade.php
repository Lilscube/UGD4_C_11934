<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile-I Putu Anjes Vernanda</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/app.css">

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
      <a class="navbar-brand" href="#"><strong>AtmaTech</strong></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item font-weight-bold">
            <a class="nav-link"
              href="{{url('/home-11934')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active border-bottom border-3 border-dark pb-2" aria-current="page" href="{{url('/profile-Anjes')}}">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-center" style="margin-top: 80px;">
    <h3><strong>My Profile</strong></h3>
  </div>
  <div class="d-flex justify-content-center flex-wrap">
    <div class="card m-3 mx-5" style="width: 30rem;">
      <div class="card-body d-flex text-center">

        <div>
          <img src="{{ $data['foto'] }}" class="rounded-circle"
            style="width: 150px; height: 150px; object-fit: cover; border: 1px solid yellow; margin-right: 15px;"
            alt="Foto profil">
        </div>

        <div class="">
          <h4 class="card-title"><strong>{{ $data['nama'] }}</strong></h5>
          <h5 class="card-subtitle mb-2" style="margin-top: 20px;">{{ $data['quote'] }}</h5>
  
          <div class="text-center" style="margin-top: 10px;">
            <button type="button" class="btn btn-warning">
              <a class="nav-link text-light" aria-current="page" href="{{url('/home-11934')}}">Back To Home <i class="bi bi-chevron-compact-right"></i>
              </a>
            </button>
        </div>
        
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>