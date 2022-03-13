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
    <script src="./js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/bfbe8a8ac6.js" crossorigin="anonymous"></script>
    <title>PokeEtec</title>
</head>

<body>
    <div class="container">
        <div class="pokemon-modal">
            <div class="pokemon-modal-card">
                <button class="modal-close-button">Fechar</button>
                <div class="pokemon-modal-content">
                    <img src="./assets/pokemon-logo.png" alt="" class="modal-img">
                    <h1 class="modal-id"></h1>
                    <h1 class="modal-name"></h1>
                    <h3 class="modal-height"></h3>
                    <h3 class="modal-weight"></h3>
                    <h3 class="base-experience"></h3>
                    </h3>
                    <div class="modal-type"></div>
                </div>
            </div>
        </div>
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
                    <div class='pokemon-card' 
                    data-id="<?php echo $pokemon["id"] ?>" 
                    data-name="<?php echo $pokemon["name"] ?>" 
                    data-typeprimary="<?php echo $pokemon["types"][0] ?>"
                    data-img="<?php echo $pokemon["sprite"] ?>" 
                    data-height="<?php echo $pokemon["height"] ?>" 
                    data-weight="<?php echo $pokemon["weight"] ?>" 
                    data-basexp="<?php echo $pokemon["base_experience"] ?>">
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
                <div class="credits">
                    Created by Thiago
                </div>
            </div>
        </footer>
    </div>
</body>

</html>