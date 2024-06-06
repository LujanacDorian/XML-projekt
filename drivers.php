<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formula 1</title>
    <link rel="icon" type="image/x-icon" href="img/f1.svg">
    <link href="drivers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                        <a class="nav-link text-light active" id="link-home" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-drivers" href="#">Popis vozača</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-login" href="./login.php">Prijava</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid content">
        <div class="container mt-5">
            <h2 class="text-center">Popis trenutnih vozača</h2>
            <table class="table mt-5">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th class="p-3">IME</th>
                        <th class="p-3">PREZIME</th>
                        <th class="p-3">TIM</th>
                        <th class="p-3">BROJ</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <?php 

                        $xml = simplexml_load_file('drivers.xml');
                        
                        foreach ($xml->driver as $driver): ?>
                        <tr>
                            <td class="p-3"><?php echo  $driver->firstName; ?></td>
                            <td class="p-3"><?php echo $driver->lastName; ?></td>
                            <td class="p-3">
                                <?php
                                    //echo $driver->team.'&nbsp;&nbsp;&nbsp;'; 

                                    if($driver->team == "Red Bull Racing"){
                                        echo '<img src="img/red-bull.png" height=30px;> ';
                                    }
                                    else if($driver->team == "Ferrari"){
                                        echo '<img src="img/ferrari.png" height=25px;> ';
                                    }
                                    else if($driver->team == "McLaren"){
                                        echo '<img src="img/mclaren.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Mercedes"){
                                        echo '<img src="img/merc.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Aston Martin"){
                                        echo '<img src="img/am.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Visa Cash App RB"){
                                        echo '<img src="img/rb.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Alpine"){
                                        echo '<img src="img/alpine.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Haas"){
                                        echo '<img src="img/haas.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Kick Sauber"){
                                        echo '<img src="img/kick.png" height=25px;> ';
                                    }
                                    else if($driver->team == "Williams"){
                                        echo '<img src="img/will.png" height=25px;> ';
                                    } 
                                ?>
                            </td>
                            <td class="p-3 text-center"><?php echo $driver->No; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="container-fluid text-light mt-5 bg-dark" id="foot">
        <div class="row">
            <div class="col-sm-4 text-center">
                <p>Formula 1 <i class="fa-sharp fa-regular fa-copyright fa-2xs" style="color:white;"></i></p>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm">
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
