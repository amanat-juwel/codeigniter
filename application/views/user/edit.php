<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update User</title>
	<?php $this->load->view('layouts/header'); ?>

</head>
<body>
	<?php $this->load->view('layouts/navbar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form name="createUser" action="<?php echo base_url().'user/edit/'.$user['id']; ?>" method="POST" role="form">
					<legend>Update</legend>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo set_value('name', $user['name']); ?>">
						<?php echo form_error('name'); ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo set_value('email',$user['email']); ?>">
						<?php echo form_error('email'); ?>
					</div>
					<button type="submit" class="btn btn-primary">Save Changes</button>
					<a href="<?php echo base_url().'user'; ?>" class="btn btn-danger ">Cancel</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>