
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admindek | Admin Template</title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
		<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
		<meta name="author" content="colorlib" />
		<!-- Favicon icon -->
		<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
		<!-- Google font-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
		<!-- Required Fremwork -->
		<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
		<!-- waves.css -->
		<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
		<!-- feather icon -->
		<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
		<!-- Style.css -->
		<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
	</head>

	<body>
		<!-- [ Pre-loader ] start -->
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<!-- [ Pre-loader ] end -->
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<!-- [ Header ] start -->
				@include('admin.layouts.top-nav')
				<!-- [ Header ] end -->

				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<!-- [ navigation menu ] start -->
						@include('admin.layouts.side-menu')
						<!-- [ navigation menu ] end -->
						<div class="pcoded-content">
							@yield('content')
						</div>
						<!-- [ style Customizer ] start -->
						<div id="styleSelector">
						</div>
						<!-- [ style Customizer ] end -->
					</div>
				</div>
			</div>
		</div>

    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="../files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../files/assets/js/script.min.js"></script>
</body>

</html>
