<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>De Zoete Zonde</title>

	<link href="css/reset.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><p class="navbartext">Home</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#menu"><p class="navbartext">Menu</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><p class="navbartext">Services</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><p class="navbartext">Contact</p></a>
                    </li>
					<li>
						<a href="#login" data-toggle="modal"><p class="navbartext">Login</p></a>
					</li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/foto1.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto2.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto3.jpg" alt="Foto" width="100vh" height="100vh">
							</div>

							<div class="item">
								<img src="img/foto4.jpg" alt="Foto" width="100vh" height="100vh">
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="menu">MENU</h1>
					
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
					
					<form action="php/mail.php" method="POST">
						<input class="form-control" type="text" name="naam" placeholder="Naam" required></input>
						<input class="form-control" type="text" name="email" placeholder="E-mail adres" required></input>
						<textArea class="form-control" type="text" name="message" placeholder="je bericht" required></textArea>
						<button type="submit" class="btn btn-info">Verstuur!</button>
					</form>
                </div>
            </div>
        </div>
    </section>
	
		<!--admin login form-->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3>Admin Login</h3>
					</div>
					<div class="modal-body">
						<form action="?pagina=login" method="POST">
							<input class="form-control" type="text" name="mail" placeholder="E-mail adres" required></input>
							<input class="form-control" type="password" name="paswoord" placeholder="je paswoord" required></input>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Login!</button>
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
