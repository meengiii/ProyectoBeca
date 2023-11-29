<?php 

class Candidatos {
    private $idCandidato;
    private $DNI;
    private $Apellidos;
    private $Nombre;
    private $curso;
    private $Telefono;
    private $correo;
    private $Domicilio;
    private $Fecha_nacimiento;
    private $password;
    private $rol;

    // Constructor
    public function __construct($idCandidato, $DNI, $Apellidos, $Nombre, $curso, $Telefono, $correo, $Domicilio, $Fecha_nacimiento, $password, $rol)
    {
        $this->idCandidato = $idCandidato;
        $this->DNI = $DNI;
        $this->Apellidos = $Apellidos;
        $this->Nombre = $Nombre;
        $this->curso = $curso;
        $this->Telefono = $Telefono;
        $this->correo = $correo;
        $this->Domicilio = $Domicilio;
        $this->Fecha_nacimiento = $Fecha_nacimiento;
        $this->password = $password;
        $this->rol = $rol;
    }


    // Getters
    public function getIdCandidato() {
        return $this->idCandidato;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function getApellidos() {
        return $this->Apellidos;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getDomicilio() {
        return $this->Domicilio;
    }

    public function getFecha_Nacimiento() {
        return $this->Fecha_nacimiento;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }

    // Setters
    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setIdCandidato($idCandidato) {
        $this->idCandidato = $idCandidato;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function setApellidos($Apellidos) {
        $this->Apellidos = $Apellidos;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setDomicilio($Domicilio) {
        $this->Domicilio = $Domicilio;
    }

    public function setFecha_Nacimiento($Fecha_nacimiento) {
        $this->Fecha_nacimiento = $Fecha_nacimiento;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }
}



?>