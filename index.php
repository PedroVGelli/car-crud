<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Celular</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>CRUD de celular</h1>
    <form action="adicionar_carro.php" method="POST">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>
        
        <label for="fabricante">Fabricante</label>
        <input type="text" id="fabricante" name="fabricante" required><br><br>
        
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="cor" required><br><br>
        
        <input type="submit" value="Adicionar celular">
    </form>
    <h2>Lista de Celular</h2>
    <div id="lista-carros">
        <?php include 'listar_carros.php'; ?>
    </div>
</body>
</html>
