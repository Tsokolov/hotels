<?php

// Создаем класс ручки, которая пишет текст
class Pen
{
    protected $units = 1000;

    protected $unitsPerChar = .5;

    protected $noUnitsMessage = "Закончились чернила, смените ручку";

    /**
     * @param $text
     * @return string
     */
    public function write($text){
        $consumption = strlen($text)*.5;
        if($consumption>$this->units){
            return $this->noUnitsMessage;
        }
        $this->units -= $consumption;
        return $text;
    }

    /**
     * @return int
     */
    public function getunits()
    {
        return $this->units;
    }

    /**
     * @return float
     */
    public function getUnitsPerChar()
    {
        return $this->unitsPerChar;
    }

    /**
     * @param float $unitsPerChar
     */
    public function setUnitsPerChar($unitsPerChar)
    {
        $this->unitsPerChar = $unitsPerChar;
    }


}
