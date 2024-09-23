<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macskávézó</title>
    <link rel="stylesheet" href="res/style.css">
	<script src="https://kit.fontawesome.com/559ae3504d.js" crossorigin="anonymous"></script>
</head>
<body>

	<header>
		
		<div class="interaction">
			
			<a href="index.php" class="logo">
				<img src="res/img/logo.png" alt="Macskávézó logo"> 
			</a>
			
			<nav>
				<ul>
					<li><a href="index.php">Rólunk</a></li>
					<li><a href="itallap.php">Itallap</a></li>
					<li><a href="cicaink.php">Cicáink</a></li>
					<li><a href="kapcsolat.php">Kapcsolat</a></li>
				</ul>
			</nav>
			
		</div>

	</header>

	<main>
		<div class="inside inside4">
			
			<h1>Cicáink</h1>


<?php
$greeting = 
[
	'Üdvözöl a 8 kis puhi-gombóc!',
	'Aszpikos van nálad?',
	'A dorombolásunk hangjánál csak az étvágyunk nagyobb.',
	'Ki itt belépsz, hagyj fel minden jutalomfalattal!',
	'Minden simi beváltható dorcira.'
];
$random = random_int(0, 4);

echo '<p class="random">'. $greeting[$random] .'</p>';


?>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>
			
			<ul class="cats">
				<li>
					<img src="res/img/cat/kokusz.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Kókusz</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quaerat veritatis quae fugiat beatae, soluta. Dolore doloremque facilis.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/kormi.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Kormi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut fuga esse et sequi, vero voluptate alias harum quis aspernatur, natus.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/kandur.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Kandúr</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quaerat veritatis quae fugiat beatae, soluta.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/tacsi.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Tacsi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida orci dolor, vitae consectetur purus posuere id.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/cirmi.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Cirmi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut quam eu nunc suscipit dictum. Aliquam pretium facilisis.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/neko.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Neko</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel dolor non felis interdum pulvinar eget nec.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/tom.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Tom</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac auctor neque. Vivamus elementum interdum rutrum.</p>
					</div>
				</li>
				<li>
					<img src="res/img/cat/leon.png" alt="Egy cuki cica">
					<div class="info">
						<h4>Léon</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut semper accumsan neque quis iaculis. Nulla ultrices, erat quis tincidunt.</p>
					</div>
				</li>
			</ul>
			
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sit dolorem ipsam deserunt temporibus quis in eum, ratione repudiandae, eveniet dolore dolor autem quia reiciendis. Rerum hic minus aut laboriosam eligendi nam, maiores deserunt corrupti.</p>
			

		</div>
	</main>

	<footer>
		<div class="inside">
			<section class="pages">
				<ul class="fa-ul" style="--fa-li-margin: 1em">
					<li><button><span class="fa-li"><i class="fa-solid fa-house" style="color: #666666;"></i></span><a href="index.php">Rólunk</a></button></li>
					<li><button><span class="fa-li"><i class="fa-solid fa-mug-hot" style="color: #666666;"></i></span><a href="itallap.php">Itallap</a></button></li>
					<li><button><span class="fa-li"><i class="fa-solid fa-paw" style="color: #666666;"></i></span><a href="cicaink.php">Cicáink</a></button></li>
					<li><button><span class="fa-li"><i class="fa-solid fa-comment" style="color: #666666;"></i></span><a href="kapcsolat.php">Kapcsolat</a></button></li>
				</ul>
			</section>

			<section class="contact">
				<ul class="fa-ul" style="--fa-li-margin: 1em">
					<li><span class="fa-li"><i class="fa-solid fa-phone" style="color: #666666;"></i></span>+36(70)555-5555</li>
					<li><span class="fa-li"><i class="fa-solid fa-envelope" style="color: #666666;"></i></span>info@macskavezo.hu</li>
					<li><span class="fa-li"><i class="fa-solid fa-location-dot" style="color: #666666;"></i></span>7622 Pécs, Bajcsy-Zsilinszky u. 11/1</li>
					<li><span class="fa-li"><i class="fa-solid fa-clock" style="color: #666666;"></i></span>H-P: 9-18, Sz-V: 11-20</li>
				</ul>	
			</section>
				
			<section class="media">
				<ul class="fa-ul" style="--fa-li-margin: 1em">
					<li><button><span class="fa-li"><i class="fa-brands fa-facebook" style="color: #666666;"></i></span><a href="https://www.facebook.com/" target="_blank">Facebook</a></button></li>
					<li><button><span class="fa-li"><i class="fa-brands fa-instagram" style="color: #666666;"></i></span><a href="https://www.instagram.com/" target="_blank">Instagram</a></button></li>
					<li><button><span class="fa-li"><i class="fa-brands fa-x-twitter" style="color: #666666;"></i></span><a href="https://twitter.com/" target="_blank">X</a></button></li>
					<li><button><span class="fa-li"><i class="fa-brands fa-pinterest" style="color: #666666;"></i></span><a href="https://hu.pinterest.com/" target="_blank">Pinterest</a></button></li>
				</ul>
			</section>
		</div>
	</footer>
	
</body>
</html>