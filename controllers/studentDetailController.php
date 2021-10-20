<?php
if(!empty($_GET['id'])):

    $student = Student::getStudentById($dbc, $_GET['id']);

endif;

include "views/studentDetail.php";