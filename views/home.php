<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pokemon - Home Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="home-content">
        <input class="search-bar" id="searchBar" type="text" placeholder="Enter Pokemon to Search" value="" onkeydown="onKeyDown(event)">
        <br>
        <input class="search-button" type="button" value="Search" onclick="performSearch()">
    </div>
    <div class="pokemon-banner">
        <div class="pokemon-banner-title">
            Pokemon of the day
        </div>
        <div class="pokemon-banner-image">
            <?php
            echo "<img src='$image' alt='$name' class='src'>";
            ?>
        </div>
    </div>
</body>

<script>
    let enteredQuery = '';

    document.getElementById('searchBar').addEventListener('input', function() {
        enteredQuery = this.value;
    });

    function onKeyDown(event) {
        if (event.keyCode === 13) {
            performSearch();
        }
    }

    function performSearch() {
        searchUrl = "http://pokemon.com/search?query=" + enteredQuery;
        window.location.href = searchUrl;
    }
</script>

</html>