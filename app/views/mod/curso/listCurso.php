<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Alunos cadastrados</title>
</head>
<body>
    <div class="botao">
        <a href="/home">Ir para Home</a>
        <a href="/cursos/form">Cadastrar novo curso</a>
</div>

<fieldset>
        <legend>Lista de aluno cadastrados</legend>
     <div class="list-tabela">
        <table>
         <tr>
             
             <th>Nome</th>
             <th>Professor</th>
             <th>Descrição</th>
             <th>Editar</th>
             <th>Excluir</th>
             
         </tr>
         <?php foreach($model_curso->rows as $item_curso):?>
         <tr>
             
    
             <td><?= $item_curso->nome_curso ?></td>
             <td><?= $item_curso->professor ?></td>
             <td><?= $item_curso->descricao ?></td>
             <td><a href="/cursos/form?id=<?= $item_curso->id?>">Editar</a></td>
             <td>
                 <a href="/cursos/delete?id=<?= $item_curso->id?>">excluir</a>
             </td>
         </tr>
         <?php endforeach ?>

       
     </table>
     </div>
</fieldset>
</body>
</html>