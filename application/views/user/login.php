<html>
<head>
	<title>CI Tutorials</title>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
 <div class="login-signup-form animated fadeInDown">
	 <div class="form">
		 <h2 class="title">Login into your Account</h2>
		 <form action="<?php echo base_url('ucheck')?>" method="post">
			 <input type="email" name="email" placeholder="email"/>
			 <input type="password" name="password" placeholder="*******"/>
			 <button type="submit" class="btn btn-block">Login</button>
			 <p class="message">
				 Not Registered <a href="<?php echo base_url('signup') ?>">Create Account</a>
			 </p>
		 </form>
	 </div>
 </div>
</body>
</html>
