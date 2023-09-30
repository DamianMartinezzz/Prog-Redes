<?php
include 'persona.php';
class Conexion {
    private $hostname = "localhost"; // Nombre del servidor (puede variar)
    private $username = ""; // Nombre de usuario de la base de datos
    private $password = ""; // Contraseña de la base de datos
    private $database = "baseBlanco"; // Nombre de la base de datos
    private $conexion;

    // Constructor para establecer la conexión
    public function __construct() {
        $this->conexion = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }

        echo "Conexión exitosa a la base de datos.";
    }

    // Método para cerrar la conexión
    public function CerrarBase() {
        $this->conexion->close();
    }

    public function ObtenerUsuario(){
        $consulta = "SELECT * FROM usersdetails";
    $resultado = $this->conexion->query($consulta);

    // Verificar si hay filas en el resultado
    if ($resultado->num_rows > 0) {
      

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["ID"] . "</td>";
            echo "<td>" . $fila["Userid"] . "</td>";
            echo "<td>" . $fila["Name"] . "</td>";
            echo "<td>" . $fila["Surname"] . "</td>";
            echo "<td>" . $fila["Phonenumber"] . "</td>";
            echo "<td>" . $fila["Company"] . "</td>";
            echo "<td>" . $fila["Address"] . "</td>";
            echo "<td>" . $fila["Web"] . "</td>";
            echo "<td>" . $fila["Birthdate"] . "</td>";
            echo "<td>" . $fila["Label"] . "</td>";
            echo "<td>" . $fila["Nickname"] . "</td>";
            echo "</tr>";
        }

       
    } else {
        echo "No se encontraron registros.";
    }
    }
    function ModificarUsuario(ClasePersona $usuario) {
        // Escapar los datos ingresados para evitar inyección SQL
        $usuario->ID = $this->conexion->real_escape_string($usuario->ID);
        $usuario->UserID = $this->conexion->real_escape_string($usuario->UserID);
        $usuario->Name = $this->conexion->real_escape_string($usuario->Name);
        $usuario->Surname = $this->conexion->real_escape_string($usuario->Surname);
        $usuario->Phonenumber = $this->conexion->real_escape_string($usuario->Phonenumber);
        $usuario->Company = $this->conexion->real_escape_string($usuario->Company);
        $usuario->Address = $this->conexion->real_escape_string($usuario->Address);
        $usuario->Web = $this->conexion->real_escape_string($usuario->Web);
        $usuario->Birthdate = $this->conexion->real_escape_string($usuario->Birthdate);
        $usuario->Label = $this->conexion->real_escape_string($usuario->Label);
        $usuario->Nickname = $this->conexion->real_escape_string($usuario->Nickname);
    
        // Actualizar los campos del usuario en la base de datos
        $consulta = "UPDATE usersdetails
        SET Name='$usuario->Name', Surname='$usuario->Surname', Phonenumber='$usuario->Phonenumber',
            Company='$usuario->Company', Address='$usuario->Address', Web='$usuario->Web',
            Birthdate='$usuario->Birthdate', Label='$usuario->Label', Nickname='$usuario->Nickname'
        WHERE Userid='$usuario->UserID'";

    
        if ($this->conexion->query($consulta) === TRUE) {
            echo "Usuario modificado correctamente.";
        } else {
            echo "Error al modificar el usuario: " . $this->conexion->error;
        }
    }
function EliminarUsuarioPorID(int $usuario) {
    // Escapar el ID del usuario para evitar inyección SQL
    $ID = $this->conexion->real_escape_string($usuario);

    // Consulta SQL para eliminar al usuario por su ID
    $consulta = "DELETE FROM usersdetails WHERE Userid='$ID'";

    if ($this->conexion->query($consulta) === TRUE) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario: " . $this->conexion->error;
    }
}



}



?>