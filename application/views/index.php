<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>POKES via Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand">Pokes</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
<!--                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul> -->
              </li>
            </ul>
           <!--  <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form> -->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
	<h1>Welcome to POKES!</h1>
	<a href="/Users/logout" type="button" class="btn btn-default">Log out</a>

<?php 
	if($this->session->flashdata("errors")) {
		echo $this->session->flashdata("errors");
	}
?>

	<div class="row">
        <div class="span4">
         	<h2>Register</h2>
         		<form action="/users/register" method="post">
					<p>
						<label>Name:</label>
						<input type="text" name="name">
					</p>
					<p>
						<label>Alias:</label>
						<input type="text" name="alias">
					</p>
					<p>
						<label>Email:</label>
						<input type="text" name="email">
					</p>
					<p>
						<label>Password:</label>
						<input type="password" name="password">
					</p>
					<p>
						<label>Password Confirmation:</label>
						<input type="password" name="password_confirmation">
					</p>
					<p>
						<label>Date of Birth:</label>
						<input type="date" name="birthdate">
					</p>
					<input type="submit" value="Register">				
				</form>
        </div>
        <div class="span4">
          	<h2>Login</h2>
          		<form action="/users/login" method="post">
					<p>
						<label>Email:</label>
						<input type="text" name="email">
					</p>
					<p>
						<label>Password:</label>
						<input type="password" name="password">
					</p>
					<input type="submit" value="Login">				
				</form>
       	</div>

    </div>

    <hr>

    <footer>
        <p>&copy; Pete Kang 2016</p>
        	<p>session data:</p>
    	<? var_dump($_SESSION) ;?>
    </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
