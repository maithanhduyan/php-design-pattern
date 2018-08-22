<?php
require'Shape.php';
require"Rectangle.php";
require'Square.php';
require('Circle.php');
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