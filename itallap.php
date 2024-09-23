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
		<div class="inside inside3">
			
			<h1>Itallap</h1>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>

			<div class="coffee">
				<h2 class="tTitle">Kávék</h2>
				<table>
					<thead>
						<tr>
							<th class="name">Megnevezés</th>
							<th class="secondary">Leírás</th>
							<th>Egységár</th>
						</tr>
					</thead>
					<tbody>

<?php
$services = file('content/drinks/coffee.txt');

foreach ($services as $i => $line) 
{
$record = explode(';', trim($line));

$name = $record[0];
$desc = $record[1];
$price = number_format($record[2], 0, '', ' ');


echo '<tr>
		<td>'. $name .'</td>
		<td class="desc">'. $desc .'</td>
		<td class="price">'. $price .' Ft</td>
	</tr>';
}
?>
					</tbody>
				</table>
			</div>

			<p class="plus">Vanília, kakaó, karamella, fahéj, pisztácia, mogyoró, kókusz ízesítés +100 Ft</p>
			<p class="plus">Laktózmentes tej +100 Ft</p>
			<p class="plus">Növényi tej +200Ft</p>

			<div class="drinks">
				<h2 class="tTitle">Teák</h2>
				<table>
					<thead>
						<tr>
							<th class="name">Megnevezés</th>
							<th class="secondary">Leírás</th>
							<th>Egységár</th>
						</tr>
					</thead>
					<tbody>

<?php
$services = file('content/drinks/tea.txt');

foreach ($services as $i => $line) 
{
$record = explode(';', trim($line));

$name = $record[0];
$desc = $record[1];
$price = number_format($record[2], 0, '', ' ');


echo '<tr>
		<td>'. $name .'</td>
		<td class="desc">'. $desc .'</td>
		<td class="price">'. $price .' HUF</td>
	</tr>';
}
?>
					</tbody>
				</table>
			</div>
			
			<p class="plus">Bármelyik teánk kérhető latteként is +300 Ft</p>

			<div class="drinks">
				<h2 class="tTitle">Forró csokik és üdítők</h2>
				<table>
					<thead>
						<tr>
							<th class="name">Megnevezés</th>
							<th class="secondary">Leírás</th>
							<th>Egységár</th>
						</tr>
					</thead>
					<tbody>

<?php
$services = file('content/drinks/more.txt');

foreach ($services as $i => $line) 
{
$record = explode(';', trim($line));

$name = $record[0];
$desc = $record[1];
$price = number_format($record[2], 0, '', ' ');


echo '<tr>
		<td>'. $name .'</td>
		<td class="desc">'. $desc .'</td>
		<td class="price">'. $price .' HUF</td>
	</tr>';
}
?>
					</tbody>
				</table>
			</div>
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