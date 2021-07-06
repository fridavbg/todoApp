<?php

/**
 * @package DBConnection
 * @author Frida
 */

// DB Connection

class DBConnection {
    private $_dbHostname = 'localhost';
    private $_dbName = "todoApp";
    private $_dbUsername = "root";
    private $_dbPassword = "";
    private $_con;


public function __construct() {
    try {
        $this->_con = new PDO("mysql:host=$this->_dbName", $this->_dbUsername, $this->_dbPassword);
        $this->_con->setAtttribute(PDO::ATTR_ERRMODE; PDO::ERR_EXCEPTION);
    } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
    }
}
    // return Connection
    public function returnConnection() {
        return $this->_con;
    }    
}

?>