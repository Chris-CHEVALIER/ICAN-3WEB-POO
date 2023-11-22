<?php
require("layout/header.php");
$pokemonManager->delete($_GET["id"]);
//echo "<script>window.location.href = 'index.php'</script>";
