<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>No Limit Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="https://kit.fontawesome.com/dc82b1705e.js" crossorigin="anonymous"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php include 'utilities/navbar.php' ; ?>

		<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>CHALLENGER <?php echo $prenom." ".$nom ?> </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="col-md-14 col-md-offset-2 text-left colorlib-heading animate-box" style="margin-left: 2rem;">
						<label>photo avant/après</label>&nbsp;&nbsp;
						<img src="https://www.metrorollerdoors.com.au/wp-content/uploads/2018/02/unavailable-image.jpg" height="500px" width="310px"/>
						<img src="https://www.metrorollerdoors.com.au/wp-content/uploads/2018/02/unavailable-image.jpg" height="500px" width="310px">
						<label style="padding-left: 100px"> Voilà, t'en fais des progrès !</label>
					</div>
                    <div class="col-md-14 col-md-offset-2 text-left colorlib-heading animate-box" style="margin-left: 2rem;">
						<label>Fiche d'évaluation bien-être (EBE) :</label>&nbsp;&nbsp; <br/>
						<label><a href="./res/pdf/pdf.pdf" title="Pdf">Fiche résumé du compte-rendu en PDF</a> </label>
					</div>
				</div>
				<br><br>
                <div class="col-md-14 col-md-offset-2 text-left colorlib-heading animate-box" style="margin-left: 2rem;">
						<label>Mon évolution</label>&nbsp;&nbsp; <br/>
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                            </p>
                        </figure>
					</div>
			</div>
		</div>

		<?php include 'utilities/footer.php' ; ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
    <script src="js/main.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/series-label.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/export-data.js"></script>
    <script src="js/accessibility.js"></script>
    <script type="text/javascript">
Highcharts.chart('container', {

    title: {
        text: 'Mon évolution'
    },

    yAxis: {
        title: {
            text: 'en pourcentage'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 0 to 8'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: true
            },
            pointStart: 1
        }
    },

    series: [{
        name: 'Poids',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'Graisse corporelle',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Masse musculaire',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }, {
        name: 'Âge métabolique',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }, {
        name: 'Hydratation',
        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    },
    {
        name: 'Graisse viscérale',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
		</script>
	</body>
</html>