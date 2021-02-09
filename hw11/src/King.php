<?php

// King наследуется от Unit
// King - дочерний класс
// Unit - родительский класс
// King наследует свойства и методы родителя
namespace Autoload\Lesson;
use Autoload\Lesson\Core\Unit;
use Autoload\Lesson\Knight;

class King extends Unit {
    private $gold = 900;
    public $army = [];

    public function change_gold($gold) {
        $this->gold += $gold;
    }

    public function has_gold() {
        return $this->gold > 0;
    }
    
    public function rest() {
        $this->gold += 100;
    }

    public function recruting($unit) {
        $voenkomat = array('infantry' => 200, 'knight' => 150);
        if ($this->has_gold() && $this->gold >= 150) {
            $this->gold -= $voenkomat[$unit];
            if ($unit === 'knight') {
                $solder = new Knight(15,10,7);
                $this->army[] = $solder;
            }
            else {
                $solder = new Infantry(10,20,5);
                $this->army[] = $solder;
            }  
        }
        else {
            echo 'Нужно больше золота';
        }
    }

    public function attack($king)
    {
        if ($this->army)    
        foreach ($this->army as $key => $value) {
            $value->attack($king->army[$key]);
        }
    }

}

