<?php
include 'controller/alunoController.php';
include 'controller/cursoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/home':
       alunoController::home();
    break;

    case '/aluno':
        alunoController::list();
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

    case '/cursos':
        cursoController::list_curso();
    break;

    case '/cursos/form':
        cursoController::form_curso();
    break;

    case '/cursos/form/save':
        cursoController::save_curso();
    break;

    case '/cursos/delete':
        cursoController::delete_curso();
    break;

    default:
        echo "Erro 404";
    break;
}

?>