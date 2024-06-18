/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Alberto Pereira Davi
*/ 

<?php
// OCP/UserRepository.php
class UserRepository implements UserRepositoryInterface {
    public function save(User $user) {
        // Save user to database
        // DB::table('users')->insert(...);
    }

    public function getAllUsers(): array {
        // Get all users from database
        // return DB::table('users')->get();
        return []; // Placeholder
    }
}