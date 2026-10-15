<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>/assets/frontend/img/track/two-people.png">
	<title><?= $title ?></title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?php echo base_url()?>/assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?php echo base_url()?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?php echo base_url()?>/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
	<link href="<?= base_url() ?>/assets/datatable/datatables.min.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-100">
	
	<?= $this->include('layout/menu') ?>

	<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true"> 
			<div class="container-fluid py-1 px-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
						<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"><?= $halaman ?></a></li>
						<li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
					</ol>
					<h6 class="font-weight-bolder mb-0"></h6>
				</nav>
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
					<div class="ms-md-auto pe-md-3 d-flex align-items-center">
						<!-- <div class="input-group">
						<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Type here...">
						</div> -->
					</div>
					<ul class="navbar-nav  justify-content-end">
						<li class="nav-item d-flex align-items-center">
							<a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
								<i class="fa fa-user me-sm-1"></i>
									<?php 
										$session = session(); 
										$nama = $session->get('nama');
                                    ?>
									<span class="d-sm-inline d-none"><?= $nama ?></span>
							</a>
						</li>
						<li class="nav-item px-3 d-flex align-items-center">
						<!-- <a href="javascript:;" class="nav-link text-body p-0">
							<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
						</a> -->
						</li>
						<li class="nav-item dropdown pe-2 d-flex align-items-center">
							<a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
							</a>
							<ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
								<li class="mb-2">
									<a class="dropdown-item border-radius-md" href="#">
										<div class="d-flex py-1">
											<div class="my-auto">
												<img src="<?php echo base_url()?>/assets/frontend/img/track/user.png" class="avatar avatar-sm  me-3 ">
											</div>
											<div class="d-flex flex-column justify-content-center">
												<h6 class="text-sm font-weight-normal mb-1">
												<span class="font-weight-bold">Akun</span>
												</h6>
												<p class="text-xs text-secondary mb-0">
												<i class="fa fa-cogs me-1"></i>
												Setting Akun
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="mb-2">
									<a class="dropdown-item border-radius-md" href="<?= base_url('logout') ?>">
										<div class="d-flex py-1">
											<div class="my-auto">
												<img src="<?php echo base_url()?>/assets/frontend/img/track/shutdown.png" class="avatar avatar-sm  me-3 ">
											</div>
											<div class="d-flex flex-column justify-content-center">
												<h6 class="text-sm font-weight-normal mb-1">
												<span class="font-weight-bold">Keluar</span>
												</h6>
												<p class="text-xs text-secondary mb-0">
												<i class="fa fa-sign-out me-1"></i>
													Keluar Aplikasi
												</p>
											</div>
										</div>
									</a>
								</li>
								
							</ul>
						</li>
						<li class="nav-item d-xl-none ps-3 d-flex align-items-center">
							<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
								<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								</div>
							</a>
						</li>
						<li class="nav-item px-3 d-flex align-items-center">
						<!-- <a href="javascript:;" class="nav-link text-body p-0">
							<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
						</a> -->
						</li>
						<!-- Notif Informasi -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<?= $this->renderSection('content') ?>
		
		<footer class="footer pt-3  ">
			<div class="container-fluid">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-lg-6 mb-lg-0 mb-4">
						<div class="copyright text-center text-sm text-muted text-lg-start">
						© <script>
							document.write(new Date().getFullYear())
						</script>,
						<a href="#" class="font-weight-bold" >Pemerintah - Kab. Jayapura </a>
					</div>
				</div>
			</div>
		</footer>
	</main>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url()?>/assets/datatable/datatables.min.js"></script>
    
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>