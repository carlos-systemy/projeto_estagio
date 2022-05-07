<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Cursos </title>
    <style>
        label,input{display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Cursos</legend>
        <form action="/cursos/form/save" method="post">

        <input type="hidden" value="<?= $model_curso->id ?>" name="id">
            <label for="curso" >Curso:</label>
            <input id="nome_curso" value="<?= $model_curso->nome_curso?>" name="nome_curso" type="text" required>

            <label for="professor" >Professor</label>
            <input id="professor" value="<?= $model_curso->professor?>" name="professor" type="text" required>

            <label for="descricao" >Descrição</label>
            <input id="descricao" value="<?= $model_curso->descricao?>"  name="descricao" type="text" required>

            
        
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>