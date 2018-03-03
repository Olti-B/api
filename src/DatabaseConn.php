<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DatabaseConn
 *
 * @author Olti
 */
class DatabaseConn {

    protected $conn = NULL;
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "test";

    function connect() {
        
        $mysql_connect_str = "mysql:host=$this->host;dbname=$this->database";
        
        $this->conn = new PDO($mysql_connect_str, $this->user, $this->password);
        
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $this->conn;
    }

}
