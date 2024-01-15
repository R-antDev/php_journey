<?php

class MyDB
{
    public $host;
    public $user;
    public $pass;
    public $db_name;
    public $connect;
    public $port;

    public function __construct($hostname, $username, $password, $dbname, $port)
    {
        $this->host = $hostname;
        $this->user = $username;
        $this->pass = $password;
        $this->db_name = $dbname;
        $this->port = $port;

        $this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name, $this->port);
        if (!$this->connect) {
            echo mysqli_error();
        } else {
            echo 'Database Connected <br>';
        }
    }

    public function insert($name, $employee_id, $email, $designation, $salary, $join_date)
    {
        $sql = "INSERT INTO employees (name, employee_id, email, designation, salary, join_date) VALUES ('$name','$employee_id','$email','$designation','$salary','$join_date')";
        if (mysqli_query($this->connect, $sql)) {
            echo "<br> Data Inserted";
        } else {
            echo mysqli_error();
        }
    }

    public function update($name, $employee_id, $email, $designation, $salary, $join_date)
    {
        $sql = "UPDATE employees SET name= '$name',employee_id = '$employee_id',email='$email', designation = '$designation', salary = '$salary',join_date = '$join_date' WHERE id = 1";
        if (mysqli_query($this->connect, $sql)) {
            echo "<br> Data Updated";
        } else {
            echo mysqli_error();
        }
    }
    public function delete()
    {
        $sql = "DELETE FROM employees WHERE id = 1";
        if (mysqli_query($this->connect, $sql)){
            echo "Data DELETED";
        }else{
            echo mysqli_error();
        }
    }
    public function view()
    {
        $sql = "SELECT * FROM employees";
        $data = mysqli_query($this->connect, $sql);
        while ($result = mysqli_fetch_array($data)){
            echo 'Name: '.$result['name'].'<br>';
            echo 'Employee ID: '.$result['employee_id'].'<br>';
            echo 'Email: '.$result['email'].'<br>';
            echo 'Designation: '.$result['designation'].'<br>';
            echo 'Salary: '.$result['salary'].'<br>';
            echo 'Join date: '.$result['join_date'].'<br>';
            echo '<br>';
        }
    }
}

$dbConnect = new MyDB('localhost', 'root', '1234', 'employees', '3307');
//$dbConnect->insert('Zubayer',102, 'zuba@mail.com', 'Water boy','3000','2021-11-10');
// $dbConnect->update('Shariar', 101, 'emon@gmail.com', 'Developer', '30000', '2023-11-11');
// $dbConnect->delete();
$dbConnect->view();
