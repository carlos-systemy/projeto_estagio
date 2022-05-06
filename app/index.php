<?php
include'controller/alunoController.php';
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/':
       echo "funcionando tudo nos conformes";
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
    case '/cursos':
        cursoController::index_curso();
        break;

    default:
        echo "Erro 404";
    break;
}

?>