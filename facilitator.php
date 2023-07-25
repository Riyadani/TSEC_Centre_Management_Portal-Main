<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-----<title>Responsive Profile Cards | CodingLab</title>----->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="css/nav.css">
  <!-- <link rel="stylesheet" href="css/media.css"> -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <?php require 'header.php'; ?>




  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    ::selection {
      background: #8e44ad;
      color: #fff;
    }

    html,
    body {
      display: grid;
      height: 100%;
      place-items: center;
      background: black;
    }

    .container {
      max-width: 1100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px;
    }

    .container .box {
      width: calc(33% - 10px);
      background: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px 30px;
      border-radius: 5px;
    }

    .box .quote i {
      margin-top: 10px;
      font-size: 45px;
      color: #17c0eb
    }

    .container .box .image {
      margin: 10px 0;
      height: 150px;
      width: 150px;
      background: #8e44ad;
      padding: 3px;
      border-radius: 50%;
    }

    .box .image img {
      height: 100%;
      width: 100%;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #fff;
    }

    .box p {
      text-align: justify;
      margin-top: 8px;
      font-size: 16px;
      font-weight: 400;
    }

    .box .name_job {
      margin: 10px 0 3px 0;
      color: black;
      font-size: 18px;
      font-weight: 600;
    }



    @media (max-width:1045px) {
      .container .box {
        width: calc(50% - 10px);
        margin-bottom: 20px;
      }
    }

    @media (max-width:710px) {
      .container .box {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php require 'nav_bar.php'; ?>



  <div class="container" style="margin-left:355px ;margin-top:50px">
    <div class="box">
      <div class="image">
        <img src="images/anshul.jpg">
      </div>
      <div class="name_job">Anshul Bhatnagar</div>

    </div>

  </div>
  <div class="container">
    <div class="box">
      <div class="image">
        <img src="images/vedant.jpg">
      </div>
      <div class="name_job">Vedant Pandya</div>

    </div>
    <div class="box">
      <div class="image">
        <img src="images/dimple.jpeg">
      </div>
      <div class="name_job">Dimple Barot</div>

    </div>
    <div class="box">
      <div class="image">
        <img src="images/mrudang.jpg">
      </div>
      <div class="name_job">Mrudang Bhavsar</div>

    </div>
    <div class="box" style="margin-top: 20px;">
      <div class="image">
        <img src="images/alkesh.jpg">
      </div>
      <div class="name_job">Alkesh Chauhan</div>

    </div>
    <div class="box" style="margin-top: 20px;">
      <div class="image">
        <img src="images/pinkesh.jpg">
      </div>
      <div class="name_job">Pinkesh Sargara</div>

    </div>
  </div>
</body>
<footer>
  <div class="footerText text-center" style="font-weight: bolder;">© TCIT 2022&nbsp;&nbsp;|&nbsp;&nbsp;All Rights
    Reserved&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div align="center" class="socialbtns">
    <ul>
      <li><a href="#">facebook</a></li>&nbsp;|
      <li><a href="#">twitter</a></li>&nbsp;|
      <li><a href="#">linkedin</a></li>
    </ul>
  </div>
</footer>

</html>