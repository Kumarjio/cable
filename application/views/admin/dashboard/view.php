<?php $session_data = $this->session->userdata('admin_details'); ?>
<h1 class="text-center">Welcome <?php echo @$session_data['session_admin_name']; ?></h1>