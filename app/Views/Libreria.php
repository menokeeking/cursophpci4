<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>
    <?= view('partials/session.php') ?>
    <div> 
        <a href="Libros/new"> Crear nuevo</a>
        <table border ='1'>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>

            <?php foreach ($libros as $key => $l) : ?>
            <tr>
                <td><?= $l['id'] ?> </td>
                <td><?= $l['titulo'] ?> </td>
                <td><?= $l['descripcion'] ?> </td>

                <td>
                    <a href="Libros/edit/ <?= $l['id'] ?>">Editar</a>
                    <a href="Libros/show/ <?= $l['id'] ?>">Ver</a>
                    <form method="POST" action="Libros/delete/<?= $l['id']?>"> 
                        
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
             <?php endforeach ?>
        </table>
    </div>

    
</body>
</html>