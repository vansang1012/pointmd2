<?php
include 'Point2D.php';
include_once 'Point3D.php';
$point2d=new Point2D(3,4);
echo $point2d->toString();
$point3d=new Point3D(3,4,5);
var_dump($point3d->toString());