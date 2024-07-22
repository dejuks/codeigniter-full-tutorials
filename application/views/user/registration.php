
<main>
	<div style="display: flex; justify-content: space-between; align-items:center ">
		<h1>New Users</h1>
		</div>
	<div class="card animated fadeInDown">
		<form action="<?php echo base_url('save')?>" method="post">
			<input type="text" required  autofocus name="name" placeholder="Full Name"/>
			<input type="text" name="phone" placeholder="Phone"/>
			<input type="email" required name="email" autocomplete="off" placeholder="Email"/>
			<input type="password" name="password" placeholder="Password"/>
			<button type="submit" class="btn btn-add">Add</button>

		</form>
	</div>
</main>
