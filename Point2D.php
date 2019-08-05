<?php


class Point2D
{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function getXY(){
        $arrnew=[];
        array_push($arrnew,$this->x,$this->y);
        return $arrnew;
    }
    public function toString(){
        return implode(",",$this->getXY());
    }

}
