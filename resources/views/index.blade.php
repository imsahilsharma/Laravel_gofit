<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>GoFit</title>
</head>

<body>
  <h1 style="text-align: center; font-size: 72px; font-family: Verdana, Geneva, Tahoma, sans-serif;">GoFit</h1>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="images/brandicon.png" height="75px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="font-size: 22px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/equipment" style="font-size: 22px;">Equipments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/clothing" style="font-size: 22px;">Apparels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact" style="font-size: 22px;">Reach Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
        <img src="images/img2.jpg" class="d-block w-100" alt="-NA-" height="400px">
      </div>
      <div class="carousel-item">
        <img src="images/img3.jpg" class="d-block w-100" alt="-NA-" height="400px">
      </div>
      <div class="carousel-item">
        <img src="images/img1.jpg" class="d-block w-100" alt="-NA-" height="400px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <br><br>
    <div class="row">
      <div class="col col-0 col-sm-0 col-md-0 col-lg-2 col-xl-2 col-xxl-2"></div>
      <div class="col col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5 col-xxl-5">
        <div class="card" style="width: 18rem;">
          <img src="images/bench.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;">EQUIPMENTS</h5>
            <p class="card-text">Check out the new collection and Grab yours now at Special Prices.</p>
            <a href="equipment.php" class="btn btn-primary" ;">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5 col-xxl-5">
        <div class="card" style="width: 18rem;">
          <img src="images/wtracksuit.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">APPARELS</h5>
            <p class="card-text">Check out our New Arrivals and Grab yours before its too late.</p>
            <a href="clothing.php" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <h1 style="text-align: center;">Sign-In</h1>
        <table class="table table-borderless">
          <tr>
            <td>Username</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" class="form-control"></td>
          </tr>
          <tr>
            <td></td>
            <td><button class="btn btn-success">LOGIN</button></td>
          </tr>
        </table>
      </div>
      <div class="col col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <h1 style="text-align: center;">Sign-Up</h1>
        <table class="table table-borderless">
          <tr>
            <td>Name</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Phone No</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Email ID</td>
            <td><input type="email" class="form-control"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" class="form-control"></td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td><input type="password" class="form-control"></td>
          </tr>
          <tr>
            <td></td>
            <td><button class="btn btn-danger">REGISTER</button></td>
          </tr>
        </table>
      </div>
    </div>
    <br><br>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>