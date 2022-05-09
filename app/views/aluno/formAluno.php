
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:99/asset/css/style.css">
    <title>Cadastar Aluno </title>
    <style>
        label,input{display: block;}
    </style>
</head>
<body>
<div class="botao">
        <a href="/">Ir para Home</a>
        <a href="/aluno">Listar alunos</a>
</div>
    <fieldset>
        <legend>Cadastro de aluno</legend>
        <form class="formulario" action="/aluno/form/save" method="post">

        <input type="hidden" value="<?= $model->id ?>" name="id">
            <label for="nome" >Nome:</label>
            <input id="nome" value="<?= $model->nome ?>" name="nome" type="text" required>

            <label for="cpf" >CPF:</label>
            <input id="cpf" value="<?= $model->cpf ?>" name="cpf" type="text" required>

            <label for="idade" >Idade:</label>
            <input id="idade" value="<?= $model->idade ?>"  name="idade" type="text" required>

            <label for="endereco">Endereço:</label>
            <input id="endereco" value="<?= $model->endereco ?>"  name="endereco" type="text" required>

            <label for="cod_curso" >Curso pretendido:</label>
            <input id="cod_curso" value="<?= $model->cod_curso ?>" name="cod_curso" type="text" required>

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>