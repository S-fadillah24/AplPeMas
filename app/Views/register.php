<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi | AplPeMas Desa Bungurberes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://desa-bungurberes.kuningankab.go.id/sites/des2108/files/styles/header/public/photo-header/IMG-20210906-WA0031.jpg?itok=PR8bsaIS );">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><p style = "font-family:Brush Script MT;">Selamat Datang Di Form Registrasi Pengaduan Masyarakat Desa Bungurberes</p></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="/masyarakat/daftar" method="POST" class="signup-form">
				  <?php if(session()->getFlashdata('msg')):?>
				  <div class="alert alert-success" ><?= session()->getFlashdata('msg') ?></div>
				  <?php endif;?> 
                  <div class="form-group">
		      			<input name="txtNik" type="text" maxlength="16" class="form-control" placeholder="NIK" required>
                    </div>
					<div class="form-group">
		      			<input name="txtNama" type="text" class="form-control" placeholder="Nama" required>
                    </div>
                      <div class="form-group">
		      			<input name="txtUsername" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="txtPassword" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<div class="form-group">
		      			<input name="txtTelp" type="text" maxlength="13" class="form-control" placeholder="Telp" required>
                    </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Daftar</button>
	            </div>
	          </form>
			  <p class="w-100 text-center">&mdash; Sudah Punya Akun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="/index.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Kembali!</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
