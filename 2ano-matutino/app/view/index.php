<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body>
    <h1><?=$titulo?></h1>

    <form method="post" action="salvar">
        <label>
            Nome:
            <input type="text" name="nome">
        </label>
        <button>Salvar Visita</button>
    </form>

</body>
</html>