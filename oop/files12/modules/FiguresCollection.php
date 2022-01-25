<?php


    class FiguresCollection
    {
        private $figures = [];

        public function addFigure(Figure $figure)
        {
            $this->figures[] = $figure;
        }

        public function getTotalSquare(): int
        {
            $sum = 0;

            foreach ($this->figures as $figure) {
                $sum += $figure->getSquare(); // используем метод getSquare
            }

            return $sum;
        }

    }