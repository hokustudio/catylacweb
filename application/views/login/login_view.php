<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catylac | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/css/bootstrap-social.css' ?>" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4" style="margin-top: 100px;">
			<div class="login-panel panel panel-default">
				<form action="<?php echo base_url()."login/verifylogin"?>" method="post" class="form-signin">
					<img src="<?php echo base_url()."assets/images/logo.png"?>" class="img-responsive" style="margin: 0 auto;"/> 
					<span style="text-align:center;"><?php echo $alert;?></span>
			        <div class="panel-body">
				        <div class="form-group">
				        	<input type="text" class="form form-control" placeholder="Username" name="username" value="<?php echo set_value('username')?>" />    
					    </div>
					    <div class="form-group">
					    	<input type="password" class="form form-control" placeholder="Password"  required="" name="password" value="<?php echo set_value('password')?>" />  
					    </div>
					    <div class="form-group">
					    	<button type="submit" class="btn btn-lg btn-primary btn-block" value="Log In" />Sign In</button>
				 		</div>
				 	</div>
			 	</form>
			 </div>
		 </div>
	</div>

</body>
</html>