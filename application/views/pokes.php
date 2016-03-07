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
	      <h1>Welcome <?= $alias; ?>!</h1>
	      <a href="/Users/logout" type="button" class="btn btn-danger">Log out</a>

<?php 
      	if($this->session->flashdata("errors")) {
      		echo $this->session->flashdata("errors");
      	}
?>
        <div class="row">
          <h4><?php echo $count_pokes['total'];?> of people poked you!</h4>
<?php 
              foreach ($other_peoples_pokes as $poke) 
              {
?>
                <p><?= $poke['friend'];?> poked you <?= $poke['poke_total'];?> times!</p>
<?php
              }
?>
        </div>
      	<div class="row">
          <h4>People you may want to poke: </h4>
          <table class="table table-striped">
            <thead>
              <th>Name</th>
              <th>Alias</th>
              <th>Email</th>
              <th>Poke History</th>
              <th>Action</th>
            </thead>
            <tbody>
<?php 
              foreach ($user_pokes as $poke) 
              {
?>
              <tr>
                <td><?= $poke['friend_name'];?></td>
                <td><?= $poke['alias'];?></td>
                <td><?= $poke['email'];?></td>
                <td><?= $poke['poke_total'];?> pokes</td>
                <td><a href="/pokes/poke_em/<?= $poke['friend'];?>" type="button" class="btn btn-danger">Poke!</a></td> 
              </tr>
<?php
              }
?>
            </tbody>
          </table>

        </div>
 
      </div>
      <footer>
        <hr>
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
