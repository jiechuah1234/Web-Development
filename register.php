<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
	include('header.php');
?>
</head>

<body>
	
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Sign Up</strong>
        </h2>
		
        <hr class="divider">
        <form action="signup.php" method="POST" >
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Name</label>
              <input type="text" name="name" class="form-control" required data-validation-required-message="Please fill in your name" 
			  value="<?php if (isset ($_POST['name'])) {print htmlspecialchars($_POST['name']); } ?>"/> 
            </div>
          </div>
		  
		 <div class="row">
		  <div class="form-group col-lg-4">
              <label class="text-heading">Username</label>
              <input type="text" name="username" class="form-control" required data-validation-required-message="Please fill in your username" 
			  value="<?php if (isset ($_POST['username'])) {print htmlspecialchars($_POST['username']); } ?>"/>
            </div>
	   	</div>
			
		<div class="row">
		  <div class="form-group col-lg-4">
              <label class="text-heading">Password</label>
              <input type="password" name="pass" class="form-control" required data-validation-required-message="Please fill in your password" value="<?php if (isset ($_POST['pass'])) {print htmlspecialchars($_POST['pass']); } ?>"/>
            </div>
			</div>
			
		<div class="row">
		  <div class="form-group col-lg-4">
              <label class="text-heading">Re-enter Password</label>
              <input type="password" name="confrimpass" class="form-control" required data-validation-required-message="Password does not match" value="<?php if (isset ($_POST['confrimpass'])) {print htmlspecialchars($_POST['confrimpass']); } ?>"/>
            </div>
		</div>
		
		<div class="row">
		  <div class="form-group col-lg-4">
              <label class="text-heading">Email</label>
              <input type="text" name="email" class="form-control" required data-validation-required-message="Please fill in your email" value="<?php if (isset ($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>"/>
            </div>
		</div>
		
		<div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Submit</button>
			  
            </div>
			<?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'error=empty') !== false) {
					print "Fill out all fields";	
					
				}
				
				
				if (strpos($url, 'error=username') !== false) {
					print "Username Existed!";
					
				}
				
				 if (strpos($url, 'error=name') !== false) {
					print "Please enter your Phone Number"; 
				}
				
				if (strpos($url, 'error=username') !== false) {
					print "Please enter your username"; 
					
				}
				
				if (strpos($url, 'error=pass') !== false) {
					print "Please enter your password"; 
					
				}
				
				 if (strpos($url, 'error=confrimpass') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
				
				 if (strpos($url, 'error=email') !== false) {
					print "Please enter your email address"; 
				}
			
				
				
				
				
				?>
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
