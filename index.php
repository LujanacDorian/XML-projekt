<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formula 1</title>
    <link rel="icon" type="image/x-icon" href="img/f1.svg">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbck fixed-top">
        <div class="container-fluid">
            <h1><a href="./index.php"><img src="img/f1white.svg" width="100px" height="50px"></a></h1>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link text-light active" id="link-home" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-drivers" href="./drivers.php">Popis vozača</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-login" href="./login.php">Prijava</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
            <img class="d-block w-100" src="img/carousel1.jpg" height="950px" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/carousel2.jpg" height="950px" alt="Second slide">
            </div>
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/carousel3.jpg" height="950px" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/carousel1.jpg" height="250px" style="margin-top:10px;">
                </div>
                <div class="col-sm-8 border border-2 border-danger border-top-0 border-start-0 rounded-end">
                    <h2>Novosti</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ornare nisi. Sed massa arcu, accumsan vitae aliquam id, dignissim sed dui. Aliquam turpis ligula, sagittis sed arcu sed, iaculis hendrerit nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tempor a leo quis ullamcorper. Integer fermentum enim convallis euismod dapibus. Aenean imperdiet et augue ut vestibulum. Ut laoreet quam turpis, vel varius eros aliquam eget. Nullam imperdiet id orci a interdum. Suspendisse potenti.</p>
                </div>
            </div>
        </div>
    
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-8 border border-2 border-danger border-top-0 border-end-0 rounded-start">
                    <h2>Novosti</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ornare nisi. Sed massa arcu, accumsan vitae aliquam id, dignissim sed dui. Aliquam turpis ligula, sagittis sed arcu sed, iaculis hendrerit nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tempor a leo quis ullamcorper. Integer fermentum enim convallis euismod dapibus. Aenean imperdiet et augue ut vestibulum. Ut laoreet quam turpis, vel varius eros aliquam eget. Nullam imperdiet id orci a interdum. Suspendisse potenti.</p>
                </div>
                <div class="col-sm-4">
                    <img src="img/carousel2.jpg" height="250px" style="margin-top:10px;">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
            <div class="col-sm-4">
                    <img src="img/carousel3.jpg" height="250px" style="margin-top:10px;">
                </div>
                <div class="col-sm-8 border border-2 border-danger border-top-0 border-start-0 rounded-end">
                    <h2>Novosti</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ornare nisi. Sed massa arcu, accumsan vitae aliquam id, dignissim sed dui. Aliquam turpis ligula, sagittis sed arcu sed, iaculis hendrerit nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tempor a leo quis ullamcorper. Integer fermentum enim convallis euismod dapibus. Aenean imperdiet et augue ut vestibulum. Ut laoreet quam turpis, vel varius eros aliquam eget. Nullam imperdiet id orci a interdum. Suspendisse potenti.</p>
                </div>
            </div>
        </div>
    </div>  

    <footer class="container-fluid text-light mt-5 bg-dark" id="foot">
        <div class="row">
            <div class="col-sm-4 text-center">
                <p>Formula 1 <i class="fa-sharp fa-regular fa-copyright fa-2xs" style="color:white;"></i></p>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm ">
                        <i class="fa-brands fa-instagram" style="color:white;"></i>
                    </div>
                    <div class="col-sm">
                        <i class="fa-brands fa-facebook-f" style="color:white;"></i>
                    </div>
                    <div class="col-sm">
                        <i class="fa-brands fa-x-twitter" style="color:white;"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <p>Email: info@formula1.com</p>
            </div>
        <div>
    </footer>

  </body>
</html>
