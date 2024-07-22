
<main>
	<div style="display: flex; justify-content: space-between; align-items:center ">
		<h1>Edit Users</h1>
		</div>
	<div class="card animated fadeInDown">
		<form action="<?php echo base_url('update/'.$user->id)?>" method="post">
			<input type="text" required  autofocus name="name" value="<?= $user->name;?>" placeholder="Full Name"/>
			<input type="text" name="phone" value="<?= $user->phone;?>" placeholder="Phone"/>
			<input type="email" required name="email" value="<?= $user->email;?>" autocomplete="off" placeholder="Email"/>
			<input type="password" name="password"  placeholder="Password"/>
			<button type="submit" class="btn btn-edit">Update</button>

		</form>
	</div>
</main>
