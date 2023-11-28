<?php
class CandidatoRepository
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    //CREAR
    public function crearCandidato($dni, $apellidos, $nombre, $curso, $telefono, $correo, $domicilio, $fechaNacimiento, $password, $rol)
    {
        $query = "INSERT INTO candidatos (DNI, Apellidos, Nombre, curso, Telefono, correo, Domicilio, Fecha_nacimiento, password, rol) 
                      VALUES (:dni, :apellidos, :nombre, :curso, :telefono, :correo, :domicilio, :fechaNacimiento, :password, :rol)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
            $stmt->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":curso", $curso, PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
            $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
            $stmt->bindParam(":domicilio", $domicilio, PDO::PARAM_STR);
            $stmt->bindParam(":fechaNacimiento", $fechaNacimiento, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
            $stmt->execute();
            header("Location: ?menu=login");

    }
    //BORRAR
    public function deleteUser($id)
    {
        $query = "DELETE FROM USER WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    //UPDATE
    public function updateUser($id, $nombre, $password)
    {
        $query = "UPDATE USER SET NOMBRE=:nombre,PASSWORD=:password WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        // $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    //update roles
    public function updateUserRol($id,$rol)
    {
        $query = "UPDATE USER SET ROL=:rol WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    //LEER
    public function readUser($id)
    {
        $query = "SELECT * FROM USER WHERE IDUSER=:idUser";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":idUser", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //Obtener todos los usuarios
    public function getAllUser()
    {
        $query = "SELECT * FROM USER WHERE ROL='alumno'";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    

    public function getAllUserNoRol()
    {
        $query = "SELECT * FROM USER WHERE ROL IS NULL";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //login
    public function encuentra($nombre, $pass)
    {
        $query = "SELECT * FROM USER WHERE nombre = :nombre and password=:pass";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":pass", $pass, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>