<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Государственная Система Мониторинга</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link type="text/css" rel="stylesheet" href="css/fontawesome.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/app.css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script type="text/javascript" src="js/tether.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/amchartcore.js"></script>
	<script type="text/javascript" src="js/amchart.js"></script>
	<script type="text/javascript" src="js/amchart-theme.js"></script>
	<script type="text/javascript" src="js/amchart-animation.js"></script>
	<script type="text/javascript" src="js/core.js"></script>
	<script type="text/javascript" src="js/CountUp.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

</head>
    <body>
        <div class="responsive">
					<div class="header row no-gutters">
							<div class="col-5">
								<div class="power">
									<i class="fas fa-power-off"></i>
								</div>
								<p class="gos-name">
									@yield('MainTitleKG')
								</p>
							</div>
							<div class="col-2 main-logo">
									<p class="logo"></p>
									<div class="main-logo-bottom"></div>
							</div>
							<div class="col-5">
								<p class="gos-name">
									@yield('MainTitleRU')
								</p>
								<div class="exit" onclick="javascript:toggleFullScreen()">
									<i id="toggleFullScreen" class="fas fa-expand-arrows-alt"></i>
								</div>
							</div>
					</div>
            @yield('content')
			<div class="row no-gutters bottom-copyright">
				<div class="col-5 bottom-copyright-left"></div>
				<div class="col-2 copyrighted"><span class="copyright-text">2019 © Разработка ГП “Инфо-Система” | Все права защищены</span></div>
				<div class="col-5 bottom-copyright-right"></div>
			</div>
        </div>
    </body>
</html>
