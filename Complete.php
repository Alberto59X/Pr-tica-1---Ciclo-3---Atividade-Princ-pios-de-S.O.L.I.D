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

<?php
// LSP/UserRepositoryInterface.php
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers(): array;
}

<?php
// ISP/CSVExporterInterface.php
interface CSVExporterInterface {
    public function export(array $data, $filename);
}

<?php
// DIP/UserService.php
class UserService {
    private $userRepository;
    private $mailService;
    private $csvExporter;

    public function __construct(
        UserRepositoryInterface $userRepository,
        MailServiceInterface $mailService,
        CSVExporterInterface $csvExporter
    ) {
        $this->userRepository = $userRepository;
        $this->mailService = $mailService;
        $this->csvExporter = $csvExporter;
    }

    public function saveUser(User $user) {
        $this->userRepository->save($user);
        $this->mailService->sendEmail($user->email, "Welcome", "Thank you for registering!");
    }

    public function exportUsersToCSV() {
        $users = $this->userRepository->getAllUsers();
        $this->csvExporter->export($users, 'users.csv');
    }
}

