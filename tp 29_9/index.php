<?php
        include 'persona.php';
        ?>
<!DOCTYPE html>
<html>
<head>
    <title>ABM de Usuarios</title>
</head>
<body>
    <h1>ABM de Usuarios</h1>

    <!-- Formulario para dar de alta un nuevo usuario -->
    <h2>Alta de Usuario</h2>
    <form method="post">
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
        <input type="submit" name="alta" value="Alta">
    </form>

    <!-- Formulario para dar de baja un usuario por ID -->
    <h2>Baja de Usuario</h2>
    <form method="post">
        <input type="number" name="Id" placeholder="ID del usuario a eliminar" required>
        <input type="submit" name="baja" value="Baja">
        <?php
        $persona = new ClasePersona();

        $persona->EliminarUsuario();
        ?>
    </form>

    <!-- Formulario para modificar un usuario por ID -->
    <h2>Modificación de Usuario</h2>
    <form method="post">
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
        <input type="submit" name="modificacion" value="Modificar">
        <?php
        $persona = new ClasePersona();

        $persona->ModificarUsuarios();
        ?>
    </form>

    <!-- Mostrar la lista de usuarios -->
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
        $persona = new ClasePersona();

        $persona->ObtenerUsuarios();
        ?>
    </table>
</body>
</html>