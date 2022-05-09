<?php
 include_once'controller/Url.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/asset/css/style.css">
    <title>Lista dos Alunos cadastrados</title>
</head>
<body>
    <div class="botao">
        <a href="/">Ir para Home</a>
        <a href="/cursos/form">Cadastrar novo curso</a>
</div>

<fieldset>
        <legend>Lista de aluno cadastrados</legend>
     
        <table class="list-tabela">
            <thead>
         <tr>
             
             <th>Nome</th>
             <th>Professor</th>
             <th>Descrição</th>
             <th>Editar</th>
             <th>Excluir</th>
             
         </tr>
         </thead>
         <?php foreach($model_curso->rows as $item_curso):?>
         <tbody>
         <tr>
             
    
             <td><?= $item_curso->nome_curso ?></td>
             <td><?= $item_curso->professor ?></td>
             <td><?= $item_curso->descricao ?></td>
             <td><a href="/cursos/form?id=<?= $item_curso->id?>">Editar</a></td>
             <td>
                 <a href="/cursos/delete?id=<?= $item_curso->id?>">excluir</a>
             </td>
         </tr>
         </tbody>
         
         <?php endforeach ?>

       
     </table>
     
</fieldset>
</body>
</html>