<?php
require_once '../config/conexion.php';

class t_producto extends Conexion {
    public function obtener_datos() {
        $consulta = $this->obtener_conexion()->prepare("SELECT *, DATE_FORMAT(fecha, '%Y-%m-%d') as fecha FROM t_producto");
        $consulta->execute();
        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $this->cerrar_conexion();
        echo json_encode($datos);
    }

    public function insertar_datos() {
        $insercion = $this->obtener_conexion()->prepare("INSERT INTO t_producto(producto, precio, cantidad, fecha) VALUES(:producto, :precio, :cantidad, :fecha)");
        
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];  // Obtiene la fecha enviada desde JS
        
        $insercion->bindParam(':producto', $producto);
        $insercion->bindParam(':precio', $precio);
        $insercion->bindParam(':cantidad', $cantidad);
        $insercion->bindParam(':fecha', $fecha);  // Vincula la fecha generada en JS
        
        if ($insercion->execute()) {
            echo json_encode([1, "Inserción correcta"]);
        } else {
            echo json_encode([0, "Inserción no realizada"]);
        }
    }

    public function actualizar_datos() {
        $actualizacion = $this->obtener_conexion()->prepare("UPDATE t_producto SET producto = :producto, precio = :precio, cantidad = :cantidad WHERE id_producto = :id_producto");
        
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $id_producto = $_POST['id_producto'];

        $actualizacion->bindParam(':producto', $producto);
        $actualizacion->bindParam(':precio', $precio);
        $actualizacion->bindParam(':cantidad', $cantidad);
        $actualizacion->bindParam(':id_producto', $id_producto);
        
        if ($actualizacion->execute()) {
            echo json_encode([1, "Actualización correcta", $id_producto]);
        } else {
            echo json_encode([0, "Actualización no realizada"]);
        }
    }

    public function eliminar_datos() {
        $eliminar = $this->obtener_conexion()->prepare("DELETE FROM t_producto WHERE id_producto = :id_producto");
        $id_producto = $_POST['id_producto'];
        
        $eliminar->bindParam(':id_producto', $id_producto);
        
        if ($eliminar->execute()) {
            echo json_encode([1, "Eliminación correcta"]);
        } else {
            echo json_encode([0, "Eliminación no realizada"]);
        }
    }

    public function precargar_datos() {
        $consulta = $this->obtener_conexion()->prepare("SELECT * FROM t_producto WHERE id_producto = :id_producto");
        $id_producto = $_POST['id_producto'];
        
        $consulta->bindParam(":id_producto", $id_producto);
        $consulta->execute();
        
        $datos = $consulta->fetch(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }
}

$consulta = new t_producto();
$metodo = $_POST['metodo'];
$consulta->$metodo();
?>