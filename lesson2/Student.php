<?php
    /**
     * Created by PhpStorm.
     * User: nicu
     * Date: 30.10.2017
     * Time: 22:31
     */
    
    namespace lesson2;


    /**
     * Class Student
     * @package lesson2
     * @property $firstName
     * @property $lastName
     * @property $birthDate
     */
    class Student
    {
        public $firstName;
        public $lastName;
        public $birthDate;
        
        public function __construct($firstName, $lastName, $birthDate)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->birthDate = $birthDate;
        }
    
        public function getFullName()
        {
            return $this->lastName . ' ' . $this->firstName;
        }
    }