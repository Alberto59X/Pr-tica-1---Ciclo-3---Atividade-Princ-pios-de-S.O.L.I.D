/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Alberto Pereira Davi
*/ 

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
