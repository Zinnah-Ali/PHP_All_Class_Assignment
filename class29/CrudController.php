<?php

class CrudController{

    // CRUD OPARATIONS
    private $mysqli = '';
    private $msg    = [];
    private $conn   = false;

    // Construct Mathod
    public function __construct(){
        if ( !$this->conn ) {
            $this->mysqli = new mysqli('localhost', 'root', '', 'test');

            if ( $this->mysqli->connect_error ) {
               return false;
            }else{
                return true;
            }
        } else {
            return false;
        }
        
    }

    //Reed 
    public function select( $tableName, $whereCon = null){

        if ( $whereCon != null ) {
            $sql = "SELECT * FROM $tableName  WHERE $whereCon";
        } else {
            $sql = "SELECT * FROM $tableName";
        }
        
        if ($this->mysqli->query($sql)) {
            $selectQry = $this->mysqli->query($sql);
            $resoult = [];
            foreach ($selectQry as $key => $value) {
                $resoult = $value;
                echo "<pre>";
                print_r($resoult);
            }
            return true;
        } else {
            array_push($this->msg, $this->mysqli->error);
        }
        
    }

    // Create
    public function create( $tableName, $tableValue = array() ){

        $fieldValue = implode("', '", $tableValue);
        $fieldValue = "'". $fieldValue ."'";

        $fieldIndexArray = array_keys($tableValue);
        $fieldIndex      = implode(", ", $fieldIndexArray);

        $sql = "INSERT INTO $tableName( $fieldIndex ) VALUES ( $fieldValue )";
        if ($this->mysqli->query($sql)) {
            array_push($this->msg , "Insert is Succesfull");
            return true;
        } else {
            array_push($this->msg , $this->mysqli->error);
            return false;
        }
        
        


    }

    // Update
    public function update( $tableName, $tableValue = array(), $whereCon ){

        foreach ($tableValue as $key => $value) {
           $fieldUpdateValue[] = "$key = '$value'";
        }
        $fieldUpdateValue = implode(", ", $fieldUpdateValue);

        $sql = "UPDATE $tableName SET $fieldUpdateValue WHERE $whereCon";

        if ($this->mysqli->query($sql)) {
            array_push($this->msg, "Update Succesfull");
            return true;
        } else {
            array_push($this->msg, $this->mysqli->error);
            return false;
        }
        

    }

    // Delete
    public function delete( $tableName, $whereCon ){

        $sql = "DELETE FROM $tableName WHERE $whereCon";
        if ($this->mysqli->query($sql)) {
            array_push($this->msg, "Delete Succesfull");
            return true;
        } else {
            array_push($this->msg, $this->mysqli->error);
            return false;
        }
        
    }


    //Distruct Method / DB Connections Close
    public function __destruct(){
        if ( $this->mysqli->close() ) {
            $this->conn = false;
            return true;
        }else{
            return false;
        }
    }
}
