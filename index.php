<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Shoppe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body class="bgcolor">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <h2>HOME SHOPPE</h2>
            </div>
            <div class="col col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <p>Welcome to our online store</p>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<a class="navbar-brand" href="index.php">HOME</a>


<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="About.php">ABOUT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Contact.php">CONTACT</a>
  </li>

  <!-- Dropdown -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="index.php" id="navbardrop" data-toggle="dropdown">
      MY ACCOUNT
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Register.php">Register</a>
      <a class="dropdown-item" href="Login.php">Login</a>
    </div>
  </li>
</ul>
</nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xs-2">
                <table class="table tableCat marginTop">
                    <tr>
                        <td style="background-color: brown;">
                            <h3><i>CATEGORIES</i></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile Phones</td>
                    </tr>
                    <tr><td>Desktops</td></tr>
                    <tr>
                        <td>Laptops</td>
                    </tr>
                    <tr>
                        <td>Accesories</td>
                    </tr>
                    <tr>
                        <td>Softwares</td>
                    </tr>
                    <tr>
                        <td>Sports&Fitness</td>
                    </tr>
                    <tr>
                        <td>Footware</td>
                    </tr>
                    <tr>
                        <td>Jewellery</td>
                    </tr>
                    <tr>
                        <td>Clothing</td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-md-8 col-sm-8 col-lg-8 col-xs-8 marginTop">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="1000">
                            <img class="d-block w-100" src="../images/Clearance2.jpg" alt="First slide">

                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img class="d-block w-100" src="../images/download.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item" data-interval="1000">
                            <img class="d-block w-100" src="../images/clearance1.jpg" alt="Third slide">
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
            </div>
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xs-2"></div>
        </div>

</body>

</html>