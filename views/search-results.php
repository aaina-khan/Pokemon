<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pokemon - Search Results Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body class='search-page-body'>
	<?php
    include "header.php"
    ?>
	<div class="search-content">
		<?php
		foreach ($filteredResults as $pokemon) {

			$id = explode('/', $pokemon['url']);
			$detailUrl =  SITE_URL . "details?id=" . $id[6];

			echo "<a href=' $detailUrl '> <div class='pokemon-list'>"
				. $pokemon['name'] .
			"</div> </a>";
		}
		?>
	</div>
</body>

</html>