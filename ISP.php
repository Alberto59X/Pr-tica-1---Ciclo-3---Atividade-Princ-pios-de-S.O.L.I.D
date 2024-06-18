/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Alberto Pereira Davi
*/ 

<?php
// ISP/CSVExporterInterface.php
interface CSVExporterInterface {
    public function export(array $data, $filename);
}