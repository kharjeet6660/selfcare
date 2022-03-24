<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




	<title></title>
</head>
<body>
	<div class="navbar navbar-dark bg-dark my-5">
		<div class="container">
			<h1 style="text-align:center; color: white;">VIEW USER</h1>
		</div>
	</div>
	<div class="row" >
		<div class="col-md-12">
			<?php 
			$success = $this->session->userdata('success'); 
			if ($success != "") {
				?>
				<div class="alert alert-success"><?php echo $success;?></div>
				<?php
			}
			?>

			<?php 
			$failure = $this->session->userdata('failure'); 
			if ($failure != "") {
				?>
				<div class="alert alert-failure"><?php echo $failure;?></div>
				<?php
			}
			?>
		</div>
	
		<div class="col-md-8">
			<table class="table table-striped" style="margin:0 auto; text-align: center;">
				<tr>
					<th>Id</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Edit</th>
			        <th>Delete</th>
				</tr>
