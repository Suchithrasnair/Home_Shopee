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
    <div class="container marginTop">
        <table class="table table-borderless ">
            <tr>
                <td>Name</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Comapany name</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><textarea class="form-control" name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
              
              <td></td>
              <td><button class="btn btn-primary">Submit</button></td>
            </tr>
        </table>
    </div>
</body>
</html>