<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setXY();
        $this->z=$z;
    }
    public function getXYZ(){
        $arrnew=parent::getXY();
        array_push($arrnew,$this->z);
        return $arrnew;
    }
    public function toString()
    {
        return implode(",",$this->getXYZ());
    }
}