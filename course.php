<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/nav.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php require 'header.php'; ?>

</head>
<body>
<nav id="nav" class="navbar navbar-expand-sm">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/Logo.png" width="150px" height="40px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://www.tatastrive.com/index.html" target="blank">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.tatastrive.com/aboutStrive.html" target="blank">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Cources
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.w3schools.com/java/"  target="blank">JAVA</a></li>
                  <li><a class="dropdown-item" href="https://www.w3schools.com/css/css3_user_interface.asp">UX</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="https://www.w3schools.com/howto/howto_blog_developer_job.asp">BDE</a></li>
                  <li><a class="dropdown-item" href="https://www.w3schools.com/howto/howto_blog_developer_job.asp">AWS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
             
              <button class="bt"><a href="register.php">Register</a></button>
              &nbsp;&nbsp;&nbsp;
              <button class="bt" type="submit"> <a href="login.php">Login</a></button>
            </form>
          </div>
        </div>
      </nav>
      <div id="main">
        <img id="img" src="images/VP.PNG" alt="image">
      </div>
      <div class="col-md-4 text-center d-flex ftco-animate fadeInUp ftco-animated">
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-4 text-center d-flex ftco-animate fadeInUp ftco-animated">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/images.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</body>
</html>