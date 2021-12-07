<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/stylesiswa.css">
	
	<title>Kursus SMP</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="index.php?page=auth&aksi=storeSiswa" method="POST">
			<h1>Daftar Diri</h1>
			<br><br>
			<input type="text" placeholder="Name" name="nama"/>
			<input type="password" placeholder="password" name="password"/>
			<input type="text" placeholder="Alamat" name="alamat"/>
			<input type="text" placeholder="Nomor HP" name="noHp"/>
			<input type="text" placeholder="Kelas" name="kelas"/>
			<button>Daftar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="index.php?page=auth&aksi=authSiswa" method="POST">
			<h1>Masuk</h1>
			<br><br>
			<input type="text" placeholder="Name" name="nama"/>
			<input type="password" placeholder="password" name="password"/>
			<button>Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
		<div class="overlay-panel overlay-left">
				<h1>Selamat Datang!</h1>
				<p>Klik masuk untuk login</p>
				<button class="ghost" name="signIn" id="signIn">Masuk</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Teman!</h1>
				<p>Klik daftar dan isi data diri untuk mendaftar kursus</p>
				<button class="ghost" name="signUp" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/jssiswa.js"></script>
</body>
</html>