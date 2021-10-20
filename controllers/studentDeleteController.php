<?php
if(!empty($_GET['id'])):
    Student::getDeleted($dbc, $_GET['id']);
    header('Location:index.php?action=studentList');
endif;
