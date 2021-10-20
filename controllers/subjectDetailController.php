<?php

$test = Subject::getListSubjects($dbc);
//
//foreach ($test as $id)
//    var_dump($id->getId());
//
//if ($_GET['id'] == $id->getId()):
//    header('Location: index.php');

if(!empty($_GET['id'])):
    $subject = Subject::getSubjectById($dbc, $_GET['id']);

endif;

include "views/subjectDetail.php";