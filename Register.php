<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Shoppe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bgcolor">
   
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
      <div class="container"></div>
      <div class="row"></div>
      <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
    <table class="table marginTop table-borderless">
        <tr>
            <td>First Name</td>
            <td><input type="text" class="form-control"></td>
            <td>Last Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" class="form-control"></td>
            <td>D.O.B</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" class="form-control"></td>
            <td>Email id</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
            <td>Username</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" class="form-control"></td>
            <td>Confirm password</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-success">Submit</button></td>
        </tr>
    </table>
</div>
<div class="col col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
</body>
</html>