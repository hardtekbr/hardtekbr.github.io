<!-- Proudly coded by Billy (https://bybilly.uk) -->
<!-- Version: 1.9 -->

<!DOCTYPE html>
<html>
<head>
	<!-- Info meta tags, important for social media + SEO -->
	<title>Mega Craft - Site Oficial</title>
	<meta name="description" content="Mega Craft é um novo e incrível servidor do Minecraft. Você pode entrar com o IP 'jogar.megacraft.com.br'.">
	<meta property="og:title" content="Mega Craft - Site Oficial">
	<meta property="og:site_name" content="Mega Craft">
	<meta property="og:description" content="Mega Craft é um novo e incrível servidor do Minecraft. Você pode entrar com o IP 'jogar.megacraft.com.br'.">
	<meta property="og:image" content="https://bybilly.uk/portal/img/minecraft.jpg">
	<meta property="og:url" content="https://bybilly.uk/">
	<meta name="twitter:card" content="summary_large_image">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter@1.1.1/dist/mc-player-counter.min.js"></script>



</head>
<body>
	<div class="container">
		<div class="logo">
			<!-- In the img folder, upload your logo -->
			<!-- Make sure you name it 'logo.png' -->
			<img src="img/logo.png" alt="MyServer logo">
		</div>

		<div class="items">
			<!-- Replace # with your forum URL-->
			<a href="http://discord.megacraft.com.br" target="_blank" class="item forums">
			<div>
				<img src="img/discord.png" alt="Minecraft forums icon" class="img">
				<p class="subtitle">entre no discord!</p>
				<p class="title">Discord</p>
			</div>
			</a>

			<!-- Replace # with your store URL -->
			<a href="#" class="item store">
			<div>
				<img src="img/store.png" alt="Minecraft store icon" class="img">
				<p class="subtitle">compre seu vip!</p>
				<p class="title">Loja</p>
			</div>
			</a>

			<!-- Replace # with your vote URL -->
			<a href="#" class="item vote" onclick="openfunc()">
			<div>
				<img src="img/vote.png" alt="Minecraft voting icon" class="img">
				<p class="subtitle">vote no servidor!</p>
				<p class="title">Votar</p>
			</div>
			</a>


		</div>


		<div  style="background-color:powderblue;">
			<!-- Replace play.myserver.net with your IP address -->
			<!-- Do it for both examples below -->
			<!-- Please set both your IP and port -->
			<p>Venha jogar conosco, <b>jogar.megacraft.com.br</b> e com mais outros
			<span class="ip" data-playercounter-ip="144.217.10.143:25959">0</span> jogadores online.	</p>

			 
        	
        	<p><b>MegaCraft</b> Atualmente está <span data-playercounter-ip="144.217.10.143:25959" data-playercounter-status>...</span> - Capacidade: <b><span data-playercounter-ip="144.217.10.143:25959" data-playercounter-format="{online}/{max}">0</span></b></p>

		



		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/firefly.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
