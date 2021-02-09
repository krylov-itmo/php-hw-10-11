<?php

// Knight наследуется от BattleUnit
// Knight - дочерний класс
// BattleUnit - родительский класс
// Knight наследует свойства и методы родителя
namespace Autoload\Lesson;
use Autoload\Lesson\Core\BattleUnit;

class Knight extends BattleUnit {
    public function __construct($health, $agility, $attack)
    {
        parent::__construct($health, $agility, $attack); // вызов конструктора родителя
    }
    public function rest() {
        parent::plus_health(parent::getMaxHealth());

    }
    public function attack($enemy) {
        if ($enemy->is_alive()) {
            $enemy->minus_health($this->attack);
            } else {
                echo 'Противник мертв';
            }
    }
}
