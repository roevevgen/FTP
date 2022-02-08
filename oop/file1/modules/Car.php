<?php
declare(strict_types=1);

namespace ftp\file1\modules;

    class Car
    {
        private $name;
        private $color;
        private $fuel;

        public function __construct($name, $color, $fuel)
        {
            $this->name = $name;
            $this->color = $color;
            $this->fuel = $fuel;
        }

        /**
         * @return mixed
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * @param mixed $color
         */
        public function setColor($color): void
        {
            $this->color = $color;
        }

        /**
         * @return mixed
         */
        public function getFuel()
        {
            return $this->fuel;
        }

        /**
         * @param mixed $fuel
         */
        public function setFuel($fuel): void
        {
            $this->fuel = $fuel;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name): void
        {
            $this->name = $name;
        }
    }