<?php

class Alumno extends Miembro
{

    public int $edad;
    public array $asignaturas;
    private bool $cursoAbonado;


    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad)
    {

        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        $this->asignaturas = array();
        $this->cursoAbonado = false;
    }


    public function abonarCurso()
    {

        $this->cursoAbonado = true;
    }
    public function matricularseEnAsignatura($asignatura)
    {

        foreach ($this->asignaturas as $matricular) {
            if ($matricular->id == $asignatura->id) {
                return;
            }
        }

        $this->asignaturas[] = $asignatura;
    }


    public static function crearAlumnosDeMuestra(array $asignaturas)
    {

        $alumnos = array();

        $alumnos[] = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);
        $alumnos[] = new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25);
        $alumnos[] = new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24);
        $alumnos[] = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumnos[] = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
        $alumnos[] = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumnos[] = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumnos[] = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumnos[] = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumnos[] = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);

        $alumnos[0]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[3]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[5]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[7]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[8]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[9]->matricularseEnAsignatura($asignaturas[0]);

        return $alumnos;
    }
}
