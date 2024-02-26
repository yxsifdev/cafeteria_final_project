<?php

class ProductModel
{
    private $conn;


    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getProducts()
    {
        // Consulta SQL para obtener los productos desde la base de datos
        $sql = "SELECT id, nombre, descripcion, precio FROM productos";
        $result = $this->conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
