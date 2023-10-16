<?php

class Db
{
    //host de la db
    protected $host = DB_HOST;
    //nombre de la db
    protected $name = DB_NAME;
    //usuario de la db
    protected $user = DB_USER;
    //password de la db
    protected $passwd = DB_PASSWORD;

    //variables de conexion / acciones / errores
    private $conexiondb;
    private $statements;
    private $error;

    //Constructor
    public function __construct()
    {
        //Conexion a la base de datos
        $dbh = "mysql:host=" . $this->host . ";name=" . $this->name;

        //Opciones de conexion echas en arrays
        $options = [
            //Errores de Conexion con PDO (PDO extension de PHP que permite hacer conexion a la db (PDO = PHP Data Objects))
            PDO::ATTR_ERRMODE => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        //try de conexion
        try {
            //Crea una PDO para hacer la conexiondb le pasa usuario y contraseña con this
            $this->conexiondb = new PDO($dbh, $this->user, $this->passwd, $options);
            //opcion para establecer utf-8 para codificacion de caracteres en las consultas
            $this->conexiondb->exec("set names utf8");
            //Excepcion para error de conexion db con su mensaje 
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //funcion para que la db reciba querys
    public function query($sql)
    {
        //retorna y establece un statement con el prepare de la consulta
        return $this->statements = $this->conexiondb->prepare($sql);
    }
    //Ejecuta consultas
    public function execute()
    {
        return $this->statements->execute();
    }

    //bind es una funcion para recopilar los datos usando case
    public function bind($param, $value, $tipovar = null)
    {
        if (is_null($tipovar)) {
            switch (true) {
                //En caso de recopilar un entero establece PARAM_INT
                case is_int($value):
                    $tipovar = PDO::PARAM_INT;
                    break;
                //En caso de recopilar un Booleano establece PARAM_BOOL
                case is_bool($value):
                    $tipovar = PDO::PARAM_BOOL;
                    break;
                //En caso de recopilar un Null establece PARAM_NULL
                case is_null($value):
                    $tipovar = PDO::PARAM_NULL;
                    break;
                //Por defecto establece un parametro estandar PARAM_STR
                default:
                    $tipovar = PDO::PARAM_STR;
                    break;
            }
        }
        //Retorna lo que hay en bind a statements para realizar funciones con los datos
        return $this->statements->bindValue($param, $value, $tipovar);
    }

    //Llama a un registro con un fetch
    public function register()
    {
        $this->execute();
        return $this->statements->fetch(PDO::FETCH_OBJ);
    }
    //Llama un fetch de todos lo registros
    public function registers()
    {
        $this->execute();
        return $this->statements->fetchAll(PDO::FETCH_OBJ);
    }

    //Cuenta las filas que tiene la db
    public function count()
    {
        return $this->statements->rowCunt();
    }
}