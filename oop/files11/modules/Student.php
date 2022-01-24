<?php


    class Student extends User
    {
        private $scholarship;

        /**
         * @return mixed
         */
        public function getScholarship()
        {
            return $this->scholarship;
        }

        /**
         * @param mixed $scholarship
         */
        public function setScholarship($scholarship): void
        {
            $this->scholarship = $scholarship;
        }

        public function increaseRevenue($value)
        {
            // TODO: Implement increaseRevenue() method.
            $this->scholarship = $this->scholarship + $value;
        }

        public function decreaseRevenue($value)
        {
            // TODO: Implement decreaseRevenue() method.
            $this->scholarship = $this->scholarship - $value;
        }
    }