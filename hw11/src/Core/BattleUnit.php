<?php

namespace Autoload\Lesson\Core;

// BattleUnit наследуется от Unit
// BattleUnit - дочерний класс
// Unit - родительский класс
// BattleUnit наследует свойства и методы родителя

interface AttackAble {
    function attack(BattleUnit $enemy);
}

abstract class BattleUnit extends Unit implements AttackAble{
    // внутри класса BattleUnit можно обратиться
    // к public и protected свойствам и методам родителя
    protected $attack;
    public function __construct($health, $agility, $attack)
    {
        parent::__construct($health, $agility); // вызов конструктора родителя
        if ($attack <= 0) {
            throw new \InvalidArgumentException('Ошибка атаки');
        }
        $this->attack = $attack;
    }
    
}















