<?php 

include 'controller/profile_controller.php'

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Titre</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">

table.activities td {
    margin: 12px 12px 12px 12px;
    padding: 12px 12px 12px 12px;
}



</style>
</head>
<body>
		<div class="header" id="ban">
			<div class="container">
				<div class="head-left"></div>
				<div class="header_right">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-7" id="link-effect-7">
							<ul class="nav navbar-nav">
								<li><a href="cart.html"><img src="images/panner.jpg" alt=""></a></li>
								<li><a href="cart.html">Activity</a></li>
								<li class="active act"><a href="features.html">Shop</a></li>
								<li><a href="travel.html">Profile</a></li>
								<li><a href="fashion.html">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">BDE CESI</a></h1>
				<p><label class="of"></label>Blablabla<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->



	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div style="float: left; margin-right: 100px;">
						<div class="team-grid1">
							<img src="<?php echo $avatar ?>" alt="Photo de profil" class="img-responsive" width="320" height="300"><br>
							<button type="button" class="add_to_cart">Changer ma photo</button>
						</div>
					</div>
					
					<div class="welcome-bottom">
						<h2 class="w3">Profil</h2>
						<p><b>Nom</b> : <?php echo $surname?> </p>
						<p><b>Prénom</b> : <?php echo $name?> </p>
						<p><b>Spécialité</b> : <?php echo $studies?> </p>
						<p><b>email</b> : <?php echo $email?> </p>
						<button type="button" class="add_to_cart">Modifier mes informations</button>
						<br><br><br><br><br><br>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div class="welcome-bottom">
						<h2 class="w3">Mes activités</h2>
						<br><br>

							<table class="activities" style="width:100%; border-spacing: 10px;">
							  <tr>
							    <td style="width: 25%;"><a href="http://www.google.fr">Bowling</a></td>
							    <td style="width: 25%;">21 Avril 2017</td> 
							    <td style="width: 25%;">21:00</td>
							    <td style="width: 25%;">4 participants | 1 place disponible</td>
							  </tr>
							  <tr>
							    <td style="width: 25%;">Un bowling entre collègues ! </td>
							    <td style="width: 25%;"></td> 
							    <td style="width: 25%;"></td>
							    <td style="width: 25%;"><button type="button" class="add_to_cart">Me désinscrire</button></td>
							  </tr>

							</table>

							<hr>

							<table class="activities" style="width:100%; border-spacing: 10px;">
							  <tr>
							    <td style="width: 25%;"><a href="http://www.google.fr">Bowling</a></td>
							    <td style="width: 25%;">21 Avril 2017</td> 
							    <td style="width: 25%;">21:00</td>
							    <td style="width: 25%;">4 participants | 1 place disponible</td>
							  </tr>
							  <tr>
							    <td style="width: 25%;">Un bowling entre collègues ! </td>
							    <td style="width: 25%;"></td> 
							    <td style="width: 25%;"></td>
							    <td style="width: 25%;"><button type="button" class="add_to_cart">Me désinscrire</button></td>
							  </tr>

							</table>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div class="welcome-bottom">
						<h2 class="w3">Mes commandes</h2>
						<br><br>

						<table class="activities" style="width:100%; border-spacing: 10px;">
							  <tr>
							    <td style="width: 25%;"><a href="http://www.google.fr">Commande numéro 1898</a></td>
							    <td style="width: 25%;"></td> 
							    <td style="width: 25%;">22 Avril 2013</td>
							    <td style="width: 25%;">En cours de préparation</td>
							  </tr>
							  <tr>
							    <td style="width: 25%;"></td>
							    <td style="width: 25%;"></td>
							    <td style="width: 25%;"></td>
							    <td style="width: 25%;"><button type="button" class="add_to_cart">Voir détails</button></td>
							  </tr>

							</table>
						
						
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
		<div class="footer">
			<div class="container">
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="copyright">
					<div class="container">
						<p>© 2017 BDE CESI. All rights reserved | Designed by Exia CESI Orleans</p>
					</div>
		</div>
</body>
</html>