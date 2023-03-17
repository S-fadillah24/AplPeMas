<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Aplikasi Pengaduan Masyarakat">
<meta name="author" content="Oya Suryana, M.Kom.">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>AplPeMas | Desa Bungurberes</title>
<!-- Bootstrap core CSS -->
<link rel="icon" type="image/ico" href="../images/favicon.ico"/>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/fontawesome/css/all.min.css" rel="stylesheet">
<meta name="theme-color" content="#563d7c">
<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}
/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */
main > .container {
padding: 60px 15px 0;
}
.footer {
background-color: #f5f5f5;
}
.footer > .container {
padding-right: 15px;
padding-left: 15px;
}
code {
font-size: 80%;
}
</style>
<!-- Custom styles for this template -->
</head>
<body class="d-flex flex-column h-100"> 
<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-lg navbar-white" style="background-color:#081869;">
    <a class="navbar-brand" href="/dashboard">
    <img src="http://desa-bungurberes.kuningankab.go.id/sites/des2108/files/desa-bungurberes.png" widht="70px" height="70px"/></a>
<button class="navbar-toggler" type="button"
     data-toggle="collapse" data-target="#navbarCollapse"
     aria-controls="navbarCollapse" aria-expanded="false"
     aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
<!-- Dropdown -->
<?php if(session()->get('level')=='admin'){?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa-solid fa-server fa-lg"></i>  Master Data </a>
    <div class="dropdown-menu bg-info">
        <a class="dropdown-item" href="/petugas/masyarakat">Data Masyarakat</a>
        <a class="dropdown-item" href="/petugas/user">User Petugas</a>
    </div>
</li>
<?php } ?>
<!-- Dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#"
    id="navbardrop" data-toggle="dropdown"><i class="fa-solid fa-users fa-lg"></i> Pengaduan Masyarakat </a>
<div class="dropdown-menu bg-info">
    <a class="dropdown-item" href="/verifikasi">Verifikasi & Validasi</a>
    <a class="dropdown-item" href="/respon">Tanggapan</a>
</div>
</li>
<!-- Dropdown -->
<?php if(session()->get('level')=='admin'){?>
<li class="nav-item ">
    <a class="nav-link " href="/laporan/pengaduan" id="navbardrop" ><i class="fa-solid fa-book fa-lg"></i> Laporan</a>
</li>
<?php } ?>
</ul>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="/logout" OnClick="return confirm('--Anda ingin keluar?--')"><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i> Logout</a>
  </li>
</ul>
</div>
</nav>
</header>