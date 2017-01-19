<!-- RECOPIE OU MODIFICATION AUTORISEE SOUS RESERVE DE LAISSER LA SIGNATURE "A LNL Production" http://louisnicolasleuillet.com -->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>30FPS vs 60FPS</title>
		<link rel="icon" type="image/png" href="pictures/icone.png" />
		<link rel="stylesheet" href="css/defaut.css" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="pictures/ico.ico" /><![endif]-->
	</head>

	<body>
	<!-- GOOGLE ANALYTICS -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-45282404-3', 'auto');
  		ga('send', 'pageview');
	</script>

	<div class="contener">
		<!-- LE LOGO -->
		<header>
			<img src="pictures/l.png" alt="logo" id="logoSize"/>
		</header>
	
		<!-- LE TEXTE -->
		<div class="description">
			<p>Many say that our eye can not tell the difference between 30FPS and 60FPS.
			Just look by yourself on both videos, if they are not launched at the same time press F5.</p>
		</div>
	
		<!-- LE MENU -->
		<div class="menu">
			<a href="../"><div class="link">Far cry 3</div></a>
			<a href="../?game=RO2"><div class="link">Red orchestra 2</div></a>
			<a href="../?game=bf4"><div class="link">Battlefield 4</div></a>
		</div>

		<!-- VERIFICATION SI EXISTE GET -->
		<?php if(isset($_GET['game'])) {
			$game = htmlspecialchars($_GET['game']);
		} ?>

		<!-- ON AFFICHE LES DEUX LECTEURS -->
		<table>
			<?php if(!isset($_GET['game'])) { ?>
			<tr>
				<td class="x">
					<video width="100%" autoplay loop>
      					<source src="pictures/30.mp4" type="video/mp4">
            			<source src="pictures/30.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
				</td>
				<td width="0.25%" bgcolor="black"></td>
				<td width="50%">
      				<video width="100%" autoplay loop>
      					<source src="pictures/60.mp4" type="video/mp4">
            			<source src="pictures/60.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
      			</td>
			</tr>
			<?php } else if(isset($game) and $game == "RO2") { ?>
			<tr>
				<td class="x">
					<video width="100%" autoplay loop>
      					<source src="pictures/ro2-30.mp4" type="video/mp4">
            			<source src="pictures/ro2-30.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
				</td>
				<td width="0.25%" bgcolor="black"></td>
				<td width="50%">
      				<video width="100%" autoplay loop>
      					<source src="pictures/ro2-60.mp4" type="video/mp4">
            			<source src="pictures/ro2-60.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
      			</td>
			</tr>
			<?php } else { ?>
			<tr>
				<td class="x">
					<video width="100%" autoplay loop>
      					<source src="pictures/bf42-30.mp4" type="video/mp4">
            			<source src="pictures/bf42-30.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
				</td>
				<td width="0.25%" bgcolor="black"></td>
				<td width="50%">
      				<video width="100%" autoplay loop>
      					<source src="pictures/bf42-60.mp4" type="video/mp4">
            			<source src="pictures/bf42-60.ogv" type="video/ogg">
            			Votre navigateur ne supporte pas la balise vidéo.
					</video>
      			</td>
			</tr>
			<?php } ?>
		</table>
	
		<!-- LE FOOTER -->
		<footer>
			2017 © A <a href="http://louisnicolasleuillet.com" target="_blank">LNL</a> Production<br />
			<a href="" target="_blank" style="font-size: 11px;">Get It On <img src="pictures/logoGithub.png" style="width: 30px;" /></a>
		</footer>
	</div>
	</body>
</html>