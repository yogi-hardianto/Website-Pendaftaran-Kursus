<!DOCTYPE html>
<html>
<head>
	<title>Petugas</title>
	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="assets/fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
	<main class="cd-main">
		<section class="cd-section index2 visible">
			<div class="cd-content style2">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Login Petugas</h3>
									<form action="index.php?page=auth&aksi=authPetugas" method="POST">
									<form>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Username" name="nama">
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group margin-bottom-30px forgot-password-field">
											<input type="password" class="form-control" placeholder="Password" name="password">
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="form-group sign-in-btn">
											<button type="submit" class="submit">Masuk</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- login slide end -->
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script src="assets/js/velocity.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>