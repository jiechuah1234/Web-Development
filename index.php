<!DOCTYPE html>
<html lang="en">

<?php 
	include('header.php');
?>
  <body>
  

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/Coffee-Art-02.png" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg">Welcome To</div>
          <h1 class="my-2">Coffee House</h1>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>About Us</strong>
        </h2>
        <hr class="divider">
        <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/intro-pic.jpg" alt="">
        <p>Coffee House is open in Penang! We are excited to introduce our Coffee Shop & our Menu. If you crave great coffee, you will love to know that we provide alternative to chains with handcrafted coffee and espresso drinks and real food options.</p>
        <p>Our cafe delivers way beyond the traditional coffee shop favorites. Our shop also provide a wide variety of dessert such as cake and bread. </p>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Free Drink</strong>
        </h2>
        <hr class="divider">
        <p>Sign up an account at Coffee House now to get a free 1 drink coupon. Coupon only valid for 30 days so grab ur drink as soon as you sign up an account!</p>
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
