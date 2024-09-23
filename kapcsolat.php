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
		<div class="inside inside5">

		<h1>Elérhetőségeink</h1>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>
			
			<div class="contact">
				
				<section class="info">
					<h2>Macskávézó</h2>
					<p>
						<span>Cím:</span> 7622 Pécs, Bajcsy-Zsilinszky u. 11/1 <br>
						<span>E-mail:</span> info@macskavezo.hu <br>
						<span>Telefon:</span> +36 70 555 55 55 <br>
						<span>Vezető:</span> Kaktuszné Cserepes Virág
					</p>
				</section>

				<img class="csc" src="res/img/customer_service.png" alt="Egy nagyon pöpec kép">

			</div>

			<div class="contact2">
				<section class="social">
					<h3>Közösségi média</h3>
					<ul>
						<li class="media-container">
							<a href="https://www.facebook.com/" target="_blank">
							<button class="media" style="width: 305px;">
								<div class="text" style="color: #666666;">
									<span><i class="fa-brands fa-square-facebook" style="color: #666666;"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>a</span>
									<span>Facebookon</span>
								</div>
								<div class="clone" style="color: rgb(8, 102, 255);">
									<span><i class="fa-brands fa-square-facebook" style="color: rgb(8, 102, 255);"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>a</span>
									<span>Facebookon</span>
								</div>
							</button>
							</a>
						</li>
						<li class="media-container">
							<a href="https://www.instagram.com/" target="_blank">
							<button class="media" style="width: 315px;">
								<div class="text" style="color: #666666;">
									<span><i class="fa-brands fa-square-instagram" style="color: #666666;"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>az</span>
									<span>Instagramon</span>
								</div>
								<div class="clone" style="color: rgb(136, 66, 191);">
									<span><i class="fa-brands fa-square-instagram" style="color: rgb(136, 66, 191);"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>az</span>
									<span>Instagramon</span>
								</div>
							</button>
							</a>
						</li>
						<li class="media-container">
							<a href="https://twitter.com/" target="_blank">
							<button class="media" style="width: 245px;">
								<div class="text" style="color: #666666;">
									<span><i class="fa-brands fa-square-x-twitter" style="color: #666666;"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>az</span>
									<span>X-en</span>
								</div>
								<div class="clone" style="color: rgb(0, 0, 0);">
									<span><i class="fa-brands fa-square-x-twitter" style="color: rgb(0, 0, 0);"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>az</span>
									<span>X-en</span>
								</div>
							</button>
							</a>
						</li>
						<li class="media-container">
							<a href="https://hu.pinterest.com/" target="_blank">
							<button class="media" style="width: 300px;">
								<div class="text" style="color: #666666;">
									<span><i class="fa-brands fa-square-pinterest" style="color: #666666;"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>a</span>
									<span>Pinteresten</span>
								</div>
								<div class="clone" style="color: rgb(230, 0, 35);">
									<span><i class="fa-brands fa-square-pinterest" style="color: rgb(230, 0, 35);"></i></span>
									<span style="padding-left: 15px"> Macskávézó</span>
									<span>a</span>
									<span>Pinteresten</span>
								</div>
							</button>
							</a>
						</li>
					</ul>
				</section>

				<section class="open">
					<h3>Nyitvatartás</h3>
					<p>
						<span>Hétfő - Péntek:</span> 09:00 - 18:00 <br>
						<span>Szombat - Vasárnap:</span> 11:00 - 20:00 <br>

<?php
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$currentDateTime = new DateTime();
$today = $currentDateTime->format('l');
date_default_timezone_set('Europe/Budapest');
$now = (int) date('H');
$info = 'Jelenleg nyitva vagyunk! 😺';
$i = 0;

while($today != $days[$i] && $i < count($days))
{
	$i++;
}

if($i <= 4)
{
	$open = 9;
	$close = 18;
}
else
{
	$open = 11;
	$close = 20;
}

if($now < $open || $now >= $close)
{
	$info = 'Jelenleg zárva vagyunk! 😿';
}

echo ''. $info .'<br></p>';
?>
				</section>
			</div>
			
			<section class="map">
				<h3>Megközelíthetőség</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2767.945654310744!2d18.22955847583581!3d46.07212479267287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742b1756299ca3d%3A0xf09a2a09f11e20bf!2zw4Fya8OhZA!5e0!3m2!1shu!2shu!4v1705266859899!5m2!1shu!2shu" width="827" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit, ante eu viverra ultrices, ante justo ultrices risus, non pulvinar felis tortor non tellus. Morbi molestie nisi eget interdum facilisis. Mauris venenatis elit ipsum, non sollicitudin nunc tempor et.</p>
			</section>

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