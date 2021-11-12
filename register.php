<?php

include '/App/ClassLogin.php';
session_start();
if(isset($_POST['submit'])){
	$register = new RegisterController;
	$register->getData($_POST['name'], $_POST['password'], $_POST['confirm-password']);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="Assets/regist.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet" />
  <title>Register</title>
</head>

<body class="">
  <div class="container-fluid">
    <div class="row vh-100">
      <div class="left col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
      <?php
					if(isset($_POST['submit'])){
						echo "<div class='alert alert-danger text-center' role='alert'>
							'".$register->message."'
						</div>";
					}
				?>

        <form action="Routes/Route.php" method="POST" class="form container col-md-12 col-lg-8">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="email" class="form-control p-md-2" id="Username bootstrap-overrides"
              aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control p-md-2" id="password" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control p-md-2" id="Cpassword" />
          </div>
          <button type="submit" class="btn w-100 btn-primary">
            Register
          </button>
        </form>

      </div>
      <div class="right col-md-6 col-lg-6 bg-primary"></div>
    </div>
  </div>
</body>

</html>