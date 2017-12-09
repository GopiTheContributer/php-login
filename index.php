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
    	<nav class="navbar navbar-default">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<a href="#" class="navbar-brand" id="sitename">PHP Login page</a>
    			</div>
    			<ul class="nav navbar-nav pull-right">
			      <li class="active"><a href="index.php">Home</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			    </ul>
    		</div>
    	</nav>
   		<div class="container">
   			<div class="login-form-design">
    			<input type="text" id="username" class="form-control">
    		</div>
    		<div>
    			<input type="password" id="password" class="form-control">
    		</div>
    		<BUTTON class="btn btn-success" id="btnLogin">Login</BUTTON>
    	</div>
    </BODY>
</html>

<script>
	$('#btnLogin').click(function(){
		if(($('#username').val() == '' || $('#username').val() == null 
			&& $('#password').val() == '' || $('#password').val() == null))	
		{
			alert('both the fields are mandatory');
			return;
		}
        
        let username = $('#username').val();
        let password = $('#password').val();

		//if login success
		$.ajax({
			url:'validationcheck.php',
			type:'POST',
			data: { 'username': username,
                    'password': password
                 },
			success: function(result){
                
                if(result == 'invalid login')
                { console.log('login failure'); return; }

                window.location.href = 'dashboard.php';

            },
            error: function(err){
                console.log('error :' + err.responseText.toString());
            }
		});	
	});
</script>