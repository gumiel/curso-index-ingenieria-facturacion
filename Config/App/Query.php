<?php

class Query extends Conexion{
    private $pdo, $conexion, $sql;
    public function __construct(){
        $this->pdo = new Conexion();
        $this->conexion = $this->pdo->conect();
    }

    public function select(string $sql){
        $this->sql = $sql;
        $resultado = $this->conexion->prepare($this->sql);
        $resultado->execute();
        $data = $resultado->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAll(string $sql){
        $this->sql = $sql;
        $resultado = $this->conexion->prepare($this->sql);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
}

?>