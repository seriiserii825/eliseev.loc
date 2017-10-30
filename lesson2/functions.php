<?php
    function loadStudentsFromTextFile($file){
        $students = [];
        $rows = file($file);
        foreach ($rows as $row) {
            $values = array_map('trim', explode(';', $row));
            $students[] = new \lesson2\Student($values[0], $values[1], $values[2]);
        }
        return $students;
    }
    
    function saveStudentsToTxt($students, $file){
        $rows = [];
        foreach ($students as $student) {
            $rows[] = implode(';', [
              $student->firstName,
              $student->lastName,
              $student->birthDate
            ]);
        }
        file_put_contents($file, implode(PHP_EOL, $rows));
    }
    
    function debug($arr){
        echo '<pre>'.print_r($arr, true).'</pre>';
    }
    