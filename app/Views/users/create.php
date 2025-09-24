<!DOCTYPE html> 
<html> 
<head> 
    <title>Agregar usuario</title> 
</head> 
<body> 
    <h1>Formulario de creación</h1> 
    <form> 
        Nombre: <input type="text" name="name"><br> 
        Email: <input type="text" name="email"><br> 
        <button type="submit">Guardar</button> 
    </form> 
</body> 
</html> 
 
edit.php – Formulario de edición de usuarios 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Editar usuario</title> 
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> 
</head> 
<body> 
    <h1>Editando usuario #<?= $user['id'] ?></h1> 
    <form> 
        Nombre: <input type="text" name="name" value="<?= $user['name'] ?>"><br> 
        Email: <input type="text" name="email" value="<?= $user['email'] ?>"><br> 
        <button type="submit">Editar</button> 
    </form> 
</body> 
</html> 