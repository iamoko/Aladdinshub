<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <title>Aladins Hub</title>
   <link href="<?php echo base_url('assets/css') ?>/icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/css') ?>/responsive.css" rel="stylesheet">
</head>
<body>
	<?php

	if($change == 1){
		$this->load->view('login');
	}else if($change == 2){
		$this->load->view('Forgot_password');
	}else if($change == 3){
		$this->load->view('register');
	}else if($change == 4){
		$this->load->view('reset_password');
	}

	?>


    <!--Begin core plugin -->
    <script src="<?php echo base_url('assets/js') ?>/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js') ?>/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/plugins/moment') ?>/moment.js"></script>
    <script  src="<?php echo base_url('assets/js') ?>/jquery.slimscroll.js "></script>
    <script src="<?php echo base_url('assets/js') ?>/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url('assets/js') ?>/functions.js"></script>
    <!-- End core plugin -->

</body>

</html>
