<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste PHP</title>
</head>
<body>
<h1>GET</h1>
    <form action="Validar.php" method="get">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Senha</label>
        <input type="password" name="senha">
        <button type="submit">Enviar</button>
    </form>

    <h1>POST</h1>
    <form action="Validar.php" method="post">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Senha</label>
        <input type="password" name="senha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>