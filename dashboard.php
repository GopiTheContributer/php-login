<?php session_start(); ?>

<!DOCTYPE>
<html>
    <head>
        <title>Login page - PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <BODY>
    	<nav class="navbar navbar-inverse">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<a href="#" class="navbar-brand" id="sitename">PHP Login page</a>
    			</div>
    			<ul class="nav navbar-nav pull-right">
			      <li class="active"><a href="index.php">Home</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
            <?php echo isset($_SESSION['user']) ? '<li><a href="logout.php">Logout</a></li>' : '' ?>
			    </ul>
    		</div>
    	</nav>
   		<div class="container">
   			<div class=""  id="welcome-user">
   				<?php echo isset($_SESSION['user']) ? 'Welcome ' . $_SESSION['user'] : header('location: index.php'); ?>
   			 </div>
    	</div>
    </BODY>
</html>