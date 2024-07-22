<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>404 Error Page | CodingNepal</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estyle.css">
</head>
<body>
<div id="error-page">
	<div class="content">
		<h2 class="header" data-text="404">
			404
		</h2>
		<h4 data-text="Opps! Page not found">
			Opps! Page not found
		</h4>
		<p>
			Sorry, the page you're looking for doesn't exist. If you think something is broken, report a problem.
		</p>
		<div class="btns">
			<a href="<?php echo base_url('/login')?>">return home</a>
			<a href="<?php echo base_url('signup')?>">report problem</a>
		</div>
	</div>
</div>
</body>
</html>
