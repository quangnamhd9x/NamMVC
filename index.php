<?php
require __DIR__ ."/vendor/autoload.php";

$page = isset($_REQUEST["page"])? $_REQUEST["page"] : NULL;
$studentControler = new App\Controller\StudentController();

switch ($page){
    case 'listStudent':
        $studentControler->viewStudent();
        break;
    case 'addStudent':
        $studentControler->addStudent();
        break;
    case 'delete':
        $studentControler->deleteStudent();
        break;
    case 'edit':
        $studentControler->editStudent();
        break;
    default:
        $studentControler->viewStudent();
}