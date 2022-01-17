<?php


    class StudentBSU extends Student
    {
        private $bsu;

        public function __construct($name, $age, $years, $course, $bsu)
        {
            parent::__construct($name, $age, $years, $course);
            $this->bsu = $bsu;
        }

        /**
         * @return mixed
         */
        public function getBsu()
        {
            return $this->bsu;
        }

        /**
         * @param mixed $bsu
         */
        public function setBsu($bsu): void
        {
            $this->bsu = $bsu;
        }
    }