<?php
include('Shape.php');
include('Rectangle.php');
include('Square.php');
include('Circle.php');
class ShapeFactory
{
    public function getShape($type) {
        switch ($type) {
            case Shape::SQUARE:
                return new Square;
                break;
            case Shape::CIRCLE:
                return new Circle;
                break;

            case Shape::RECTANGLE:
                return new Rectangle;
                break;
            default:
                return null;
                break;
        }
        return null;
    }
}