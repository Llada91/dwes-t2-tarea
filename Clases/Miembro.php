<?php


abstract class Miembro
{


    protected int $id;
    protected $nombre;
    protected $apellidos;
    protected $email;

    //Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email)
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }
    //Getters
    public function getId(): int
    {
        return $this->id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getApellidos(): string
    {
        return $this->apellidos;
    }
    public function getEmail(): string

    {
        return $this->email;
    }
    //Setters
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    //toString
    public function __toString()
    {
        return "Nombre: " . $this->nombre . " " . $this->apellidos . ", Email: " . $this->email;
    }
}
