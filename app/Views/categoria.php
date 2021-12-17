<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de Categorias</h1>
    <p><a href="#">Adicionar</a></p>
    <?php foreach ($categorias as $categoria): ?>
        <p>
            <?php echo $categoria['inv_categoria_nome'] ?>
            <a href="#">Editar</a>
            <a href="#">Excluir</a>
        </p>
    <?php endforeach ?>
</body>
</html>