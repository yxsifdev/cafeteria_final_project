<?php

class productModel
{
    private $connection;


    public function __construct()
    {
        require_once("../../config/connect.php");
        $con = new db();
        $this->connection = $con->connection();
    }

        public function getProducts()
    {
        // Consulta SQL para obtener los productos desde la base de datos
        $sql = "SELECT id, nombre, descripcion, precio FROM productos";
        $result = $this->connection->query($sql);

        if ($result instanceof PDOStatement) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Manejar el caso en el que $result no es un objeto PDOStatement válido
            // Esto puede incluir imprimir mensajes de error, registrar el error, o realizar alguna otra acción de manejo de errores
            return [];
        }
    }

}