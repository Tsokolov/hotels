<?php


// Изменяем расходность материала ручки, принимаем грифель карандаша за единицу материала и превращаем авторучку в механический карандаш
class MechanicalPencil extends AutoPen{
    protected $maxunits = 5;
    protected $unitsPerChar = 0.001;

}