<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Alunos cadastrados</title>
</head>
<body>
<fieldset>
        <legend>Lista de aluno cadastrados</legend>
     <table>
         <tr>
             <th>id</th>
             <th>Nome</th>
             <th>CPF</th>
             <th>Idade</th>
             <th>Endereço</th>
             <th>Curso</th>
         </tr>
         <?php foreach($model->rows as $item):?>
         <tr>
             <td>
                 <a href="/aluno/delete?id=<?= $item->nome?>"></a>
             </td>

             <td><?= $item->id?></td>
           

             <td>
                 <a href="/aluno/form?id=<?= $item->id?>"><?= $item->nome ?></a>
             </td>

             <td><?= $item->cpf ?></td>
             <td><?= $item->idade ?></td>
             <td><?= $item->endereco ?></td>
             <td><?= $item->cod_curso ?></td>
         </tr>
         <?php endforeach ?>

         <?php if(count($model->rows)==0)?>
         <tr>
             <td colspan="5">Nenhum aluno cadastrado</td>
         </tr>
     </table>
</fieldset>
</body>
</html>