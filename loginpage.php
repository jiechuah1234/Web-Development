<!DOCTYPE html>
<html lang="en">

  <head>
<?php
session_start();
?> 


<?php


$isAdmin = false;

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
{
	$isAdmin = true;
}

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COFFEE HOUSE - Loginpage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>
  
  <section id="login" class="content-section text-center">
             <div class="container">
               <br><h1 align="center"> 
			  </h1><br> <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				
				if (strpos($url, 'error=uidpass') !== false) {
					echo "Your username or password is incorrect!";
				}
				
			   
			 ?></h3>
       
</br>
</br>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Coffee House</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">6 , Jalan Sungai Dua| Taman Pekaka | Penang</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="menu.php">Menu</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="register.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Login</strong>
        </h2>
        <hr class="divider">
        <form action="login.php" method="post">
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Username</label>
              <input type="text" name="username" class="form-control">
            </div>
          </div>
		  
		 <div class="row">
		  <div class="form-group col-lg-4">
              <label class="text-heading">Password</label>
              <input type="password" name="pass" class="form-control">
            </div>
	   	</div>
		<div class="form-group col-lg-12">
              <button type="submit" name="login" value="true" class="btn btn-secondary">Login</button>
            </div>
			
        </form>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Coffee House 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>