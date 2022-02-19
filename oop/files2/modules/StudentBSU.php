<?php

    namespace files2\modules;
    /**
     * Class StudentBSU
     * @package modules
     */
    class StudentBSU extends Student
    {
        private $bsu;

        /**
         * StudentBSU constructor.
         * @param $name
         * @param $age
         * @param $years
         * @param $course
         * @param $bsu
         */
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