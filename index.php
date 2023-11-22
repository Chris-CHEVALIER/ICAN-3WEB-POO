<?php require("./layout/header.php") ?>
<div class="d-flex justify-content-center gap-5 mt-5">
    <?php

    /* $pikachuData = [
        "id" => 25,
        "name" => "Pikachu",
        "description" => "Quand il dort, Pikachu génère et stocke de l'électricité dans les poches de ses joues. Ce Pokémon est un petit curieux qui vient régulièrement nous rendre visite à la base.",
        "image" => "https://www.pokepedia.fr/images/thumb/7/76/Pikachu-DEPS.png/500px-Pikachu-DEPS.png",
    ];

    $salamecheData = [
        "id" => 4,
        "name" => "Salamèche",
        "description" => "La flamme au bout de sa queue symbolise sa vitalité. Elle brûle intensément quand il est en bonne santé",
        "image" => "https://www.pokepedia.fr/images/thumb/8/89/Salam%C3%A8che-RFVF.png/500px-Salam%C3%A8che-RFVF.png",
    ];

    $pikachu = new Pokemon($pikachuData);
    $salameche = new Pokemon($salamecheData); */

    /* $pokemons = [$salameche, $pikachu]; */
    $pokemons = $pokemonManager->getPokemons();

    /* $herbizarre = $pokemonManager->get(5);
    echo "<pre>";
    var_dump($herbizarre);
    echo "</pre>"; */

    foreach ($pokemons as $pokemon) { ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $pokemon->getName() ?></h5>
                <p class="card-text"><?= $pokemon->getDescription() ?></p>
                <a href="./update.php?id=<?= $pokemon->getId() ?>" class="btn btn-warning">Modifier</a>
                <a href="./delete.php?id=<?= $pokemon->getId() ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php } ?>
</div>
<?php require("./layout/footer.php") ?>