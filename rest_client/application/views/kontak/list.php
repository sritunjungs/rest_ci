<!doctype html>
<html lang="en">

<head>
	<title>Tampil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>tema/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>tema/admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>tema/admin/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>tema/admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url() ?>tema/admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>tema/admin/assets/img/apple-icon.png">
	<link rel="icon" type="<?php echo base_url() ?>tema/admin/image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url() ?>" class="active"><i class="lnr lnr-dice"></i> <span>Tampil Data</span></a></li>
						<li><a href="<?php echo base_url().'index.php/kontak/create' ?>" class=""><i class="lnr lnr-text-format"></i> <span>Form</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tampil Data</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<font color="orange">
								<?php echo $this->session->flashdata('hasil'); ?>
								</font>
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>ID</th>
												<th>Nama</th>
												<th>Nomor</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php
										foreach ($datakontak as $kontak){
										echo "<tbody>
											<tr>
												<td>$kontak->id</td>
												<td>$kontak->nama</td>
												<td>$kontak->nomor</td>
												<td>".anchor('kontak/edit/'.$kontak->id,'Edit')."
                  ".anchor('kontak/delete/'.$kontak->id,'Delete')."</td>
											</tr>
										</tbody>";
										}
										?>
									</table>
									<a href="http://localhost/rest_client/index.php/kontak/create">+ Tambah data<a>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo base_url() ?>tema/admin/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>tema/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>tema/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url() ?>tema/admin/assets/scripts/klorofil-common.js"></script>
</body>

</html>
