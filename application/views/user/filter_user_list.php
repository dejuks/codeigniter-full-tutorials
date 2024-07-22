<main>
	<div style="display: flex; justify-content: space-between; align-items:center ">
		<h1>Users</h1>
		<a href="<?php echo base_url('user-registration') ?>" class="btn-add">Add new</a>
	</div>

	<?php if ($this->session->flashdata('success_msg')) { ?>
		<div class="alert">
		<p class="message">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</p>
		</div>
	<?php } else if ($this->session->flashdata('error_msg')) { ?>
		<p class="notification">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</p>
		</div>
	<?php } ?>
	<div class="card animated fadeInDown">
		<table>
			<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php $no = 0;
			foreach ($users as $user) {
				$no++; ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $user->name; ?></td>
					<td><?= $user->email; ?></td>
					<td><?= $user->created_at; ?></td>
					<td>
						<a href="<?php echo base_url('edit/' . $user->id) ?>" class="btn btn-edit">Edit</a>
						<a onclick="return confirm('Are you sure want to delete these data ?')"
						   href="<?php echo base_url('delete/' . $user->id) ?>" class="btn btn-delete">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</main>
