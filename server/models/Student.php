<?php

class Student {
    private $conn;
    private $table_name = "students";

    public $id;
    public $name;
    public $registration_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create new student
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (name, registration_id) VALUES (:name, :registration_id)";
        $stmt = $this->conn->prepare($query);

        // Sanitize input
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->registration_id = htmlspecialchars(strip_tags($this->registration_id));

        // Bind data
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":registration_id", $this->registration_id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Add more CRUD methods here (read, update, delete)
}

?>
