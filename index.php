<?php
$pokemons = require('./api/api.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
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
                        <img src="<?php echo $pokemon["sprite"] ?>" alt="">
                        <?php echo $pokemon["name"] ?>
                        <div class="type-container">
                            <?php
                            foreach ($pokemon["types"] as $type) {
                            ?>
                                <div class="type-card">
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