<?php require("./layout/header.php");
$pokemon = $pokemonManager->get($_GET["id"]);
?>
<h2>Modifier <?= $pokemon->getName() ?></h2>
<form method="post">
    <label for="number" class="form-label">Numéro</label>
    <input type="number" class="form-control" value="<?= $pokemon->getNumber() ?>" name="number" id="number" placeholder="Numéro du Pokémon">
    <label for="name" class="form-label">Nom</label>
    <input type="text" name="name" id="name" value="<?= $pokemon->getName() ?>" class="form-control" placeholder="Nom du Pokémon">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" class="form-control" placeholder="Description du Pokémon"><?= $pokemon->getDescription() ?></textarea>
    <label for="image" class="form-label">Image</label>
    <input type="text" name="image" id="image" value="<?= $pokemon->getImage() ?>" class="form-control" placeholder="Image du Pokémon">
    <input type="submit" value="Modifier" class="btn btn-warning mt-2">
</form>
<?php
if ($_POST) {
    $pokemon->hydrate($_POST);
    $pokemonManager->update($pokemon);
}
require("./layout/footer.php") ?>