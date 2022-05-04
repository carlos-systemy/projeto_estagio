<?php
include'controller/alunoController.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/aluno':
        alunoController::index();
    break;

    case '/aluno/form':
        alunoController::form();
    break;

    case '/aluno/form/save':
        alunoController::save();
    break;

    case '/aluno/delete':
        alunoController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}

?>