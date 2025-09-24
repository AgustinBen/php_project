<!DOCTYPE html> 
<html> 
<head> 
    <title>Usuarios</title> 
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> 
</head> 
<body> 
    <h1>Lista de usuarios</h1> 
    <a href="<?= site_url('user/create') ?>">Agregar usuario</a> 
    <table border="1" > 
        <tr> 
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Email</th> 
            <th>Acciones</th> 
        </tr> 
        <?php foreach ($users as $u): ?> 
            <tr> 
                <td><?= $u['id'] ?></td> 
                <td><?= $u['name'] ?></td> 
                <td><?= $u['email'] ?></td> 
                <td> 
                    <a href="<?= site_url('/user/edit/' .$u['id']) ?>">Editar</a> 
                </td> 
            </tr> 
        <?php endforeach; ?> 
    </table> 
</body> 
</html>