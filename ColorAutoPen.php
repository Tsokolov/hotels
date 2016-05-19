<?php

// Добавляем цвет пасты для механического карандаша, и делаем из него цветную авторучку
class ColourAutoPen extends MechanicalPencil{
    protected $maxunits = 1500;
    protected $unitsPerChar = 0.5;
    protected $colour = 'black';

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

}