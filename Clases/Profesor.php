<?php

class Profesor extends Miembro
{
    private $titular;
    private $asignatura;

    public function __construct($id, $nombre, $apellidos, $email, $asignatura)
    {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->titular = false;
        $this->asignatura = $asignatura;
    }

    public static function crearProfesoresDeMuestra($asignaturas)
    {
        $profesores = array();

        $profesores[] = new Profesor(1, "Steve", "Wozniak", "steve@apple.com", $asignaturas[0]);
        $profesores[] = new Profesor(2, "Ada", "Lovelace", "ada@gmail.com",  $asignaturas[2]);
        $profesores[] = new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", $asignaturas[1]);
        $profesores[] = new Profesor(4, "Rasmus", "Lerdorf", "rasmus@php.com", $asignaturas[3]);

        return $profesores;
    }
}



