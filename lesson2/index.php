<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/functions.php';
    
    
    $studentsRepository = new \lesson2\XmlStudentRepository(__DIR__.'/list.xml');
    
    $students = $studentsRepository->findAll();
    
    foreach ($students as $student) {
        echo $student->getFullName().$student->birthDate.PHP_EOL;
    }
    
    //$studentsRepository->saveAll($students);