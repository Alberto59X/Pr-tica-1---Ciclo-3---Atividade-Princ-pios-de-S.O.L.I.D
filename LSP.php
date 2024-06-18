/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Alberto Pereira Davi
*/ 

<?php
// LSP/UserRepositoryInterface.php
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers(): array;
}