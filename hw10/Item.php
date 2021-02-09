<?php


class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    public function __construct(int $id, string $title)
    {
        $this->id = $id;
        if ($id <= 0) {
            throw new InvalidArgumentException('Ошибка id');
        }
        $this->title = $title;
        if (strlen($title) > 10) {
            throw new InvalidArgumentException('Ошибка Заголовка');
        }  
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {   
        if ($price <= 0) {
            throw new InvalidArgumentException('Ошибка цены');
        }
        $this->price = $price;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {   
        if (strlen($material) < 3) {
            throw new InvalidArgumentException('Ошибка материала');
        }  
        $this->material = $material;
    }
    // значения свойств title и id должны задаваться через конструктор,

    // добавить все необходимые геттеры и сеттеры

}