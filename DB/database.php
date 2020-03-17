<?php

include('constains.php');

class Database{
    private $DB;

    public function __construct($name)
    {
        $this->DB = new PDO("mysql:host=" . DB_HOST . ";dbname=$name", DB_USER, DB_PASS);  // to login db
    }

    public function myExec($q){
        $this->DB->exec($q);
    }

    public function edit($id, $params=array()){

        $q = "SELECT * FROM records WHERE id = '$id'";
        $stmt = $this->DB->prepare($q);
        $stmt->execute($params);
        return $stmt->fetch();
   
    }

    public function update($data){

        $q = " UPDATE
                records 
             SET 
                name = '$data[name]', pass = '$data[pass]', email = '$data[email]',  mobile = '$data[mobile]',  address = '$data[address]' 
             WHERE 
                id = '$data[id]";
            
        if( $stmt = $this->DB->exec($q) ){
            return true;
        }
        else{
            return false;
        }
    }
    

    public function insert(){

        if(isset($_POST['submit'])){
            // echo 'yes';

            //Validation for PHP
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mobile'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['mobile'])){

                    // echo $name = $_POST['name'];
                    // echo $email = $_POST['email'];
                    // echo $pass = $_POST['password'];
                    // echo $mobile = $_POST['mobile'];

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = sha1($_POST['password']);
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];

                    $q = "INSERT INTO records(name, pass, email, mobile, address) VALUES ('$name', '$pass', '$email', '$mobile','$address')";
                    if( $stmt = $this->DB->exec($q) ){
                        echo '<script> alert("THIS RECORED ADDED!..");</script>';
                        echo '<script> window.location.href = "index.php";</script>';
                       
                       

                    }
                    else{
                        echo '<script> alert("THIS RECORED NOT ADDED!..");</script>';
                        echo '<script> window.location.href = "index.php";</script>';

                    }
                    // myExec($q);
                    
                }else{
                    echo '<script> alert("PLZ, COMPLETE DATA IN THIS FORM!..");</script>';
                    echo '<script> window.location.href = "index.php";</script>';

                }
            }
        }
    }

    public function getRows($q, $params = array()){
        $stmt = $this->DB->prepare($q);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function delete($id){

        $q = "DELETE FROM records WHERE id = '$id'";
        $stmt = $this->DB->prepare($q);
        if( $stmt->execute() ){
            return true;
        }
        else{
            return false;
        }
       
    }

    public function getRow($query, $params=array()){
        $stmt = $this->DB->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch();
    }

    
}

$DB = new Database(DB_DATABASE);
?>