<!doctype html>
<html lang="en">
  <head>
  	<title>Masuk | AplPeMas Desa Bungurberes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
  </head>
	<body class="img js-fullheight" style="background-image: url(https://desa-bungurberes.kuningankab.go.id/sites/des2108/files/styles/header/public/photo-header/IMG-20210906-WA0031.jpg?itok=PR8bsaIS); ">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<img src="../images/logo.png"width="150px" height="150px"/></a>
				    <p>-----------------------------------------------------------------------------</p>
					<h2 class="heading-section"><p style = "font-family:Brush Script MT;">Selamat Datang Di Aplikasi Pengaduan Masyarakat Desa Bungurberes</p></h2>
					<p>-----------------------------------------------------------------------------</p>
				</div>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form class="form-signin" method="POST" action="/login">
				  <?php if(session()->getFlashdata('msg')):?>
				  <div class="alert alert-success" ><?= session()->getFlashdata('msg') ?></div>
				  <?php endif;?> 
		      		<div class="form-group">
					  <i class="fa fa-user fa-lg"></i><input name="txtUsername" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
				<i class="fa fa-lock fa-lg"></i><input name="txtPassword" id="password-field" type="password" class="form-control" placeholder="Password" required>
				<br/>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password fa-lg"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary bg-primary submit px-3">Login !</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash;Masyarakat Belum Punya Akun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="/register" class="px-2 py-2 mr-md-1 rounded"> <i class="fa-solid fa-hand-back-point-left"></i>Registrasi</a>
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
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

	</body>
</html>
