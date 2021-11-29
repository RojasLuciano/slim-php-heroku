<?php

class Producto
{
    public $id;
    public $nombre;
    public $tipo;
    public $precio;
    public $avilable;

    //region Getters and Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdPedido()
    {
        return $this->idPedido;
    }

    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    //endregion Getters and Setters

    public function InsertarProducto()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT into 
        productos (idPedido,cantidad,nombre,tipo,precio)
        values(:idPedido,:cantidad,:nombre,:tipo,:precio)");
        $consulta->bindValue(':idPedido', $this->idPedido, PDO::PARAM_INT);
        $consulta->bindValue(':cantidad', $this->cantidad, PDO::PARAM_INT);
        $consulta->bindValue(':nombre', $this->nombre, PDO::PARAM_STR);
        $consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
        $consulta->bindValue(':precio', $this->precio, PDO::PARAM_STR);

        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public static function BorrarProducto($id)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("UPDATE productos set available = 0 where id = :id");
        $consulta->bindValue(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->rowCount();
    }

    public  function ModificarProducto($id)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta(
            "UPDATE productos 
            set idPedido=:idPedido,
            cantidad=:cantidad,
            nombre=:nombre,
            tipo=:tipo,
            precio=:precio
            WHERE id=:id");
        $consulta->bindValue(':id', $id, PDO::PARAM_INT);
        $consulta->bindValue(':idPedido', $this->idPedido, PDO::PARAM_INT);
        $consulta->bindValue(':cantidad', $this->cantidad, PDO::PARAM_INT);
        $consulta->bindValue(':nombre', $this->nombre, PDO::PARAM_STR);
        $consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
        $consulta->bindValue(':precio', $this->precio, PDO::PARAM_STR);

        return $consulta->execute();
    }

    //Trae todos los productos
    public static function TraerProductos()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("select * from productos");
        $consulta->execute();
        $productos = $consulta->fetchAll(PDO::FETCH_CLASS, "Producto");

        return $productos;
    }

    //Trae un Producto por ID
    public static function TraerProducto($id)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("select * from productos where id = :id");
        $consulta->bindValue(':id', $id, PDO::PARAM_STR);
        $consulta->execute();
        $ProductoResultado = $consulta->fetchObject('Producto');
        return $ProductoResultado;
    }

    public static function Listar($lista)
    {
        foreach ($lista as $obj) {
            //   echo $obj->toString();
            echo Producto::MostrarDatos($obj);
        }
    }

    public function toString(): String
    {
        return
            "<ul>" .
            "<li>id: " . $this->id . "</li>" .
            "<li>idPedido: " . $this->idPedido . "</li>" .
            "<li>cantidad: " . $this->cantidad . "</li>" .
            "<li>nombre: " . $this->nombre . "</li>" .
            "<li>tipo: " . $this->tipo . "</li>" .
            "<li>precio: " . $this->precio . "</li>" .
            "<ul>";
    }

    public static function MostrarDatos($Producto)
    {
        return
            "<ul>" .
            "<li>id: " . $Producto->getId() . "</li>" .
            "<li>idPedido: " . $Producto->getIdPedido() . "</li>" .
            "<li>cantidad: " . $Producto->getCantidad() . "</li>" .
            "<li>nombre: " . $Producto->getNombre() . "</li>" .
            "<li>tipo: " . $Producto->getTipo() . "</li>" .
            "<li>precio: " . $Producto->getPrecio() . "</li>" .
            "</ul>";
    }





}
