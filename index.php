<?php
	require_once("koneksi.php");
	session_start();

	if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
	{
		$sql = "select * from pengguna where email = '".$_POST['email']."' and password = '".$_POST['password']."'";

		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $db->error . ']');
		}

		if($result->num_rows > 0)
		{
			//create session for user
			$_SESSION['user'] = $_POST['email'];
		}
		else
		{
			$error_msg = "username atau kata sandi salah";
		}

	}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login - Perpustakaan</title>
    <link rel="stylesheet" href="signin.css">
    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

		<?php if(isset($_SESSION['user']) && $_SESSION['user'] != '')
		{
			echo '<div class="success_msg">';
			header("location:welcome.html");
			echo '</div>';
		}
		else
		{
		?>

<main class="form-signin">
  <form name="myForm" id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <img class="mb-4" src="logo/buku.png" alt="" width="96" height="94">
    <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
		<?php
		if(isset($error_msg))
		{
			echo '<div class="error_msg">';
			echo $error_msg;
			echo '</div>';
			unset($error_msg);
		}
	?>

    <label for="inputEmail"  class="visually-hidden">Email/Username</label>
    <input type="username" required name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" required name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
    <!--<label>
        <input type="checkbox" value="remember-me"> Ingat saya
      </label> -->
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-muted">&copy; Kelompok 5</p>
  </form>
</main>
<?php
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="script.js"></script>

  </body>
</html>
