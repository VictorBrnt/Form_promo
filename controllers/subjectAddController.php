<?php
if (!empty($_POST) AND (!empty($_POST['valid']))):
    Subject::addSubject($dbc, $_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
    header('Location:index.php?action=subjectList');
endif;

require_once "views/subjectForm.php";