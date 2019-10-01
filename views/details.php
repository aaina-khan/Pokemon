<?php
if (!isset($_GET['id'])) {

    header("Location: http://pokemon.com/search");
    die();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pokemon - Details Page </title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>

    <?php
    include "header.php";

    ?>
    <div class="pokemon-details">
        <h1 class="pokemon-name"> <?php echo $name; ?> </h1>

        <div class="details-box">

            <div class="detail-card">
                <img class="pokemon-img" src="<?php echo $response['sprites']['front_default']; ?>" alt="" />

            </div>
            <div class="detail-card">
                <img class="pokemon-img" src="<?php echo $response['sprites']['back_default']; ?>" alt="" />

            </div>
            <div class="detail-card">
                <img class="pokemon-img" src="<?php echo $response['sprites']['front_shiny']; ?>" alt="" />

            </div>

        </div>

        <div class="details-banner">
            <h1 class="pokemon-details-heading"> Basic Details </h1>
            <div class="details-text">

                <p>Name of the Pokemon <?php echo $name ?></p>
                <p>Height of the Pokemon <?php echo $height; ?></p>
                <p>Weightof the Pokemon <?php echo $weight; ?></p>
            </div>
           



        </div>
        <div class="details-banner">
        <h1 class="pokemon-details-heading"> Abilities </h1>
            <div class="details-text">

                <?php
                $i = 1;
                foreach ($data as $ability) {
                    echo " <p> $i - $ability </p>";
                    $i++;
                } ?>

            </div>

        </div>
        <div class="details-banner">
            <h1 class="pokemon-details-heading"> Moves </h1>
            <div class="details-text">

                <?php
                $i = 1;
                foreach ($moves as $move) {
                    echo " <p> $i - $move </p>";
                    $i++;
                } ?>

            </div>

        </div>
    </div>


</body>

</html>