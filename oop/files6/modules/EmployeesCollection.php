<?php


    class EmployeesCollection
    {
        private array $employees = []; // массив работников, по умолчанию пустой

        // Получаем всех работников в виде массива:
        public function get(): array
        {
            return $this->employees;
        }

        // Подсчитываем количество хранимых работников:
//        public function count(): string
//        {
//            return count($this->employees). ' работника';
//        }

        // Добавляем нового работника:
        public function add($newEmployee)
        {
            if (!$this->exists($newEmployee)) {
                $this->employees[] = $newEmployee; // $employee - объект класса Employee
            }

        }
        // Находим суммарную зарплату:
//        public function getTotalSalary(): int
//        {
//            $sum = 0;
//
//            // Перебираем работников циклом:
//            foreach ($this->employees as $employee) {
//                $sum += $employee->getSalary(); // получаем з/п работника через метод getSalary()
//            }
//
//            return $sum;
//        }
        private function exists($newEmployee): bool
        {
            foreach ($this->employees as $employee) {
                if ($employee === $newEmployee) { // сравниваем через ===
                    return true;
                }
            }

            return false;
        }
    }