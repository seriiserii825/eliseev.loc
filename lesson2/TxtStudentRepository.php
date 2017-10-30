<?php
    /**
     * Created by PhpStorm.
     * User: nicu
     * Date: 31.10.2017
     * Time: 0:04
     */
    
    namespace lesson2;
    
    
    class TxtStudentRepository extends StudentRepository
    {
        private $file;
    
        public function __construct($file)
        {
            $this->file = $file;
        }
    
        public function findAll(){
            $students = [];
            $rows = file($this->file);
            foreach ($rows as $row) {
                $values = array_map('trim', explode(';', $row));
                $students[] = new \lesson2\Student($values[0], $values[1], $values[2]);
            }
            return $students;
        }
    
        public function saveAll($students){
            $rows = [];
            foreach ($students as $student) {
                $rows[] = implode(';', [
                  $student->firstName,
                  $student->lastName,
                  $student->birthDate
                ]);
            }
            file_put_contents($this->file, implode(PHP_EOL, $rows));
        }
    }