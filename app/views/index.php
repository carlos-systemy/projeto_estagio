<?php
 include_once'controller/Url.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>asset/css/style.css">
    <title>SIMCurso Concurso e pré-Vestibular</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1>SimCursos</h1> 
    </div>
<div class="botao">
        <a href="/aluno/form">Cadastrar Aluno</a>
        <br> 
        <a href="/aluno">Listar alunos</a>
        <br> 
        <a href="/cursos/form">Cadastrar Cursos</a>
        <br> 
        <a href="/cursos">Listar Cursos</a>
        <br> 
</div>
</div>
</body>
</html>