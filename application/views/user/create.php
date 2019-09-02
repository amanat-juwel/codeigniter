<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create User</title>
	<?php $this->load->view('layouts/header'); ?>

</head>
<body>

	<?php $this->load->view('layouts/navbar'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form name="createUser" action="<?php echo base_url().'user/create'; ?>" method="POST" role="form">
					<legend>Create</legend>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
						<?php echo form_error('name'); ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
						<?php echo form_error('email'); ?>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="<?php echo base_url().'user'; ?>" class="btn btn-danger ">Cancel</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>