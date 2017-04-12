<?php
include('connexion.php');
$req_event = mysqli_query($id_connect, "SELECT * FROM ours_event");
$tab_event = mysqli_fetch_assoc($req_event);
$tab_event = array_map('stripslashes',$tab_event);


?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans" rel="stylesheet">
	</head>

	<body>
		<div class="containerBurger">
			<input id="click" name="exit" type="checkbox" onclick="handleBurger(this)"/>
			<label for="click"><span class="burger"></span><span class="menu">Menu</span></label>
		</div>
		<header>
			<div class="container">
				<h1 class="mb-md">Au <span class="brown">Café des Ours</span>,<br> Nous torréfions le Café et les <span class="brown">Sensations</span></h1>
				<nav id="links">
					<a href="index.php">Accueil</a>
					<a href="#">Boutique</a>
					<a href="#">Recettes</a>
					<a href="#">Notre&nbsp;histoire</a>
					<a href="#">Nos&nbsp;variétés&nbsp;de&nbsp;café</a>
					<a href="contact.php">Contact</a>
				</nav>

				<a href="" id="logo"><img src="img/logo.png" alt=""></a>

				<a href="" id="h_cafe">L'histoire de nos cafés <span class="brown">&#8594;</span></a>
			</div>
		</header>
		<section class="tac container" id="promo">
			<div style="background-color:<?php echo $tab_event['color'];?>;">
			<p><?php echo $tab_event['text'];?></p>
<!--
				<p>Ouverture de nos boutique en ligne et physiques en <span class="brown">mai 2017</span><br>
					À cette occasion profitez de <br>
					<span class="brown">5&nbsp;%&nbsp;de&nbsp;remise</span> <br>
					sur notre site de mai à septembre 2017</p>
