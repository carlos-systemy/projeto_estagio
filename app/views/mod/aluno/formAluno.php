
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso preparatorio </title>
    <style>
        label,input{display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de aluno</legend>
        <form action="/aluno/form/save" method="post">

            <label for="nome" >Nome:</label>
            <input id="nome" value="" name="nome" type="text" required>

            <label for="cpf" >CPF:</label>
            <input id="cpf" value="" name="cpf" type="text" required>

            <label for="idade" >Idade:</label>
            <input id="idade" value=""  name="idade" type="text" required>

            <label for="endereco">Endereço:</label>
            <input id="endereco" value=""  name="endereco" type="text" required>

            <label for="cod_curso" >Curso pretendido:</label>
            <input id="cod_curso" value="" name="cod_curso" type="text" required>

            <button type="submit">Cadastrar</button>
        </form>
    </fieldset>
</body>
</html>