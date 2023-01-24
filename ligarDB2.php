<?php
namespace BasedeDados;
class LigarDB{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host="localhost:3307", $username="root", $password="rootluis", $database="forca") {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $this->connection =  mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Erro a ligar à base de dados: " . $this->connection->connect_error);
        }
        return $this->connection;
    }
    public function close() {
        $this->connection->close();
    }
}

?>