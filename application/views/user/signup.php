<html>
<head>
	<title>CI Tutorials</title>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="login-signup-form animated fadeInDown">
	<div class="form">
		<h2 class="title">Create Your Account Freely</h2>
		<form action="<?php echo base_url('save')?>" method="post">
			<input type="text" autofocus name="name" placeholder="Full Name"/>
			<input type="text" name="phone" placeholder="Phone"/>
			<input type="email" name="email" autocomplete="off" placeholder="Email"/>
			<input type="password" name="password" placeholder="Password"/>
			<input type="password" name="confirm_password" placeholder="Confirm Password"/>
			<button type="submit" class="btn btn-block">SignUp</button>
			<p class="message">
				Already  Registered <a href="<?php echo base_url('login') ?>">Login</a>
			</p>
		</form>
	</div>
</div>
</body>
</html>
