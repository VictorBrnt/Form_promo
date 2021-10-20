<?php
if (!empty($_GET['id'])):
    $student = Student::getStudentById($dbc, $_GET['id']);
endif;

if (($_GET["action"] == "studentAdd") AND !empty($_POST) AND (!empty($_POST['valid']))):
    $test = Student::addStudent($dbc, $_POST['name'], $_POST['firstname'], $_POST['birthdate']);
    header('Location:index.php?action=studentList');
elseif (($_GET["action"] == "studentEdit") AND !empty($_POST) AND (!empty($_POST['valid']))):
    Student::updateStudent($dbc, $_POST['id'],$_POST['name'],$_POST['firstname'],$_POST['birthdate']);
    header('Location:index.php?action=studentDetail&id='.$_POST['id'].'');
endif;

include "views/studentForm.php";