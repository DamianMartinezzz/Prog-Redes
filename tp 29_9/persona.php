<?php
   
class ClasePersona {

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
public $querys;
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






}
?>