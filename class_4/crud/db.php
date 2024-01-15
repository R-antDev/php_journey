<?php

namespace crud;

class db
{
    public $hostname;
    public $username;
    public $password;
    public $dbname;
    public $connection;

    public function __construct($dbname, $hostname, $password, $username)
    {
        $this->hostname = $hostname;
        $this->password = $password;
        $this->username = $username;
        $this->dbname = $dbname;

        $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this ->connection){
            echo mysqli_error();
        }else{
            echo ' Database Connection successful';
        }
    }
    public function insertion($name, $roll, $email)
    {
        $sql = "INSERT INTO students (name, roll, email) VALUES ('$name','$roll','$email')";
        if (mysqli_query($this->connection, $sql)){
            echo "Data Inserted";
        }else{
            echo mysqli_error();
        }
    }
    public function update($name, $roll, $email)
    {
    $sql = "UPDATE students SET name= '$name', roll= '$roll', email='$email' WHERE id = 1 ";
        if (mysqli_query($this->connection, $sql)){
            echo "Data Updated";
        }else{
            echo mysqli_error();
        }
    }
    public function delete()
    {
    $sql = "DELETE FROM students WHERE id = 1";
        if (mysqli_query($this->connection, $sql)){
            echo "Data DELETED";
        }else{
            echo mysqli_error();
        }
    }
    public function dataRead()
    {
        $sql = "SELECT * FROM students";
        $data = mysqli_query($this->connection, $sql);
        while ($result = mysqli_fetch_array($data)){
            echo $result['name'].'<br>';
            echo $result['roll'].'<br>';
            echo $result['email'].'<br>';
        }
    }

    //::TODO make a table to show the data
}

$dbConnect = new db('students','localhost','','root');
$dbConnect->insertion('Emon','18', 'emon@mail.com');
$dbConnect->update('NotEmon','19','emon@gmail.com');
$dbConnect->delete();
$dbConnect->dataRead();