<?php
include 'conexion.php';
class ClasePersona{

public $ID;
public $UserID;
public $Name;
public $Surname;
public $Phonenumber;
public $Company;
public $Address;
public $Web;
public $Birthdate;
public $Label;
public $Nickname;

public function __construct() {
    if (isset($_POST['Id'])) {
        $this->ID = $_POST['Id'];
    }
    if (isset($_POST['Userid'])) {
        $this->UserID = $_POST['Userid'];
    }
    if (isset($_POST['Name'])) {
        $this->Name = $_POST['Name'];
    }
    if (isset($_POST['Surname'])) {
        $this->Surname = $_POST['Surname'];
    }
    if (isset($_POST['Phonenumber'])) {
        $this->Phonenumber = $_POST['Phonenumber'];
    }
    if (isset($_POST['Company'])) {
        $this->Company = $_POST['Company'];
    }
    if (isset($_POST['Address'])) {
        $this->Address = $_POST['Address'];
    }
    if (isset($_POST['Web'])) {
        $this->Web = $_POST['Web'];
    }
    if (isset($_POST['Birthdate'])) {
        $this->Birthdate = $_POST['Birthdate'];
    }
    if (isset($_POST['Label'])) {
        $this->Label = $_POST['Label'];
    }
    if (isset($_POST['Nickname'])) {
        $this->Nickname = $_POST['Nickname'];
}
}


function ObtenerUsuarios() {
    // Realizar una consulta a la base de datos y obtener el resultado
    $querys=new Conexion();
    $querys->ObtenerUsuario();
}

function EliminarUsuario(){
    $querys=new Conexion();
    $querys->EliminarUsuarioPorID($this->ID);
}

function ModificarUsuarios(){

    $usuarios = new ClasePersona();
    $usuarios->ID =$this->ID;
    $usuarios->Name =$this->Name;
    $usuarios->UserID =$this->UserID;
    $usuarios->Surname =$this->Surname;
    $usuarios->Phonenumber =$this->Phonenumber;
    $usuarios->Company =$this->Company;
    $usuarios->Address =$this->Address;
    $usuarios->Web =$this->Web;
    $usuarios->Birthdate =$this->Birthdate;
    $usuarios->Label =$this->Label;
    $usuarios->Nickname =$this->Nickname;
}
}   



?>