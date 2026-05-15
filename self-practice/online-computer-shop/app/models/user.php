<?php

require_once "../app/config/database.php";

class user {

    private $conn;
    private $table = "users";

    public function __construct() {

        $database = new database();
        $this->conn = $database->connect();
    }

    public function register($name, $email, $password, $role) {

        $check = "SELECT id FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($check);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            return "Email already exists";
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(name,email,password_hash,role)
                  VALUES(:name,:email,:password_hash,:role)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password_hash", $hashedPassword);
        $stmt->bindParam(":role", $role);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function login($email, $password) {

        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if($stmt->rowCount() == 1) {

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password, $user['password_hash'])) {
                return $user;
            }
        }

        return false;
    }

    public function findById($id) {

        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfile($id, $name, $email, $image) {

        $query = "UPDATE users
                  SET name=:name,email=:email,profile_picture=:image
                  WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }

    public function changePassword($id, $newPassword) {

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $query = "UPDATE users
                  SET password_hash=:password
                  WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":password", $hashedPassword);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }

    public function storeRememberToken($id, $token) {

        $hashedToken = password_hash($token, PASSWORD_DEFAULT);

        $query = "UPDATE users
                  SET remember_token=:token
                  WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":token", $hashedToken);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }

    // Auto-login verify korar notun method
    public function verifyRememberToken($id, $token) {
        $query = "SELECT remember_token FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($token, $row['remember_token'])) {
                return true;
            }
        }
        return false;
    }
}