<?php

class Database
{
    private static $instance = null;
    private $connection;

    private function __construct($host, $username, $password, $database)
    {
        $this->connection = mysqli_connect($host, $username, $password, $database);
        if (!$this->connection) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    }

    public static function getInstance($host, $username, $password, $database)
    {
        if (self::$instance === null) {
            self::$instance = new self($host, $username, $password, $database);
        }
        return self::$instance;
    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Error en la consulta: " . mysqli_error($this->connection));
        }
        return $result;
    }

    public function fetch($result)
    {
        return mysqli_fetch_assoc($result);
    }

    public function close()
    {
        mysqli_close($this->connection);
    }

    // Prevenir la clonación del objeto
    private function __clone()
    {
    }

    // Prevenir la deserialización del objeto
    public function __wakeup()
    {
    }
}
