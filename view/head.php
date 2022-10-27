<!DOCTYPE html>
<html style="font-size: 16px;">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="Sample Headline">
		<meta name="description" content="">
		<meta name="page_type" content="np-template-header-footer-from-plugin">
		<title>Strona główna</title>
		<link rel="stylesheet" href="../css/main.css" media="screen">
		<link rel="stylesheet" href="../css/login.css" media="screen">
		<script class="u-script" type="text/javascript" src="../js/jquery-1.9.1.min.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="../js/main.js" defer=""></script>
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
		<link rel="stylesheet" href="../css/main_2.css" media="screen">
		<script class="u-script" type="text/javascript" src="../js/jquery-1.9.1.min.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="../js/main.js" defer=""></script>
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/bootstrap-select.min.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/select2.min.js"></script>
		<script src="../js/bootbox.min.js"></script>
		<link href="../css/jquery-ui.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/select2.min.css" />
		<link href="../css/jquery-ui.min.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="../css/util.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link href="../css/jquery-ui.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/perfect-scrollbar.css">
		<link rel="stylesheet" type="text/css" href="../css/select2.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.min.css" />
		<script src="../js/jquery-3.5.1.min.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/bootbox.min.js"></script>
		<script src="../js/main.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/sweetalert.min.js"></script>
		<script src="../js/popper.js"></script>
		<script src="../js/select2.min.js"></script>
		<script src="../js/jquery.timepicker.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="../js/bootstrap.bundle.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
		<script src="../js/jquery.timepicker.js"></script>
		<script>
			function startTimer(duration, display) {
			var timer = duration, minutes, seconds;
			var x = setInterval(function () {
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);
			
				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;
			
				display.textContent = minutes + ":" + seconds;
			
				if (--timer < 0) {
					clearInterval(x);
					display.textContent = "SESJA WYGASLA";
					window.location.href = "../action/logout.php";
							}
						}, 1000);
					}
			
					window.onload = function () {
						var fiveMinutes = '<?=$session_timeout?>',
							display = document.querySelector('#time');
						startTimer(fiveMinutes, display);
					};
		</script>
		<script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "",
			"logo": "../images/g224495cbe8d71950f452f1e5b1c8158f2abf36caad0dc8534d2de05308a9f9c8a9bef4520f8507fad84051ed694b550a02db8e438dfd1e951d797062e042bd6c_1280.png"
			}
		</script>
		<meta name="theme-color" content="#3a0e63">
		<meta property="og:title" content="Strona główna">
		<meta property="og:type" content="website">
	</head>