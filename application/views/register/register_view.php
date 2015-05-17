		Register
		<form action="<?php echo base_url()."login/verifylogin"?>" method="post"> 
	        <input type="text" class="form" placeholder="Username" name="username" value="<?php echo set_value('username')?>" /> <br/><br/>
	        <input type="text" class="form" placeholder="Email" name="email" value="<?php echo set_value('email')?>" />  <br/><br/>
		    <input type="password" class="form" placeholder="Password"  name="password" value="<?php echo set_value('password')?>" /> <br/><br/>
		    <input type="text" class="form" placeholder="Your Name" name="name" value="<?php echo set_value('name')?>" /> <br/><br/>
		    <input type="text" class="form" placeholder="Address" name="address" value="<?php echo set_value('address')?>" /> <br/><br/>
		    Male<input type="radio" class="form" name="gender" value="M" />
		    Female<input type="radio" class="form" name="gender" value="F" /> <br/> <br/>
		    <button type="register" class="button expand" value="Register" />Sign Up</button>
	 	</form>