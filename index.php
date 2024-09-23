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
		<div class="inside inside2">
			
			<article>
				<h1>Purr me the coffee</h1>

				<p class="justify"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod natus distinctio error esse eligendi. Magnam ad, quam nisi quasi ipsum asperiores temporibus nulla, dolorum nam libero repellat sint iusto! Quisquam quis sit blanditiis voluptate dolore.</strong></p>

				<img src="res/img/index_pic.png" alt="Cica és kávé">

				<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, assumenda quod eveniet officiis quae, quo consequuntur, rerum libero perferendis, voluptate iure? Maxime, consequatur! Delectus reprehenderit iusto minus voluptas soluta ullam dolor hic esse repellat tempora rem beatae porro totam nobis possimus, dolores sapiente laboriosam. Natus maxime ut eligendi quibusdam quis.</p>
				<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit, voluptate cum. Laudantium consequuntur expedita tempora animi. Dolor nulla eum repellat a, sed reprehenderit earum esse itaque, eaque ipsam assumenda distinctio quaerat ab? A placeat aspernatur eaque veniam fugit itaque provident voluptate asperiores, ad illum? Odit aut hic, consectetur rerum iste accusamus tempora sed magnam consequatur delectus incidunt quo similique. Minus, ex dolorum provident explicabo! Suscipit enim, fugiat totam consequatur at et reiciendis itaque adipisci?</p>
			</article>

<?php
$offers =
[
	['Monday','americano', 'Americano', 'Phasellus venenatis purus velit, ut faucibus risus eleifend scelerisque. Morbi elementum vehicula aliquet. Ut quis mauris eget arcu gravida facilisis. Proin posuere nec dui quis semper. Pellentesque consequat in eros eu sollicitudin. Nulla dignissim arcu ut mollis malesuada. Sed vitae interdum lectus, vel congue quam.', '790'],
	['Tuesday','frapp', 'Frappuccino', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec lacus nec tellus posuere commodo. Vivamus volutpat lacus nec aliquet suscipit. Aliquam consectetur ante odio, ac semper eros eleifend congue. Vestibulum ullamcorper mollis dolor, et fermentum ipsum gravida non.', '990'],
	['Wednesday','dalgona', 'Dalgona kávé', 'Suspendisse ac lacinia urna. Nulla id ante id nunc posuere efficitur sit amet ac urna. Duis vitae diam et metus rhoncus mollis et eget eros. Integer orci sem, rutrum non ligula sit amet, imperdiet ornare nisi. Donec molestie dui non augue imperdiet faucibus. Nam viverra ultrices justo sed commodo.', '1050'],
	['Thursday','chocolate', 'Forró csoki', 'Nulla ligula libero, varius in tortor a, ultrices pulvinar odio. Vestibulum mauris ex, ultrices consequat lobortis sed, molestie rhoncus neque. Morbi interdum mauris vitae odio finibus dapibus. Sed sodales non nunc vehicula placerat. Aliquam erat volutpat. Aliquam eu porta dolor.', '790'],
	['Friday','affogato', 'Affogato', 'Etiam et orci ut est viverra pellentesque vitae in lacus. Donec at augue lobortis, viverra nisl aliquam, molestie turpis. Nulla dolor est, ultricies id sagittis vitae, consequat in nibh. Fusce accumsan faucibus lorem, id pellentesque urna pellentesque ac. Nam ultrices risus leo, vel viverra enim luctus eu.', '1050'],
	['Saturday','irish', 'Ír kávé', 'Phasellus vitae ullamcorper nibh. Proin rhoncus eros et dui finibus, quis scelerisque lacus fringilla. Cras venenatis nunc eu accumsan molestie. Sed dictum nulla quis porta pulvinar. Aenean laoreet, eros blandit dictum interdum, dolor nisl maximus justo, porttitor egestas tortor ipsum ac dolor.', '1390'],
	['Sunday','mocha', 'Mokka', 'Aenean feugiat volutpat maximus. Vestibulum porttitor magna tortor. Praesent eu tellus sollicitudin, feugiat enim sed, pretium orci. Cras convallis, orci pellentesque facilisis scelerisque, nisi ligula aliquam orci, a fermentum leo mauris aliquam nisl. Vestibulum blandit euismod orci eget lobortis.', '1050']
];

$photo;
$name;
$description;
$price;

$currentDateTime = new DateTime();
$today = $currentDateTime->format('l');

for($i = 0; $i < 7; $i++) 
{
	if($today == $offers[$i][0])
	{
		$photo = $offers[$i][1];
		$name = $offers[$i][2];
		$description = $offers[$i][3];
		$price = $offers[$i][4];
	}
}

echo '<article class="offer">
		<h2>Mai ajánlatunk</h2>
		<div class="container">
			<div class="details">
				<img class="photo" src="res/img/coffee/'. $photo .'.png" alt="Egy nagyon menő kép az italról">
			</div>

			<div class="details">
				<h3>'. $name .'</h3>
				<p class="justify">'. $description .'</p>
				<h4>Kizárólag ma: '. $price .' Ft</h4>
			</div>
		</div>
	</article>';

//echo 'Ma '. $today .' van.';
?>


<?php
$naughty = 'content/naughty.txt';
$nice = 'content/nice.txt';

$file1 = fopen($naughty, 'r');

$name1 = trim(fgets($file1));
$photo1 = trim(fgets($file1));
$cause1 = trim(fgets($file1));

fclose($file1);

$file2 = fopen($nice, 'r');

$name2 = trim(fgets($file2));
$photo2 = trim(fgets($file2));
$cause2 = trim(fgets($file2));

fclose($file2);

echo '<article class="container">
		<div class="details">
			<h3 class="nn">A nap csintalan cicája</h3>
			<h4 class="nn"><a href="cicaink.php"><button class="button1" data-text="Awesome"><span class="actual-text">&nbsp;'. $name1 .'&nbsp;</span><span aria-hidden="true" class="hover-text">&nbsp;'. $name1 .'&nbsp;</span></button></a></h4>
			<img class="photo" src="res/img/cat/'. $photo1 .'" alt="Egy nagyon menő a cicáról">
			<p class="nn">'. $cause1 .'</p>
		</div>
		<div class="details">
			<h3 class="nn">A nap aranyos cicája</h3>
			<h4 class="nn"><a href="cicaink.php"><button class="button2" data-text="Awesome"><span class="actual-text">&nbsp;'. $name2 .'&nbsp;</span><span aria-hidden="true" class="hover-text">&nbsp;'. $name2 .'&nbsp;</span></button></a></h4>
			<img class="photo" src="res/img/cat/'. $photo2 .'" alt="Egy nagyon menő a cicáról">
			<p class="nn">'. $cause2 .'</p>
		</div>
	</article>';
?>


<?php
$rules =
[
	'Belépés előtt a kihelyezett kézfertőtlenítők használata kötelező!',
	'A cicákat nem szabad felemelni.',
	'Nem szabad hangoskodni, mert attól a cicák megijednek.',
	'Alvó cicát nem szabad zavarni.',
	'A cicákat etetni és itatni szigorúan tilos!',
	'Ha látszik egy cicán, hogy zaklatott akkor nem szabad zavarni.'
];

echo '<section><h2>Szabályzat</h2><ul class="fa-ul" style="--fa-li-margin: 1em">';
for($i = 0; $i < count($rules); $i++)
{
	echo '<li><span class="fa-li"><i class="fa-solid fa-cat" style="color: #ffe3ec;"></i></span>'. $rules[$i] .'</li>';
}
echo '</ul></section>';
?>

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