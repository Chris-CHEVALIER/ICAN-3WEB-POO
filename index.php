<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container d-flex justify-content-center gap-5 mt-5">
        <?php

        function loadClass(string $class)
        {
            require "$class.php";
        }

        spl_autoload_register("loadClass");

        $pikachu = new Pokemon(
            25,
            "Pikachu",
            "Quand il dort, Pikachu génère et stocke de l'électricité dans les poches de ses joues. Ce Pokémon est un petit curieux qui vient régulièrement nous rendre visite à la base.",
            "https://www.pokepedia.fr/images/thumb/7/76/Pikachu-DEPS.png/500px-Pikachu-DEPS.png",
            "Electrik"
        );
        /* echo "<pre>";
    print_r($pikachu);
    echo "</pre>"; */
        $salameche = new Pokemon(
            4,
            "Salamèche",
            "La flamme au bout de sa queue symbolise sa vitalité. Elle brûle intensément quand il est en bonne santé",
            "https://www.pokepedia.fr/images/thumb/8/89/Salam%C3%A8che-RFVF.png/500px-Salam%C3%A8che-RFVF.png",
            "Feu"
        );

        //$salameche->setName("djbsj")->setNumber(23)->s

        $pokemons = [$salameche, $pikachu];
        /* $pikachu->rename("dkjbfcjlsvqbfjlsqbljsfbljqsfhbfiklbdfqsljbfsljbfsdqljfqdjsqkjbsfjlqsbflsqfkbqlsfbqfsklqfsbqsflk");
        $salameche->rename("Salamèche");
        $pikachu->displayName();
        $salameche->displayName(); */

        foreach ($pokemons as $pokemon) { ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $pokemon->getName() ?></h5>
                    <p class="card-text"><?= $pokemon->getDescription() ?></p>
                    <a href="#" class="btn btn-warning"><?= $pokemon->getType1() ?></a>
                </div>
            </div>
        <?php } ?>


    </main>
</body>

</html>