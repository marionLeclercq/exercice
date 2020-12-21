<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 1</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	 <!-- La police de chez Google Fonts: Poppins, 100 et 900, à utiliser  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&display=swap" rel="stylesheet">

</head>
<body>

<?php
// Tableau des projets. Aficher que les trois premiers projets dans la section "Nos projets".
$projets = array (
  array("Projets", "Open Space", "img/1.png"),
  array("Réalisations", "Salles de réunions", "img/2.png"),
  array("Idées", "Repenser l’ espace créatif", "img/3.png"),
  array("Projets", "Bureau en ville", "img/1.png"),
  array("Réalisations", "Réalisaion exemple", "img/2.png")
);
?>
<header>
	<section>
		<h1>Flessibilita, Design e Qualité Italiana</h1>
		<p>L’excellence de l’agencement de bureau.</p>
		<a id="clickPop" onclick="openPopup();">Un Pop-up</a>
		<div id="popup">
			<input type="email" name="email" />
			<input type="submit" name="inscription" value="incription" />
			<span>X</span>
		</div>
	</section>
</header>

<main>
	<h2>Nos projets</h2>
	<div>
		<?php
		for ($i=0; $i < 3; $i++) { 
			echo "<section><img id='".$projets[$i][0]."' src='".$projets[$i][2]."' alt='".$projets[$i][1]."'><h4>" .$projets[$i][0]. "</h4><h3>".$projets[$i][1]."</h3>";
			echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></section>";
		}
		?>
	<div>
</main>

<footer>
	<section>
		<h2>Le design au cœur de notre métier</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat nisl luctus purus rhoncus consectetur. Ut sagittis sem eu est vehicula interdum. Curabitur in lectus placerat, fringilla libero quis, maximus sem. Cras sed augue eu mi scelerisque mattis. Aenean non ornare dui, ac vestibulum arcu. Praesent nec tristique justo, porta rhoncus risus.</p>
		<input type="email" name="email" />
		<input type="submit" name="inscription" value="incription" />
	</section>
	<div></div>
</footer>


<!-- Script JS -->
<script src="script.js"></script>

</body>

</html>

