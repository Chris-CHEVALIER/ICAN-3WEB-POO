<?php

class Pokemon
{
    // Attributs
    private int $id;
    private int $number;
    private string $name;
    private string $description;
    private string $image;
    private string $type1;
    private string $type2;

    // Méthodes
    public function __construct(int $number, string $name, string $description, string $image, string $type1, string $type2 = "")
    {
        $this->number = $number;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->type1 = $type1;
        $this->type2 = $type2;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        if ($name !== "" && strlen($name) < 50) {
            $this->name = $name;
        }
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

    public function getType1()
    {
        return $this->type1;
    }


    public function getType2()
    {
        return $this->type2;
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

    public function setType1($type1)
    {
        $this->type1 = $type1;
        return $this;
    }

    public function setType2($type2)
    {
        $this->type2 = $type2;
        return $this;
    }
}

/* $pikachu = new Pokemon();

echo $pikachu->attack(); */