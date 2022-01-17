<?php


    class ArraySumHelper
    {
        public function getSum1($arr)
        {
            return $this->getSum($arr, 1);
        }

        public function getSum2($arr)
        {
            return $this->getSum($arr, 2);
        }

        public function getSum3($arr)
        {
            return $this->getSum($arr, 3);
        }

        public function getSum4($arr)
        {
            return $this->getSum($arr, 4);
        }

        private function getSum($arr, $power)
        {
            $sum = 0;

            foreach ($arr as $elem) {
                $sum += pow($elem, $power);
            }

            return $sum;
        }
    }