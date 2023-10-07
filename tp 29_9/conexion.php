<?php
include 'persona.php';
class Conexion {
    public $hostname = "localhost";
    public $username = "root";
    public $password = ""; 
    public $database = "baseBlanco";
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }

        echo "Conexión exitosa a la base de datos.";
    }


    public function CerrarBase() {
        $this->conexion->close();
    }


    function ModificarUsuario(ClasePersona $usuario) {
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
function EliminarUsuarioPorID(ClasePersona $usuario) {
    $ID = $this->conexion->real_escape_string($usuario->ID);
    $consulta = "DELETE FROM usersdetails WHERE UserId='$ID'";

    if ($this->conexion->query($consulta) === TRUE) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario: " . $this->conexion->error;
    }
}

    public function obtenerUsuario(){
        
        $consulta = "SELECT * FROM usersdetails";
    $resultado = $this->conexion->query($consulta);


    if ($resultado->num_rows > 0) {

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["Id"] . "</td>";
            echo "<td>" . $fila["UserId"] . "</td>";
            echo "<td>" . $fila["Name"] . "</td>";
            echo "<td>" . $fila["Surname"] . "</td>";
            echo "<td>" . $fila["PhoneNumber"] . "</td>";
            echo "<td>" . $fila["Company"] . "</td>";
            echo "<td>" . $fila["Address"] . "</td>";
            echo "<td>" . $fila["Web"] . "</td>";
            echo "<td>" . $fila["Birthdate"] . "</td>";
            echo "<td>" . $fila["Label"] . "</td>";
            echo "<td>" . $fila["Nick"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No se encontraron registros.";
    }
    }
    

}



?>