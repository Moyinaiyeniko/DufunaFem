<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chef Mo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="index.php">
        <img src="image/logoo.png" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Menu<span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a></li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
        </ul>
      </div>
    </nav>
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="height:80% !important;">
        <div class="carousel-item active">
          <img
            class="w-100 img-fluid"
            src="image/burger-3199088_1280.jpg"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="w-100 img-fluid"
            src="image/pizza-329523_1280.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="w-100 img-fluid"
            src="image/abstract-1238657_1280.jpg"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Description of ow the system works-->
    <div class="container-fluid">
      <h2 class="text-center" id="how">How it Works</h2>
      <div class="row" id="direction">
        <div
          class="col-sm-4"
          style="display: inline-block; text-align: center;"
        >
          <i class="fa fa-search icon"></i>
          <p class="text-center">Find your Favourite Meal</p>
        </div>
        <div
          class="col-sm-4"
          style="display: inline-block; text-align: center;"
        >
          <i class="fa fa-truck"></i>
          <p class="text-center">We deliver your Meal</p>
        </div>
        <div
          class="col-sm-4"
          style="display: inline-block; text-align: center;"
        >
          <i class="fa fa-credit-card"></i>
          <p class="text-center">Pay on Delivery</p>
        </div>
      </div>
    </div>
    <!--A section Displaying the Food Menu-->
    <div class="container-fluid" id="menu">
      <h2 class="text-center">Food Menu</h2>
      <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/cake-1971552_640.jpg"
              style="height:260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Lacampagne Cheese Cake with chocolate topping
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$65</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/cupcakes-690040_640.jpg"
              style="height:260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Cupcakes with Butter Icing and chocolate toppings
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$50</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/pancakes-2291908_640.jpg"
              style="height:260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Pancakes with glazed syrup and strawberries.
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$40</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/food-712665_640.jpg"
              style="height:260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Salmon with black sauce and spice.
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$60</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/hamburger-1238246_640.jpg"
              style="height:260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Hamburger stuffed with beef and cheese.
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$60</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="image/salmon-518032_640.jpg"
              height="260px;"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text text-center">
                Roasted salmon filled with sauce, with vegetables.
              </p>
              <div class="d-flex">
                <div class="mr-auto p-2"><h5>$55</h5></div>
                <div class="p-2">
                  <a class="btn order-click" href="" role="button">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- A section that speaks briefly about the system-->
    <div class="container-fluid" id="promote">
      <div class="row">
        <div class="col-sm">
          <img
            class="img-responsive center-block"
            src="image/imageedit_2_6334294028.png"
            width="500px;"
            height="300px;"
          />
        </div>
        <div class="col-sm">
          <h3 class="text-center text-white">Best Menu Order App</h3>
          <p class="text-center text-white">
            We have various meal options you can order from and you can be
            certain you would get exactly what you order for. We also have a
            swift delivery service and a good customer service.
          </p>
        </div>
      </div>
    </div>
  <!--A section that dislays newsletter that allows users subscribe-->
    <div class="container-fluid" id="newsletter">
      <div class="row">
        <div class="col-md-12 col-sm-6">
          <div class="float-sm-left">
            <p class="text-center">
              Kindly subscribe to get updates from our Newsletter:
            </p>
          </div>
          <div class="float-sm-right">
            <form method="post" action="subscribe.php">
            <div class="input-group ">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email"  aria-label="User's Email"
                aria-describedby="basic-addon2" required>
              <div class="input-group-append">
                <input class="btn" name="submit" value="Subscribe" type="submit"></button>
              </div>
            </div>
</form>
          </div>
        </div>
      </div>
    </div>
  <!--Footer-->
    <footer class="mainfooter" role="contentinfo">
      <div class="footer-middle">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-6 pl-4">
              <!-- Column1 -->
              <div class="footer-pad">
                <h4>Address</h4>
                <address>
                  <ul class="list-unstyled">
                    <li>
                      Leadway Estate<br />
                      Gbagada Phase 2<br />
                      Lagos,Nigeria<br />
                    </li>
                  </ul>
                </address>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6">
              <!-- Column1 -->
              <div class="footer-pad">
                <h4>Contact</h4>

                <ul class="list-unstyled">
                  <li>
                    Phone-1: 09034567892<br />
                    Phone-2: 08056789234<br />
                    Email: maiyeniko@gmail.com<br />
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6">
              <!-- Column1 -->
              <div class="footer-pad">
                <h4>Website Information</h4>
                <ul class="list-unstyled">
                  <li><a href="signin.php">Sign In</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-lg-12 col-md-12">
              <!-- Footer Bottom -->
<a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
<a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
<a href="https://gmail.com/"><i class="fa fa-google"></i></a>
              <p>Connect with us on our various platforms</p>
              <p class="text-center">
                &copy; Copyright 2016 - City of USA. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
<!--Javascript section for passing food option data--> 
    <script>
      $('a.btn').click( function(evt){
        evt.preventDefault();
        var target = $(this)
        var price = target.parent().prev().find('h5')[0].textContent;
        var item = target.parent().parent().prev()[0].textContent;
        var foodItem = JSON.stringify({/*used o Convert a JavaScript object into a string*/
          price : price,
          item : item.trim()
        })
        var customUrl="/checkout.php?item=" + foodItem;
        var currentLocation = window.location.href.lastIndexOf('/');/*used o grab part of url*/
        var newUrl = window.location.href.slice(0,currentLocation)/*slice he remaining part from the url*/
        window.location.href = newUrl + customUrl;/*get current url*/
      })
    </script>
  </body>
</html>
