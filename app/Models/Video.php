<?php
namespace App\Models;

use App\Core\Model;

class  Video extends Model {
    
    // FECTH VideoS ASS AN ASSOCO
    public function getAllVideos() {

        $result = $this->db->query("SELECT * FROM videos");
        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function getVideoById($id) {
    
        $stmt = $this->db->prepare("SELECT * FROM videos where id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function addVideo($data)
    {
        $stmt = $this->db->prepare("INSERT INTO videos (price, title, description, file_path) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $data['price'], $data['title'], $data['description'], $data['file_path']);
        return $stmt->execute();
    }
    

    public function updateVideo($id, $data) {
        $stmt = $this->db->prepare("UPDATE videos SET price = ?, title = ?, description = ?, file_path = ? WHERE id = ?");
        $stmt->bind_param("isssi", $data['price'], $data['title'], $data['description'],$data['file_path'],$id);
        return $stmt->execute();
    }

    public function deleteVideo($id) {
        $stmt = $this->db->prepare("DELETE FROM videos WHERE id = ?");
        $stmt->bind_param("i", $id);
       // die($id);
        return $stmt->execute();
    }

}
