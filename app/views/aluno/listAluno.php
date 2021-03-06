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
    <title>Lista dos Alunos cadastrados</title>
</head>
<body>
<div class="botao">
        <a href="/">Ir para Home</a>
        <a href="/aluno/form">Cadastrar novo Aluno</a>
</div>
<fieldset>
        <legend>Lista de aluno cadastrados</legend>
     <table class="list-tabela">
     <thead>
         <tr>
             
             <th>Nome</th>
             <th>CPF</th>
             <th>Idade</th>
             <th>Endereço</th>
             <th>Curso</th>
             <th>Editar</th>
             <th>Excluir</th>
         </tr>
    </thead>
         <?php foreach($model->rows as $item):?>
            <tbody>
         <tr>
             <td><?= $item->nome ?></td>
             <td><?= $item->cpf ?></td>
             <td><?= $item->idade ?></td>
             <td><?= $item->endereco ?></td>
             <td><?= $item->cod_curso ?></td>
             <td><a href="/aluno/form?id=<?= $item->id?>">Editar</a></td>
             <td>
                 <a href="/aluno/delete?id=<?= $item->id?>">Excluir</a>
             </td>
         </tr>
         <tbody>
         <?php endforeach ?>

         <?php if(count($model->rows)==0):?>
         <tr>
             <td colspan="5">Nenhum aluno cadastrado</td>
         </tr>
         <?php endif ?>
     </table>
</fieldset>
</body>
</html>