<?php

class Pokemon
{
    // Attributs
    private int $id;
    private int $number;
    private string $name;
    private string $description;
    private string $image;

    // Méthodes
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /*
    $data = [
        "id" => 1,
        "number" => 25,
        "name" => "Pikachu",
        "description" => "Pika Pika",
        "image" => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png" 
     ]
     */

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key); // setId, setNumber, setName, setDescription, setImage
            if (method_exists($this, $method)) {
                $this->$method($value); // setId(1), setNumber(25), setName("Pikachu"), setDescription("Pika Pika"), setImage("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png")
            }
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}
