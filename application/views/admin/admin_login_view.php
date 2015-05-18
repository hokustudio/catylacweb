<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catylac | Warna-warni Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'css/bootstrap-social.css' ?>" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
			<div class="panel-body">
				<form action="<?php echo base_url()."catylacadmin24052015/adminlogin"?>" method="post" class="form-signin">
					<div class="col-md-10 col-md-offset-2">
						<img src="images/logo.png" class="img-responsive"/> 
			        </div>
			        <div class="form-group">
			        	<input type="text" class="form form-control" placeholder="Username" required="" autofocus="" name="username" value="<?php echo set_value('username')?>" />  
				    </div>
				    <div class="form-group">
				    	<input type="password" class="form form-control" placeholder="Password"  required="" name="password" value="<?php echo set_value('password')?>" />  
				    </div>
				    <div class="form-group">
				    	<button type="submit" class="btn btn-lg btn-primary btn-block" value="Log In" />Sign In</button>
			 		</div>
			 	</form>
			 </div>
		 </div>
	</div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>
</html>