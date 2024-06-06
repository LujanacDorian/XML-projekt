<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Formula 1</title>
    <link rel="icon" type="image/x-icon" href="img/f1.svg">
    <link href="login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbck fixed-top">
        <div class="container-fluid">
            <h1><img src="img/f1white.svg" width="100px" height="50px"></h1>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" id="link-home" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-drivers" href="./drivers.php">Popis vozača</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-login" href="#">Prijava</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="link-login" href="./about.html">O nama</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5 content">
        <div class="container justify-content-center">   
            <div">
                <h2>Login</h2>
                <form action="" method="post" class="">
                    <label style="margin-left:17px;" for="username">Korisničko ime</label>
                    <div class="div" id="username">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username">
                    </div>
                    <label class="mt-2" style="margin-left:17px;" for="password">Lozinka</label>
                    <div class="div" id="lozinka">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password">
                    </div>
                    <button class="btn btn-dark mt-4" style="margin-left:17px;" type="submit">Prijava</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-light mt-5 bg-dark" id="foot">
        <div class="row">
            <div class="col-sm-4 text-center">
                <p>Formula 1 <i class="fa-sharp fa-regular fa-copyright fa-2xs" style="color:white;"></i></p>
            </div>
            <div class="col-sm-4">
                <div class="brand row text-center">
                    <i class="fa-brands fa-instagram" style="color:white;"></i>
                </div>
                <div class="brand row text-center mt-3">
                    <i class="fa-brands fa-facebook-f" style="color:white;"></i>
                </div>
                <div class="brand row text-center mt-3">
                    <i class="fa-brands fa-x-twitter" style="color:white;"></i>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <p>Email: info@formula1.com</p>
            </div>
        <div>
    </footer>
 
</body>
</html>

<?php

	$username="";
	$password="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["username"]))  {
				echo "
                    <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Korisničko ime nije uneseno</div>
                ";
		} else if (empty($_POST["password"])) {
			echo "
                <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Lozinka nije unesena</div>
            ";
		} else {

			$username = $_POST["username"];
			$password = $_POST["password"];
		
			$xml=simplexml_load_file("users.xml");
		
			foreach ($xml->account as $account) {
				$xml_username = $account->username;
				$xml_password = $account->password;
				$xml_ime = $account->ime;
				$xml_prezime = $account->prezime;
				if ($xml_username == $username) {
					if($xml_password == $password) {
						echo "
                            <div style='position:absolute; top:35%; left:25%; color:black; font-size:26px; font-weight:900;'>
                                Prijavljeni ste kao <span style='color: #e10600;'>$xml_ime $xml_prezime,</span>
                                <a href='index.php' style='color:#e10600'>Nastavi</a>
                            </div>
                        ";
						return;
					} else {
						echo "
                            <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Netočna lozinka</div>
                        ";
						return;
					}
				}
			}

			echo "
                <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Korisnik ne postoji</div>
            ";
			return;
		}
	}

?>