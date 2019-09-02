<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USERS CRUD</title>
	<?php $this->load->view('layouts/header'); ?>
</head>
<body>
	<?php $this->load->view('layouts/navbar'); ?>

	<div class="container">
		<div class="row">

			<?php $this->load->view('layouts/message'); ?>

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Users
						<a href="<?php echo base_url().'user/create'; ?>" class="btn btn-primary btn-sm pull-right">Add</a>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Created at</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($users)) { foreach($users as $user) { ?>

								<tr>
									<td><?php echo $user['id']; ?></td>
									<td><?php echo $user['name']; ?></td>
									<td><?php echo $user['email']; ?></td>
									<td><?php echo $user['created_at']; ?></td>
									<td>
										<a href="<?php echo base_url().'user/edit/'.$user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
										<a href="<?php echo base_url().'user/delete/'.$user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								<?php } } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>