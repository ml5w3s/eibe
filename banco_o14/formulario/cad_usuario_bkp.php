<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco O14</title>
</head>
<body>
    <form method="post" action="inserir_usuario.php">
        <fieldset>
            <label>Nome do usuario</label>
            <input type="text" name="txt_usuario">
            <select name="cbx_bairro">
                <option value="1">Asa sul</option>
                <option value="2">Asa norte</option>
                <option value="3">Lago sul</option>
                <option value="4">Lago norte</option>
            </select>    
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
</body>
</html>