<?php
include "views/header.php";

spl_autoload_register(function ($class) {
    require "models/$class.php";
});

$dbc = new Database();

// Dispatcher
if (!empty($_GET)):
    switch ($_GET['action']):
        case 'subjectList':
            include('controllers/subjectController.php');
            break;
        case 'subjectAdd':
            include('controllers/subjectAddController.php');
            break;
        case 'subjectDelete':
            include('controllers/subjectDeleteController.php');
            break;
        case 'subjectEdit':
            include('controllers/subjectEditController.php');
            break;
        case 'subjectDetail':
            include('controllers/subjectDetailController.php');
            break;
        case 'studentList':
            include('controllers/studentController.php');
            break;
        case 'studentDetail':
            include('controllers/studentDetailController.php');
            break;
        case 'studentAdd':
        case 'studentEdit':
            include('controllers/studentFormController.php');
            break;
        case 'studentDelete':
            include('controllers/studentDeleteController.php');
            break;
    endswitch;
endif;

