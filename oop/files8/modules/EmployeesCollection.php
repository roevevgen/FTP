<?php


    class EmployeesCollection
    {
        private $employees = []; // массив работников

        // Добавляет работника в набор
        public function add(Employee $employee) // параметр - объект класса Employee
        {
            $this->employees[] = $employee; // добавим объект в набор
        }

        public function getTotalSalary(): int
        {
            $sum = 0;

            foreach ($this->employees as $employee) {
                $sum += $employee->getSalary();
            }

            return $sum;
        }
    }