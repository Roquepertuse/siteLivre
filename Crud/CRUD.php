<?php
if (!isset($_SESSION['connecter'])) {
    session_start();
}; 
class CRUD

{
    private $host = 'localhost';
    private $username = 'root2';
    private $password = 'root2';
    private $database = 'lesmillesconduites';
    public $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }

    public function create($data)
    {
        $query = "INSERT INTO evenements (picture, title, description, date) VALUES (:picture, :title, :description, :date)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':picture', $data['picture']);
        $statement->bindParam(':title', $data['title']);
        $statement->bindParam(':description', $data['description']);
        $statement->bindParam(':date', $data['date']);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function read()
    {
        $query = "SELECT evenements.id, evenements.picture, evenements.title, evenements.description, evenements.date 
                    FROM evenements
                    ORDER BY evenements.date DESC
                    ";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results; // Retourne les résultats de la jointure
    }

    // ID + DATA
    public function update($id, $data)
    {
        $query = "UPDATE evenements SET title = :title , description = :description WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $data['title']);
        $statement->bindParam(':description', $data['description']);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getEvenementsById($id)
    {
        $query = "SELECT * FROM evenements WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $evenements = $statement->fetch(PDO::FETCH_OBJ);

        return $evenements;
    }

    public function delete($id)
    {
        $query = "DELETE FROM evenements WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}