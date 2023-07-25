<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login || TataStriveOfficial</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/nav.css">
  <?php require 'header.php'; ?>

</head>

<body>
  <nav id="nav" class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="images/logo.png" width="150px" height="40px"></a>
      <button class="navbar-toggler" style="background:#fff;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php" target="blank">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cources
            </a>
            <ul class="dropdown-menu " data-bs-popper="static" style="color: white;background-color:#000 ;">
              <li><a class="dropdown-item" href="jfsd.php" style="color: #fff;">JAVA</a></li>
              <li><a class="dropdown-item" href="ui,ux.php" style="color: #fff;">UI/UX</a></li>
              <li><a class="dropdown-item" href="aws.php" style="color: #fff;"> AWS</a></li>
              <li><a class="dropdown-item" href="bde.php" style="color: #fff;">BDE</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facilitator.php">Facilitator</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

          <button class="bt" style="border: 1px solid;border-radius: 10px;"><a href="register.php">Register</a></button>
          &nbsp;&nbsp;&nbsp;
        </form>
      </div>
    </div>
  </nav>


  <div class="row" align="center" style="background:#000 ;    margin-top:65px;">
    <div class="col-md-10" id="containerlong" style="width:50%;height:90%;margin:auto !important;">
      <div class="card" style="width:60%;height:80%;margin:59px !important;">

        <h3 align="center">Login</h3>
        <form action="login_process.php" method="POST">
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1"><strong>Email</strong></label>
            <input type="email" id="form2Example1" name="email" class="form-control" style="width:60%;border:1px solid #000;" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2"><strong>Password</strong></label>
            <input type="password" id="myInput" class="form-control" name="pass" maxlength="16" style="width:60%;border:1px solid #000;" />
            <input type="checkbox" onclick="myFunction()" style="padding-right:10px;"><label style="padding-left:5px;">Show Password</label>
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <div class="col-12">
            <button class="bt" type="submit" style="border: 1px solid;background: #000; color: #FFF; padding:4px;">Submit</button><br>
            <label><span><a href="login.php">For Login</a></span></label>
          </div>


          <!-- Register buttons -->
          <div class="text-center">
            Not a member? <a href="register.php">Register</a><br>
            or sign up with:
            <div>
        </form>
      </div>


    </div>
  </div>

  </div>
  <?php require 'footer.php'; ?>





  <script>
    const form = document.querySelector('form');
    const successMessage = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      successMessage.classList.add('show');
      setTimeout(() => form.submit(), 2000);
    });
  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>

</html>