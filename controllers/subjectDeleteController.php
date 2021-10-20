<?php
if(!empty($_GET['id'])):
    Subject::getDeleted($dbc, $_GET['id']);
    header('Location:index.php?action=subjectList');
endif;
