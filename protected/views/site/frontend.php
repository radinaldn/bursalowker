<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>Bursa-Lowker</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/custom/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/custom/frontend/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/custom/frontend/vendor/linearicons/style.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/custom/frontend/css/main.css">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/custom/frontend/css/demo.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="frontend/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="frontend/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img height="100" src="<?= Yii::app()->request->baseUrl; ?>/images/login/pekanbaru_logo.png" alt="Klorofil Logo"></div>
								<p class="lead">Assalamualaikum, silahkan pilih kategori:</p>
							</div>
								<a href="<?= Yii::app()->request->baseUrl ?>/index.php/site/backend">
								<button type="submit" class="btn btn-primary btn-lg btn-block">OPERATOR DINAS</button></a><br>
								<a href="<?= Yii::app()->request->baseUrl ?>/index.php/site/loginpelamar">
								<button type="submit" class="btn btn-primary btn-lg btn-block">PELAMAR</button></a><br>
								<a href="<?= Yii::app()->request->baseUrl ?>/index.php/site/loginperusahaan">
								<button type="submit" class="btn btn-primary btn-lg btn-block">PERUSAHAAN</button></a><br>

							
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<b><h1 class="heading">BURSA LOWKER | Sistem Informasi Bursa Lowongan Tenaga Kerja</h1></b>
							<p>DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI RIAU</p>
							<p>©2018</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

</body>
</html>