<?php


   abstract class Figure
    {
       abstract public function getSquare();
       abstract public function getPerimeter();

       public function getRatio()
       {
           return $this->getSquare() / $this->getPerimeter();
       }

        abstract public function getSquarePerimeterSum();

    }