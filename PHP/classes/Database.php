<?php

class Database {

    private $db = null;

    public function __construct($host, $username, $passwor, $db) {
        $this->db = new mysqli($host, $username, $passwor, $db);
    }

    public function login($emailcim, $username, $password) {
        $stmt = $this->db->prepare('SELECT `userid`, `emailcim`, `username`, `password` FROM `users` WHERE username = ? and emailcim = ? and password = ?');
        $stmt->bind_param("sss", $username, $emailcim, $password);
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $_SESSION['login'] = true;
                header("Location: index.php");
            }
        }
        $stmt->close();
    }
    
    public function register($emailcim, $username, $password) {
        $stmt = $this->db->prepare("INSERT INTO `users`(`userid`, `emailcim`, `username`, `password`) VALUES (NULL,?,?,?)");

        if (!$stmt) {
            die('Error: ' . $this->db->error);
        }

        $stmt->bind_param("sss",$emailcim, $username, $password);

        try {
            if ($stmt->execute()) {
                $_SESSION['login'] = true;
                header("location: index.php");
            }
        } catch (Exception $e) {

            echo 'Error: ' . $e->getMessage();
        }
    }
}