<?php
/**
 * Created by PhpStorm.
 * User: Aurel Bertrand
 * Date: 06/12/2016
 * Time: 00:39
 */

class database {
    public $conn;
    private $host = "localhost";
    private $bd = "familov_com";
    private $user = "root";
    private $pwd = "";

    function database($database='familov_com', $server='localhost', $username='root', $password=''){

        $this->SQL = mysqli_connect($server, $username, $password) or die('Error: '.mysqli_error());
        mysqli_select_db( $this->SQL,$database);
    }

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->bd, $this->user, $this->pwd);
        }catch(exception $e){
            echo "Connection error : " . $e->getMessage();
        }
        return $this->conn;
    }


    function num_rows(&$result){
        return @mysqli_num_rows($result);
    }

    function fetch_array(&$result){
        return @mysqli_fetch_array($result);
    }

    function fetch_assoc(&$result){
        return @mysqli_fetch_assoc($result);
    }

    function insert_id($id){
        return @mysqli_insert_id($id);
    }

    function disconnect(){
        mysqli_close($this->SQL);
    }

    function escape(&$string){
        return mysqli_real_escape_string($string);
    }

    function result($query, $column, $id=0){
        return mysqli_result($query, $id, $column);
    }

}