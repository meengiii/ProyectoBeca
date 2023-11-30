<?php
class CandidatoRepository
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    //CREAR
    public function crearCandidato($candidato)
    {
        $query = "INSERT INTO Candidatos (DNI, Apellidos, Nombre, curso, Telefono, correo, Domicilio, Fecha_nacimiento, password, rol)
                  VALUES (:dni, :apellidos, :nombre, :curso, :telefono, :correo, :domicilio, :fechaNacimiento, :password, :rol)";

        $stmt = $this->conexion->prepare($query);

        $dni = $candidato->getDNI();
        $apellidos = $candidato->getApellidos();
        $nombre = $candidato->getNombre();
        $curso = $candidato->getCurso();
        $telefono = $candidato->getTelefono();
        $correo = $candidato->getCorreo();
        $domicilio = $candidato->getDomicilio();
        $fechaNacimiento = $candidato->getFecha_Nacimiento();
        $password = $candidato->getPassword();
        $rol = $candidato->getRol(); // Corregir el nombre del método

        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':curso', $curso);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':domicilio', $domicilio);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':rol', $rol); // Agregar el valor del rol

        if ($stmt->execute()) 
        {
            return true;
        } else {
            return false;
        }
    }


    //BORRAR
    public function deleteUser($id)
    {
        $query = "DELETE FROM candidatos WHERE IDcandidatos=:idcandidatos";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":idcandidatos", $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    //UPDATE
    // UPDATE
    public function updateUser($id, $dni, $password)
    {
        $query = "UPDATE candidatos SET DNI=:dni, password=:password WHERE IDcandidato=:idcandidato";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->bindParam(":idcandidato", $id, PDO::PARAM_INT);
        $stmt->execute();
    }


    //update roles
    public function updateUserRol($id, $rol)
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
    //LOGIN
    public function encuentra($dni, $pass)
    {
        $query = "SELECT * FROM Candidatos WHERE dni = :dni and password=:password";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
        $stmt->bindParam(":password", $pass, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }




}
?>