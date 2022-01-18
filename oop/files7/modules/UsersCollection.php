<?php


    class UsersCollection
    {
        private array $employees = []; // массив работников
        private array $students = []; // массив студентов

        // Добавление в массивы:
        public function add($user)
        {
            // Если передан объект класса Employee:
            if ($user instanceof Employee) {
                $this->employees[] = $user; // добавляем к работникам
            }

            // Если передан объект класса Student:
            if ($user instanceof Student) {
                $this->students[] = $user; // добавляем к студентам
            }
        }

        // Получаем суммарную зарплату:
        public function getTotalSalary(): int
        {
            $sum = 0;

            foreach ($this->employees as $employee) {
                $sum += $employee->getSalary();
            }

            return $sum;
        }

        // Получаем суммарную стипендию:
        public function getTotalScholarship(): int
        {
            $sum = 0;

            foreach ($this->students as $student) {
                $sum += $student->getScholarship();
            }

            return $sum;
        }
        // Получаем общую сумму платежей и работникам, и студентам:
        public function getTotalPayment(): int
        {
            return $this->getTotalScholarship() + $this->getTotalSalary();
        }
    }