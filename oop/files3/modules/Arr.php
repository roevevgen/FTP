<?php


    class Arr
    {
        private $numbers = [];
        private SumHelper $sumHelper;

        public function __construct($numbers)
        {
            $this->sumHelper = new SumHelper;
        }



//        public function push($numbers)
//        {
//            $this->numbers = array_merge($this->numbers, $numbers);
//
//        }
//
//        // Находит сумму чисел набора:
//        public function getSum()
//        {
//            return array_sum($this->numbers);
//        }

        public function getSum23()
        {
            // Для краткости запишем $this->nums в переменную:

            $this->nums = $numbers ;

            // Найдем описанную сумму:
            return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
        }

        // Добавляет число в набор:
        public function add($number)
        {
            $this->nums[] = $number;

        }
    }