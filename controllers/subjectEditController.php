<?php

if (!empty($_GET['id'])):
  $subject = Subject::getSubjectById($dbc, $_GET['id']);
endif;

if (!empty($_POST) AND (!empty($_POST['valid']))):
    Subject::updateSubject($dbc, $_POST['id'],$_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
endif;

include "views/subjectForm.php";