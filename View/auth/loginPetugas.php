<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/stylepetugas.css">
	
	<title>Kursus</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="index.php?page=auth&aksi=authPetugas" method="POST">
			<h1>Masuk</h1>
			<br><br>
			<input type="text" placeholder="Nama" name="nama"/>
			<input type="password" placeholder="Password" name="password"/>
			<button>Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Petugas!</h1>
				<p>Selamat Bekerja dan Sukses selalu</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>