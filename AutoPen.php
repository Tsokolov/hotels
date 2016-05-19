<?php

// Расширяем тип ручки, добавляем возможность заправлять ручку необходимым количеством чернил
class AutoPen extends Pen{
    protected $maxunits = 1500;
    protected $units = 1500;
    protected $noUnitsMessage = 'Закончились чернила, заправьте ручку';
    public function filling($amount){
        $result = $amount+$this->units;
        if($result>$this->maxunits){
            return "Заправка больше ".$this->units." единиц невозможна.";
        }
        return "Текущий уровень пишущего материала ".$result. " из ".$this->maxunits;
    }
}
