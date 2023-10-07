
<?php
        include 'persona.php';
        include 'conexion.php';
        $conexion = new Conexion();
        $usuario =new ClasePersona();
        ?>
<!DOCTYPE html>
<html>
<head>
    <title>ABM de Usuarios</title>
</head>
<body>
    <h1>ABM de Usuarios</h1>

    <h2>Alta de Usuario</h2>
    <form action="persona.php" method="post" action="persona.php">
        <input type="text" name="Userid" placeholder="User ID" required>
        <input type="text" name="Name" placeholder="Nombre" required>
        <input type="text" name="Surname" placeholder="Apellido" required>
        <input type="text" name="Phonenumber" placeholder="Número de teléfono" required>
        <input type="text" name="Company" placeholder="Empresa" required>
        <input type="text" name="Address" placeholder="Dirección" required>
        <input type="text" name="Web" placeholder="Sitio web" required>
        <input type="date" name="Birthdate" required>
        <input type="text" name="Label" placeholder="Etiqueta" required>
        <input type="text" name="Nickname" placeholder="Alias" required>
        <input type="submit" name="alta" value="Alta" onclick='<?php $conexion->insertar
        ?>'>

    </form>

    <h2>Baja de Usuario</h2>
    <form action="persona.php" method="post">
        <input type="number" name="Id" placeholder="ID del usuario a eliminar" required>
        <input type="submit" name="baja" value="Baja" onclick=''>
    </form>

    <h2>Modificación de Usuario</h2>
    <form action="persona.php" method="post">
        <input type="number" name="Id" placeholder="ID del usuario a modificar" required>
        <input type="text" name="Userid" placeholder="User ID" required>
        <input type="text" name="Name" placeholder="Nombre" required>
        <input type="text" name="Surname" placeholder="Apellido" required>
        <input type="text" name="Phonenumber" placeholder="Número de teléfono" required>
        <input type="text" name="Company" placeholder="Empresa" required>
        <input type="text" name="Address" placeholder="Dirección" required>
        <input type="text" name="Web" placeholder="Sitio web" required>
        <input type="date" name="Birthdate" required>
        <input type="text" name="Label" placeholder="Etiqueta" required>
        <input type="text" name="Nickname" placeholder="Alias" required>
        <input type="submit" name="modificacion" value="Modificar" onclick=''>
        
    </form>

    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Empresa</th>
            <th>Dirección</th>
            <th>Sitio Web</th>
            <th>Fecha de Nacimiento</th>
            <th>Etiqueta</th>
            <th>Alias</th>
        </tr>
        <?php 
        
        $conexion->obtenerUsuario();
        ?>
        
    </table>
</body>
</html>