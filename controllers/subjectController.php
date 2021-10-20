<?php

$aSubjectsCollection = Subject::getListSubjects($dbc);

include "views/subjectList.php";
