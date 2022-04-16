<?php

// DATABASE CONNECTION
class database{
    private $host;
    private $username;
    private $password; 
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'meerjaren';

        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Connection failed!-> ".$exception.getMessage());
        }
    }
        
        // INSERT
       public function insert($sql, $placeholder, $location=NULL) {

        try {
            $this->dbh->beginTransaction();
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute($placeholder);
            $this->dbh->commit();

        } catch(Expection $e) {
            $this->pdo->rollback();
            throw $e;
        }
       }
        //LOGIN
       public function login($username, $password) {

            $sql = "SELECT medewerker_code, username, password, role FROM medewerker WHERE username= :username";
            $stmt = $this->dbh->prepare($sql);

            $stmt->execute([
                'username'=> $username
            ]);
           $result = $result ?? 'default';
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!is_null($result)){

                if($username && password_verify($password, $result['password'])){
                   
                    session_start();
                    $_SESSION['medewerker_code'] = $result['medewerker_code'];
                    $_SESSION['medewerker_naam'] = $result['medewerker_naam'];
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['role'] = $result['role'];
                    
                    echo "WELKOM " . $_SESSION['username'];
                }else{
                    echo 'Username or password is incorrect.';
                    exit();
                }

                if($result['role'] == "ADMIN") {
                    header("location: overzicht-admin.php");
                } else {
                    header("location: magazijnen.php");
                }
       }
    }

    // SELECT
    public function select($sql, $placeholder = []){
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholder);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // $_SESSION['vak_code'] = $result['vak_code'];
        
        if(!empty($result)){
            return $result;
        }

        return;
    }
    // UPDATE
    public function edit($sql, $placeholder, $file) {
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholder);
        header("location: " . $file);
    }
    // DELETE
    public function delete($sql, $placeholder, $file) {

        $statement = $this->dbh->prepare($sql);
        $statement->execute($placeholder);
        header("location: " . $file);
        exit;
    }
}


    ?>