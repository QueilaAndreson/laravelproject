<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo config('app.url'); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo config('app.url'); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo config('app.url'); ?>assets/js/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      
        body {
            max-width:100%;
            overflow-x: hidden;
            font-family: cursive;
            background-color: #e6f4fa;
        }
        .card {
          background-color: #e2f2f5;
          text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pizza Zone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="padding: 0% 0% 0% 30%;">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo config('app.url'); ?>vegpizza">Our Menu</a>
                <a class="nav-item nav-link" href="<?php echo config('app.url'); ?>vegpizza">Veg</a>
                <a class="nav-item nav-link" href="<?php echo config('app.url'); ?>vegpizza">Non veg</a>
                <a class="nav-item nav-link " href="<?php echo config('app.url'); ?>vegpizza">Starter</a>
                <a class="nav-item nav-link " href="<?php echo config('app.url'); ?>vegpizza">Contact </a>
                <form class="form-inline" style="display : flex;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Enter PIN code" aria-label="Enter PIN code">
                    <button class="btn btn-outline-success my-sm-0" data-toggle="modal" data-target="#expecteddeliverytime" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h6>welcome 
      <?php echo  session('user_name') ?>
    </h6>
    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo config('app.url'); ?>assets/images/p1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo config('app.url'); ?>assets/images/p2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo config('app.url'); ?>assets/images/p3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>  --}}
    <div class="row" style="padding: 1% 1% 1% 1%;">
        <div class="col-sm-6" style="width: 25%">
            <div class="card">
                <img class="card-img-top" src="<?php echo config('app.url'); ?>assets/images/vegp1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Veg Pizza</h5>
                    <p class="card-text">Treat yourself to the best veggie pizza that’s completely customizable to your tastes!</p>
                    <a href="<?php echo config('app.url'); ?>vegpizza" class="btn btn-info">Go Veg</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6" style="width: 25%">
            <div class="card">
                <img class="card-img-top" src="<?php echo config('app.url'); ?>assets/images/non_veg/1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Non veg pizza</h5>
                    <p class="card-text"> Plan your next pizza party using foolproof recipe for making perfect non veg pizza from scratch every time!</p>
                    <a href="<?php echo config('app.url'); ?>vegpizza" class="btn btn-info">Go Non_Veg</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6" style="width: 25%">
            <div class="card">
                <img class="card-img-top" src="<?php echo config('app.url'); ?>assets/images/non_veg/12.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Starters</h5>
                    <p class="card-text">With over 50 mouth-watering dishes offering the best of Indian cuisines at unbeatable prices and is a must try!</p>
                    <a href="<?php echo config('app.url'); ?>vegpizza" class="btn btn-info">Go Startes</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6" style="width: 25%">
            <div class="card">
                <img class="card-img-top" src="<?php echo config('app.url'); ?>assets/images/non_veg/11.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">make your own pizza</h5>
                    <p class="card-text">Make your own pizza with your own choices by selecting toppings and everything ! </p>
                    <a href="<?php echo config('app.url'); ?>vegpizza" class="btn btn-info">Make mine</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#expecteddeliverytime" data-whatever="@mdo">Open modal for @mdo</button> --}}
<div class="modal fade" id="expecteddeliverytime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Expected delivery time 19 mints 30 secs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Today Message:</label>
            <textarea class="form-control" id="message-text">ANYONE WHO SAYS THAT MONEY CANNOT BUY HAPPINESS HAS CLEARLY NEVER SPENT THEIR MONEY ON PIZZA.😍</textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
      </div>
    </div>
  </div>
</div>

    {{-- {{-- <h1>foodcard home</h1> --} --}}
 
    <!-- Footer -->
<footer class="text-center text-lg-start text-secondary bg-dark">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/QueilaAndreson/laravelproject" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Pizza Zone
            </h6>
            <p>
              
            Let’s talk about pizza. If you’re a pizza lover, chances are the phrase “too much pie” seldom crosses your lips, and happily,
            there’s a world of cheesy, saucy goodness out there, just waiting to tickle your taste buds. 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              About Us
            </h6>
            <p>
              <a href="#!" class="text-reset">Terms and Conditions</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help and Support</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Delivery Policy</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Privacy Policy</a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              pizzazone@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="#">pizzazone.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

</html>