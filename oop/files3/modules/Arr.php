<?php


    class Arr
    {
        private $numbers = [];

//        public function __construct($numbers)
//        {
//            $this->numbers = $numbers;
//        }

        // Добавляет число в набор:
        public function add($num)
        {
            $this->numbers[] = $num;
        }
        public function push($numbers)
        {
            $this->numbers = array_merge($this->numbers, $numbers);
        }

        // Находит сумму чисел набора:
        public function getSum()
        {
            return array_sum($this->numbers);
        }
    }