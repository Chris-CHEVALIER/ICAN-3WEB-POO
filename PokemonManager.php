<?php

class PokemonManager
{
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=pokedex-ican;port=3306;charset=utf8', 'root', 'root');
    }

    public function getPokemons()
    {
        $query = $this->db->query('SELECT * FROM pokemon ORDER BY number'); // Requête SQL pour récupérer tous les Pokémons
        $datas = $query->fetchAll(); // Récupère TOUTES les lignes de la table
        $pokemons = []; // Créé un tableau vide 
        foreach ($datas as $data) { // Boucle sur les lignes récupérées
            $pokemons[] = new Pokemon($data); // Convertit chacun des lignes en objet Pokemon
        }
        return $pokemons; // Renvoie le tableau de Pokémon remplit d'objets
    }

    public function get(int $pokemonId)
    {
        $query = $this->db->prepare('SELECT * FROM pokemon WHERE id = :id'); // Requête SQL pour récupérer un Pokémon par son id
        $query->execute([
            "id" => $pokemonId
        ]);
        $data = $query->fetch();
        return new Pokemon($data);
    }

    public function delete(int $pokemonId)
    {
        $this->db->query("DELETE FROM pokemon WHERE id = $pokemonId"); // Requête SQL pour supprimer un Pokémon par son id
    }

    public function create(Pokemon $newPokemon)
    {
        $this->db->query("INSERT INTO pokemon (number, name, description, image) VALUES ({$newPokemon->getNumber()}, '{$newPokemon->getName()}', '{$newPokemon->getDescription()}', '{$newPokemon->getImage()}')"); // Requête SQL pour ajouter un nouveau Pokémon
    }

    public function update(Pokemon $updatedPokemon)
    {
        $this->db->query("UPDATE pokemon SET number = {$updatedPokemon->getNumber()}, name = '{$updatedPokemon->getName()}', description = '{$updatedPokemon->getDescription()}', image = '{$updatedPokemon->getImage()}'  WHERE id = {$updatedPokemon->getId()}"); // Requête SQL pour modifier un Pokémon par son id
    }
}