-->
				<a href="#" class="cta">J'en profite &#8594;</a>
			</div>
		</section>
		<section id="company">
			<div class="container">
				<div class="line"></div>
				<h3>Notre Histoire</h3>
				<h2>L’histoire d’une marque ancrée dans <br> le partage et le savoir faire</h2>
				<div class="row align-items-center">
					<p class="col-md-6">C’est au cours d’un voyage en Éthiopie que notre coup cœur pour les saveurs et parfums du café ont vu le jour. Le café n’est pas torréfié à l’avance comme chez nous. La torréfaction se fait lors de chaque dégustation, les grains sont ensuite pilés et infusés selon un rituel.
						<br>Imaginez l’odeur du café dans les rues… </p>
					<p class="col-md-6">Depuis ce jour, notre envie d’apprendre et de partager ce délicieux moment est devenu une évidence.
						<br>Notre apprentissage débute en 2010 auprès des plus grands torréfacteurs. L’aventure se poursuit lors de nos nombreux voyages au Brésil, en Colombie, en Indonésie, au Guatemala… et nous voici en 2017 près à partager nos sélections et notre savoir faire. </p>
				</div>
				<div class="mt-md subtitle brown">Le café des ours est né !</div>
			</div>
		</section>
		<section id="histoire" class="brownbg">
			<div class="container">
				<div class="row">
					<figure class="col-md-6">
						<img src="img/histoire.jpg" alt="sac de café filtre ancien"><div>Le café</div>
					</figure>
					<article class="col-md-6 pl-md">
						<div class="line"></div>
						<h3 class="white tal">L’histoire d’un breuvage Mythique</h3>
						<p>Le café a une histoire incroyable. </p>
						<p>De sa découverte hasardeuse et sagace à son statut de deuxième produit commercial le plus important en passant par démocratisation en arabie et sa conquete de l’Europe . </p>
						<p>Vous verrez que le café à traversé l’histoire et à beaucoup de choses à vous apprendre.</p>
						<div class="row mt-lg">
							<a href="#" class="col-6"><i class="fa-coffee"></i>Légende des premiers temps</a>
							<a href="#" class="col-6"><i class="fa-coffee"></i>Découverte du café</a>
							<a href="#" class="col-6"><i class="fa-coffee"></i>Conquete de l’Europe</a>
							<a href="#" class="col-6"><i class="fa-coffee"></i>Le café au 20e siècle</a>
						</div>
						<a href="#" class="mt-lg mb-md cta">L'histoire de nos café &#8594;</a>
					</article>
				</div>
			</div>
		</section>
		<section id="varietes">
			<div class="container">
				<div class="line"></div>
				<h3>Nos Variétés</h3>
				<h2>Arabica et Robusta : <br>Quelle différences ?</h2>
				<article class="row">
					<div class="corner-left"></div>
					<div class="col-md-6 pt-md">
						<h2>Robusta</h2>
						<p>Le café robusta tient son nom de la robustesse et de la résistance de son arbre. Grâce à sa croissance très rapide, cette espèce de café est plus facile à cultiver que l’arabica. <br>
							Le robusta a un arôme moins développé, un goût plus amer et plus corsé que l’arabica. Il et moins apprécié des producteurs de café de qualité. De plus, le café robusta contient deux fois plus de caféine que l’arabica. Les variétés les plus célèbres du robusta sont le Java-Ineac, le Nana et le Kouillou. <br>
							Le robusta est à la base de la composition des cafés en grains italiens typiquement pour sa couleur et pour sa mousse. <br>
							Le café robusta représente 30 % de la production mondiale. Les principaux producteurs de café robusta sont l’Indonésie, l’Ouganda, la Côte d’Ivoire, l’Inde et le Vietnam.</p>
						<a href="#" class="mt-md">Voir notre selection <span class="brown">&#8594;</span></a>
					</div>

					<figure class="col-md-6"><img src="img/robusta.jpg" alt="grain de café robusta">
					</figure>
				</article>
				<article class="row mt-md">
					<figure class="col-md-6"><img src="img/arabica.jpg" alt="grain de café arabica">
					</figure>
					<div class="corner-right"></div>
					<div class="col-md-6 pt-md">
						<h2>Robusta</h2>
						<p>Le café robusta tient son nom de la robustesse et de la résistance de son arbre. Grâce à sa croissance très rapide, cette espèce de café est plus facile à cultiver que l’arabica. <br>
							Le robusta a un arôme moins développé, un goût plus amer et plus corsé que l’arabica. Il et moins apprécié des producteurs de café de qualité. De plus, le café robusta contient deux fois plus de caféine que l’arabica. Les variétés les plus célèbres du robusta sont le Java-Ineac, le Nana et le Kouillou. <br>
							Le robusta est à la base de la composition des cafés en grains italiens typiquement pour sa couleur et pour sa mousse. <br>
							Le café robusta représente 30 % de la production mondiale. Les principaux producteurs de café robusta sont l’Indonésie, l’Ouganda, la Côte d’Ivoire, l’Inde et le Vietnam.</p>
						<a href="#" class="mt-md">Voir notre selection <span class="brown">&#8594;</span></a>
					</div>
				</article>
				<h2 class="mt-lg">Les différentes variétés</h2>
				<p>Dans l’espèce Arabica, il existe plusieurs variétés ou cultivars. La première est certainement la variété Moka qui a donné des descendants par croisements, naturels ou expérimentés par des agronomes. Dans cet article, nous ne parlerons que de l’Arabica. Pas de snobisme mais le robusta est une espèce qui ne nous intéresse pas, espèce qui a deux fois moins d’arômes mais est deux fois plus chargée en caféine que l’Arabica.</p>
				<div class="row mt-md">
					<article class="col-md-4">
						<h4>Moka.</h4>
						<p>Certainement la première, elle est la variété source de l’Arabica moderne. Aussi appelée Ethiopian, cette variété n’a subit aucune transformation et reste la même ...</p>
						<a href="#">Voir plus <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4">
						<h4>Typica.</h4>
						<p>Pour contrer ce monopole yéménite, les Hollandais ont volé des graines vertes dans le port de Mocca pour les planter dans les Indes Hollandaises...</p>
						<a href="#">Voir plus <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4">
						<h4>Bourbon.</h4>
						<p>Les Français ont à leur tour voulu cultiver des plants de caféiers. Après plusieurs refus, le Maire d’Amsterdam offrit à Louis XIV quelques plants qui furent ...</p>
						<a href="#">Voir plus <span class="brown">&#8594;</span></a>
					</article>
				</div>
			</div>
		</section>
		<section id="produits">
			<div class="container">
				<div class="line"></div>
				<h3>Nos Variétés</h3>
				<h2>Découvrez nos café fraîchement torréfiés</h2>
				<div class="row">
					<article class="col-md-4 bb br" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="img/histoire.jpg" alt=""></figure>
						<div class="h3_like">Bambito</div>
						<div class="sub">Panama</div>
						<p>Alberto Sitton est devenu propriétaire de cette plantation situé dans les montagnes de Bambito en 1945. La culture du café est devenue la passion d’Alberto, ainsi qu’une tradition familiale.</p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4 bb br" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="img/cafe1.jpg" alt=""></figure>
						<div class="h3_like">Cuzcatleca</div>
						<div class="sub">Salvador</div>
						<p>La Finca Altamira de Humberto Barrera est une plantation familiale de plusieurs générations. Angel son fils est le chef import de notre importateur français. Tout naturellement, il a fait venir le café de son père en France.</p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4 bb" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="" alt=""></figure>
						<div class="h3_like">Kegwa</div>
						<div class="sub">Kenya</div>
						<p>Les producteurs de Kegwa ont planté leurs caféiers en 1950. Ils appartiennent à une société coopérative appelée Ngiriambu Coffee Farmers Cooperative Society Ltd. Elle dispose de deux moulins à traitement humide, Kiri et Kegwa.</p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4 br" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="" alt=""></figure>
						<div class="h3_like">Mapanga Estate</div>
						<div class="sub">Malawi</div>
						<p>La plantation Mapanga se situe dans la région de Blantyre au Sud du Malawi, à proximité de la frontière Mozambicaine. Créée à l’origine par le gouvernement britannique au début des années 1990, la plantation ... </p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4 br" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="" alt=""></figure>
						<div class="h3_like">Mormora Guji</div>
						<div class="sub">Ethiopie</div>
						<p>Mormora Guji se situe dans la partie Oromia de Guji à côté du terroir de Skakisso. La plantation Mormora est planté de caféiers sauvages Moka 74178 et Moka 74158. Ces deux variétés sont nommés ainsi après étude génétique de l’ADN des variétés.</p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
					<article class="col-md-4" onclick="expand(this)">
						<div class="corner"></div>
						<figure><img src="" alt=""></figure>
						<div class="h3_like">Station Titus</div>
						<div class="sub">Rwanda</div>
						<p>Le terroir de Kibumbwe se situe dans la province sud du Rwanda, au cœur des montagnes de la frontière Ouganda/Burundi. Le climat équatorial y est relativement tempéré, avec une température moyenne de 20° C ...</p>
						<a href="#">Voir dans la boutique <span class="brown">&#8594;</span></a>
					</article>
				</div>
			</div>
		</section>
		<section id="services">
			<div class="container">
				<div class="line"></div>
				<h3>Nos Services</h3>
				<div class="row">
					<article class="pt-md col-md-4 offset-md-1">
						<h5>Entreprises</h5>
						<p class="pb-md">Vous souhaitez offrir un café de qualité à vos collaborateurs ? Le Café des Ours se fera une joie de vous aider. Nous proposons la livraison d’un café de spécialité fraîchement torréfié, mais également des solutions de machines espresso ou filtres avec broyeur intégré, avec ou sans monnayeur. Plus économique, avec un café de bien meilleure qualité que des machines à capsules, c’est aussi plus écologique puisque vous n’aurez plus que du marc de café à recycler ! N’hésitez pas à nous contacter pour élaborer ensemble la meilleure des solutions. </p>
						<a href="#">En savoir plus <span class="brown">&#8594;</span></a>
					</article>
					<article class="pt-md col-md-4 offset-md-2">
						<h5>Restauration</h5>
						<p class="pb-md">Vous souhaitez offrir un café de qualité à vos collaborateurs ? Le Café des Ours se fera une joie de vous aider. Nous proposons la livraison d’un café de spécialité fraîchement torréfié, mais également des solutions de machines espresso ou filtres avec broyeur intégré, avec ou sans monnayeur. Plus économique, avec un café de bien meilleure qualité que des machines à capsules, c’est aussi plus écologique puisque vous n’aurez plus que du marc de café à recycler !
							N’hésitez pas à nous contacter pour élaborer ensemble la meilleure des solutions.</p>
						<a href="#">En savoir plus <span class="brown">&#8594;</span></a>
					</article>
					<a href="contact.php" class="cta">Nous contacter &#8594;</a>
				</div>
			</div>
		</section>
		<?php include('footer.php') ?>
		<script src="js/main.js"></script>
	</body>
</html>
