<?php

class Producto extends Conectar {


    public function listarProductos()
    {
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_producto WHERE est = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getProducto_x_id($prod_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "SELECT * FROM tm_producto WHERE prod_id = ? AND est = 1";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function eliminarProducto($prod_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "UPDATE tm_producto
        SET 
            est = 0 
        WHERE 
            prod_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function habilitarProducto($prod_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "UPDATE tm_producto
        SET 
            est = 1 
        WHERE 
            prod_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }
     // TODO Insertar Producto
    public function insertProducto($prod_nom,$prod_precio_n,$prod_precio_p,$prod_url,$prod_img,$prod_cupon,$prod_descripcion){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "INSERT INTO 
        tm_producto 
        (prod_id,prod_nom,prod_precio_n,prod_precio_p,prod_url,prod_img,prod_cupon,prod_descripcion,fech_crea,fech_modi,fech_elim,est) 
        VALUES 
        (NULL,?,?,?,?,?,?,?,NOW(),NULL,NULL,'1')";
        $sql = $conectar->prepare($sql);
        
        $sql->bindValue(1,$prod_nom);
        $sql->bindValue(2,$prod_precio_n);
        $sql->bindValue(3,$prod_precio_p);
        $sql->bindValue(4,$prod_url);
        $sql->bindValue(5,$prod_img);
        $sql->bindValue(6,$prod_cupon);
        $sql->bindValue(7,$prod_descripcion);


        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

    public function updateProducto($prod_nom,$prod_precio_n,$prod_precio_p,$prod_url,$prod_img,$prod_cupon,$prod_descripcion,$prod_id){
        $conectar = parent::conexion();
        parent::set_names();

        $sql = "UPDATE
        tm_producto
        SET
        
        prod_nom = ?,
        prod_precio_n = ?,
        prod_precio_p = ?,
        prod_url = ?,
        prod_img = ?,
        prod_cupon = ?,
        prod_descripcion = ?,
        fech_modi = NOW(),
        WHERE prod_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$prod_nom);
        $sql->bindValue(2,$prod_precio_n);
        $sql->bindValue(3,$prod_precio_p);
        $sql->bindValue(4,$prod_url);
        $sql->bindValue(5,$prod_img);
        $sql->bindValue(6,$prod_cupon);
        $sql->bindValue(7,$prod_descripcion);
        $sql->bindValue(8,$prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>