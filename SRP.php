/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Alberto Pereira Davi
*/ 

<?php
// SRP/User.php
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}