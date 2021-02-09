<?php
namespace Autoload\Lesson;
use Autoload\Lesson\Core\BattleUnit;
// Infantry наследуется от BattleUnit
// Infantry - дочерний класс
// BattleUnit - родительский класс
// Infantry наследует свойства и методы родителя

class Infantry extends BattleUnit {
    public function __construct($health, $agility, $attack)
    {
        parent::__construct($health, $agility, $attack); // вызов конструктора родителя
    }

    // переопределение метода родителя
    public function plus_health(int $points)
    {
        parent::plus_health($points + 2); // вызов метода родителя
    }
    public function rest() {
        parent::plus_health(5);
    }
    public function attack($enemy) {
        if ($enemy->is_alive()) {
            $point_attack = $this->attack + ($this->agility - $enemy->agility);
            $enemy->minus_health($point_attack);
        } else {
            echo 'Противник мертв';
        
        }
    }

}