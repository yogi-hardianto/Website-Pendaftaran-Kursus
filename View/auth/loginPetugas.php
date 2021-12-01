<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/stylesiswa.css">
	
	<title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="index.php?page=auth&aksi=authPetugas" method="POST">
			<h1>Masuk</h1>
			<br><br>
			<input type="text" placeholder="Name" name="nama"/>
			<input type="password" placeholder="password" name="password"/>
			<button>Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>