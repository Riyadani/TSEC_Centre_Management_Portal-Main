<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta charset="UTF-8">
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
  	<meta name="author" content="John Doe">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link rel="stylesheet" href="css/media.css">
      <link rel="stylesheet" href="css/nav.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">


	  <?php require 'header.php'; ?>

	<title>Contact Form | _tirth_bhatt_offcial</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.nav-link,.text-one,.text-two{

	color:white;
}
		body{
            background-color: black;
			
        }
		.container
		{
			width: 80%;
			background:white;
			border-radius: 6px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			padding: 30px 60px 40px 40px;
            position:relative;
            margin-top: 80px;
            
		}
		.container .content
		{
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.container .content .left-side
		{
			width: 25%;
			height: 100%;
			margin-top: 15px;
			position: relative;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		.content .left-side::before
		{
			content: "";
			position: absolute;
			height: 70%;
			width: 2px;
			right: -15px;
			top: 50%;
			transform: translateY(-50%);
			background: #afafb6;
		}
		 .content .left-side .details
		 {
		 	margin: 14px;
		 	text-align: center;
		 }
		 .content .left-side .details  i
		 {
		 	font-size: 30px;
		 	color: black;
		 	margin-bottom: 10px;
		 }
		 .content .left-side .details .topic
		 {
		 	font-size: 18px;
		 	font-weight: 500;
		 }
		 .content .left-side .details .text-one,
		 .content .left-side .details .text-two
		 {
		 	font-size: 14px;
		 	color: #afafb6;
		 }
		.container .content .right-side
		{
			width: 75%;
			margin-left: 75px;
		}
		.content .right-side .topic-text
		{
			font-size: 35px;
			font-weight: 600;
			color: black;
		}
		.right-side .input-box
		{
			height: 50px;
			width: 100%;
			margin: 12px 0;
		}
		.right-side  .input-box input,
		.right-side  .input-box textarea
		{
			height: 100%;
			width: 100%;
			border: none;
			font-size: 16px;
			background: #F0F1F8;
			border-radius: 6px;
			padding: 0 15px;
			resize: none;
		}
		.right-side .message-box
		{
			min-height: 110px;
		}
			::-webkit-scrollbar{
			width: 7px;
			height: 7px;
			}
			::-webkit-scrollbar-thumb{
			background: #000000;
			border: 10px solid #0F0E0E;
			border-radius: 30px;
			}
			::-webkit-scrollbar-thumb:hover{
			background: #380538;
			}
			::-webkit-scrollbar-track{
			background: #1F1414;
			border-radius: 0px;
			box-shadow: inset -10px 10px 30px 30px #F0F0F0;
		}


		.right-side .button
		{
			display: inline-block;
			margin-top: 12px;
		}
		.right-side .button input[type="submit"]
		{
			
			font-size: 18px;
			outline: none;
			border: none;
			padding: 8px 16px;
			border-radius: 6px;
			font-weight: 500;
			cursor: pointer;
			transition: all 0.3s ease;
            color: #fff;
    background-color: #020202;
		}
		.button input[type="submit"]:hover
		{
            background: #fff;
    color: #020202;
		}

			::-webkit-scrollbar {
  width: 10px;
  border-radius: 15%;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

		@media(max-width:950px)
		{

			.container
		{
			width: 90%;
			padding: 30px 35px 40px 35px;
		}

		}
			@media(max-width:820px)
		{

			.container
		{
			margin: 40px 0;
			height: 100%;
		}
			.container .content
			{
				flex-direction: column-reverse;
			}
			.container .content .left-side
			{
				width: 100%;
				flex-direction: row;
				margin-top: 40px;
				justify-content: center;
				flex-wrap: wrap;
			}
			.container .content .left-side::before
			{
				display: none;
			}
			.container .content .right-side
			{
				width: 100%;
				margin-left: 0;
			}
		}
	</style>
</head>
<body>
<nav id="nav" class="navbar navbar-expand-sm">
    <div class="container-fluid" style="color:white;">
      <a class="navbar-brand" href="home.php"><img src="images/logo.png" width="150px" height="40px"></a>
      <button class="navbar-toggler" style="background:#fff;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php" target="blank"> <u>About</u></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="home.php">
              Cources
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facilitator.php">Facilitator</a>
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
	<div class="container">
		<div class="content">
			<div class="left-side">
				<div class="address details">
					<i class="fas fa-map-marker-alt"></i>
					<div class="topic">Address</div>
					<div class="text-one">Web Development</div>
					<div class="text-two">Vadodra</div>
				</div>

				<div class="address details">
					<i class="fas fa-phone-alt"></i>
					<div class="topic">Phone</div>
					<div class="text-one"><a href="">+91 9857364527</a></div>
					<div class="text-two"><a href="">+91 6485946357</a></div>
				</div>

				<div class="address details">
					<i class="fas fa-envelope"></i>
					<div class="topic">Mail</div>
					<div class="text-one"><a href="">webdevelop@gmail.com</a></div>
					<div class="text-two"><a href="">mydevelop@gmail.com</a></div>
				</div>
			</div>
			<div class="right-side">
				<center><div class="topic-text">Send Message</div></center>
			
			<form action="contact_process.php" method="POST" style="padding-top: 10px;">
				<div class="input-box" style="width: 100%; display:flex;flex-direction: row;">
					<input type="text" name="fname" placeholder="Enter First Name..." required oninval-id="this.setCustomValidity('Enter First Name!')"  oninput="this.setCustomValidity('')" >

				<input type="text" name="lname" style="margin-left: 5px;"placeholder="Enter Last Name..." required oninvalid="this.setCustomValidity('Enter Last Name!')"  oninput="this.setCustomValidity('')" >
				</div>
				<div class="input-box" style="width: 100%; display:flex;flex-direction: row;">
					<input type="number" maxlength="10" minlength="10" name="phone" placeholder="Enter Phone No..." required oninval-id="this.setCustomValidity('Enter Phone No!')"  oninput="this.setCustomValidity('')" >

				<input type="email" name="mail" style="margin-left: 5px;"placeholder="Enter Your Email..." required oninvalid="this.setCustomValidity('Enter Email!')"  oninput="this.setCustomValidity('')" >
				</div>
				<div class="input-box message-box">
					<textarea name="mess" placeholder="Enter Your Message..." required oninvalid="this.setCustomValidity('Enter Message!')"  oninput="this.setCustomValidity('')" ></textarea>
				</div>
				<div class="button">
					<input type="submit" name="" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
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

</body>
</html>