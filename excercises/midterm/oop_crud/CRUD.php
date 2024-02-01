<?php

require 'Database.php';

class CRUD extends Database
{
    public function create($name, $email, $address)
    {
        $query = "INSERT INTO `information` (`name`, `email`, `address`) VALUES ('$name', '$email', '$address')";
        $insert = mysqli_query($this->connection, $query);
        if ($insert){
            header('location: index.php');
        }else{
            die('Query problem'.mysqli_error($this->connection));
        }
    }
    public function read()
    {
        $query = "SELECT * FROM `information`";
        return mysqli_query($this->connection, $query)->fetch_all(MYSQLI_ASSOC);
    }
    public function readOne($id){
        $query = "SELECT * FROM `information` WHERE `information`.`id` = $id";
        return mysqli_query($this->connection, $query)->fetch_assoc();
    }
    public function update($id, $name, $email, $address){
        $query = "UPDATE `information` SET `name` = '$name', `email` = '$email', `address` = '$address' WHERE `information`.`id` = $id";
        $update = mysqli_query($this->connection, $query);
        if ($update){
            header('location: info.php');
        }else{
            die('Query problem'.mysqli_error($this->connection));
        }
    }
    public function delete($id){
        $query = "DELETE FROM `information` WHERE `information`.`id` = $id";
        $delete = mysqli_query($this->connection, $query);
        if ($delete){
            header('location: info.php');
        }else{
            die('Query problem'.mysqli_error($this->connection));
        }
    }


}