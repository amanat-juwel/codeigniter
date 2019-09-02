<?php $success = $this->session->userData('success'); if($success != ''){ ?>
<div class="col-md-12">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success</strong> <?php echo $success; ?>
	</div>
</div>
<?php } ?>

<?php $failure = $this->session->userData('failure'); if($failure != ''){ ?>
<div class="col-md-12">
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success</strong> <?php echo $failure; ?>
	</div>
</div>
<?php } ?>