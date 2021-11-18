<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>MAJOO INDONESIA</title>

	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/css/select2/select2.min.css" rel="stylesheet" />

	<link href="<?php echo base_url() ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body>

	<div id="wrapper">

		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<img alt="image" style="width: 100px;" src="<?php echo base_url() ?>assets/images/majoo_logo.png" />
							<span class="block m-t-xs font-bold">as <?= $this->session->userdata('username') ?></span>
						</div>
						<div class="logo-element">
							LALALA
						</div>

					<li class="<?= ($this->uri->segment(1) === 'List_pegawai') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>List_pegawai/"><i class="fa fa-group"></i> <span class="nav-label">Data Supir</span></a>
					</li>

					<li class="<?= ($this->uri->segment(1) === 'Profile') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>Profile/"><i class="fa fa-group"></i> <span class="nav-label">Profil Supir</span></a>
					</li>

					<li>
						<a href="#"><i class="fa fa-database"></i> <span class="nav-label">Master Data </span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li>
								<a href="<?php echo base_url() ?>pegawai/"><i class="fa fa-user-plus"></i> <span class="nav-label">Supir</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>Kategori/"><i class="fa fa-truck"></i> <span class="nav-label">Barang & Jasa</span></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Laporan </span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li>
								<a href="<?php echo base_url() ?>List_pegawai/"><i class="fa fa-book"></i> <span class="nav-label">Mingguan</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>pegawai/"><i class="fa fa-book"></i> <span class="nav-label">Bulanan</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>Kategori/"><i class="fa fa-book"></i> <span class="nav-label">Tahunan</span></a>
							</li>
						</ul>
					</li>
					<li class="<?= ($this->uri->segment(1) === 'Logout') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>Logout/"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
					</li>
					<!-- 
					<li class="<?= ($this->uri->segment(1) === 'List_pegawai') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>List_pegawai/"><i class="fa fa-id-card"></i> <span class="nav-label">Data Supir</span></a>
					</li>
					<li class="<?= ($this->uri->segment(1) === 'pegawai') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>pegawai/"><i class="fa fa-address-book"></i> <span class="nav-label">Master pegawai</span></a>
					</li>
					<li class="<?= ($this->uri->segment(1) === 'Kategori') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>Kategori/"><i class="fa fa-home"></i> <span class="nav-label">Master Kategori</span></a>
					</li>

					<li class="<?= ($this->uri->segment(1) === 'Logout') ? 'landing_link' : '' ?>">
						<a href="<?php echo base_url() ?>Logout/"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
					</li> -->
				</ul>

			</div>
		</nav>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					</div>
				</nav>
			</div>