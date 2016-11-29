<?php

function newSection($section){

}

function newArticle($photo=false, $article){
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Générateur HTML/ MailChimp
	</title>
</head>
<body>
<p>Hello</p><br><br>
Combien de parties différentes?
	<form action="" method="GET">
		<input type="number" name="part">
	</form>

		<?php
			if (isset($_GET['part'])) {
				$partCount = $_GET['part'];
				for ($i=0; $i < $partCount; $i++) { 
					newSection($i);
				}
			}
		?>
</body>
</html>