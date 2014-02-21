<?php $session_data = $this->session->userdata('admin_details'); ?>
<h1 class="text-center">Welcome <?php echo @$session_data['session_admin_name']; ?></h1>
<br />
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue">
			<div class="visual"><i class="glyphicon glyphicon-star-empty"></i></div>
			<div class="details">
				<div class="number"><?php echo @$total_vog; ?>500</div>
				<div class="desc">Connections</div>
			</div>
			<a class="more" href="#">Total Connections <i class="glyphicon glyphicon-star-empty"></i></a>                 
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green">
			<div class="visual">
				<i class="glyphicon glyphicon-hdd"></i>
			</div>
			<div class="details">
				<div class="number"><?php echo @$total_org; ?>500</div>
				<div class="desc">Setupboxes</div>
			</div>
			<a class="more" href="#">Total Setup boxes<i class="glyphicon glyphicon-star-empty"></i></a>                 
		</div>
	</div>
</div>