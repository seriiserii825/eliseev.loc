<?php
    /**
     * Created by PhpStorm.
     * User: nicu
     * Date: 31.10.2017
     * Time: 0:13
     */
    
    namespace lesson2;
    
    
    class XmlStudentRepository extends StudentRepository
    {
        private $file;
    
        public function __construct($file)
        {
            $this->file = $file;
        }
    
        public function findAll(){
            $students = [];
            $rows = simplexml_load_file($this->file);
            foreach ($rows as $row) {
                $students[] = new \lesson2\Student($row->firstName, $row->lastName, $row->birthDate);
            }
            return $students;
        }
    
    }