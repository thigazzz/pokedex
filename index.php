<?php
$pokemons = require('./api/api.php');
require('./utils/utils.php');
$util = new utils();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles//index.css">
    <title>PokeEtec</title>
</head>

<body>
    <div class="container">

        <header class="header">
            <div class="center">
                <div class="logo-container"><img class="pokemon-logo" src="./assets/pokemon-logo.png" alt="logo"></div>
            </div>
        </header>
        <main class="main">
            <div class="pokemon-container">
                <?php
                foreach ($pokemons as $pokemon) {
                ?>
                    <div class='pokemon-card'>
                        <img class="pokemon-card-image" src="<?php echo $pokemon["sprite"] ?>" alt="">
                        <h1 class="pokemon-card-name"><?php echo $pokemon["name"] ?></h1>
                        <div class="type-container">
                            <?php
                            foreach ($pokemon["types"] as $type) {
                            ?>
                                <div class="type-card" style="background-color: <?php echo $util->setColorIntoTypeCard($type) ?>;">
                                    <?php echo $type ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </main>
        <footer class="footer">
            <div class="center">
                footer
            </div>
        </footer>
    </div>
</body>

</html>