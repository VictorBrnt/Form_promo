<?php

//$oStudents = new Student();
//$aListStudent = $oStudents->getList($dbc);
$aListStudent = Student::getList($dbc);

include "views/studentList.php";
