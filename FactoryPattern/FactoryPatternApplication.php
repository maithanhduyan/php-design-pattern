<?php
$factory = new ShapeFactory();
// hình tròn Shape::CIRCLE
$shapeCircle = $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();