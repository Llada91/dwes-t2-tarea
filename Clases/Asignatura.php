<?php

class Asignatura
{

    public $id;
    public $nombre;
    public $creditos;

    public function __construct(int $id, string $nombre, int $creditos)
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

public function __toString()
{
    return "Nombre: " . $this->nombre .", Créditos: " . $this->creditos;
}



    public static function crearAsignaturasDeMuestra()
    {
        $asignaturas = array();

        $asignaturas[] = new Asignatura(1, "DWES", 7);
        $asignaturas[] = new Asignatura(2, "DWEC", 6);
        $asignaturas[] = new Asignatura(3, "DIW", 4);
        $asignaturas[] = new Asignatura(4, "DAW", 4);

        return $asignaturas;
    }
}
