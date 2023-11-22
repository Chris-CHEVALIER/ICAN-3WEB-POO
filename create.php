<?php require("./layout/header.php");
if ($_POST) {
    $pokemonManager->create(new Pokemon($_POST));
}
?>
<h2>Créer un Pokémon</h2>
<form method="post">
    <label for="number" class="form-label">Numéro</label>
    <input type="number" class="form-control" name="number" id="number" placeholder="Numéro du Pokémon">
    <label for="name" class="form-label">Nom</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Nom du Pokémon">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" class="form-control" placeholder="Description du Pokémon"></textarea>
    <label for="image" class="form-label">Image</label>
    <input type="text" name="image" id="image" class="form-control" placeholder="Image du Pokémon">
    <input type="submit" value="Créer" class="btn btn-success mt-2">
</form>
<?php require("./layout/footer.php") ?>