<?php
namespace App\Models;

use App\Core\Model;

class User extends Model {
    
    // FECTH userS ASS AN ASSOCO
    public function getAllUsers() {

        //$sql="select users.id,users.name,users.email,users.age,courses.name as course, from users join levels on users.level=levels WHERE users.id=?";

        $sql = "SELECT users.id, users.name, users.email, users.age
        FROM users";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function getUserById($id) {

        //$sql="select users.id,users.name,users.email,users.age,courses.name as course, from users join levels on users.level=levels WHERE users.id=?";
        $sql = "SELECT users.id, users.name, users.email, users.age
        FROM users 
        -- JOIN courses ON users.course_id = courses.id
        -- JOIN levels ON users.level_id = levels.id
        WHERE users.id=?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addUser($data) {
        // die(json_encode($data));
        $stmt = $this->db->prepare("INSERT INTO users (name, email, age, password) VALUES (?,?,?,?)");
        $stmt->bind_param("ssis", $data['name'], $data['email'], $data['age'], $data['password'] );
        return $stmt->execute();
    }

    public function updateUser($id, $data) {
        $stmt = $this->db->prepare("UPDATE users SET name = ?, email = ?, age = ? WHERE id = ?");
        $stmt->bind_param("ssii", $data['name'], $data['email'], $data['age'], $id);
        return $stmt->execute();
    }

    public function deleteUser($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }



    function getUserByEmail($email){

        $sql = "SELECT users.id, users.name, users.email, users.password
        FROM users 
        WHERE users.email=?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();

    }
}
