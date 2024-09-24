<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Video;
use App\Models\User;

class VideoController
{
  private $videoModel;

    public function __construct()
    {

        $this->userModel = new User();
        $this->videoModel = new Video();
    }




    /**
     * Displays all Videos.
     */
    public function Videoindex()
    {
        $videos = $this->videoModel->getAllVideos();
        View::render('videos/index', ['videos' => $videos  //,'level'=>$level
        ]);
    }

    /**
     * Displays the form to create a new Video.
     */
    public function createVideo()
    {
        // $courses = $this->course->getAllCourses();
        // $levels = $this->level->getAllLevels();
        View::render('videos/create' //, ['courses'=>$courses, 'levels'=>$levels]
    );
    }

    /**
     * Stores a new Video in the database.
     */
    public function storeVideo()
    {

    
        $data = [
            'price' => $_POST['price'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'video' => $_POST['video'],
      
            
        ];



        if (isset($_FILES['video_file']) && $_FILES['video_file']['error'] === UPLOAD_ERR_OK) {
            $targetDir = "uploads/"; // Define your target directory
            $fileName = basename($_FILES['video_file']['name']);
            $targetFilePath = $targetDir . $fileName;
    
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['video_file']['tmp_name'], $targetFilePath)) {
                $data['file_path'] = $targetFilePath; // Set the file path
            } else {
                // Handle file upload error
                $_SESSION['errorMessage'] = "File upload failed!";
                header('Location: /hifi/videos/create'); // Redirect back to create page
                exit;
            }
        } else {
            $_SESSION['errorMessage'] = "No file uploaded!";
            header('Location: /hifi/videos/create'); // Redirect back to create page
            exit;
        }



       // die(json_encode($data));
        $this->videoModel->addVideo($data);
        header('Location:/hifi/videos');
    }









    
    /**
     * Displays the form to edit a Video.
     */
    public function editVideo()
    {
        $id = $_GET['id'];
        $video = $this->videoModel->getVideoById($id); // Ensure this returns the video data
        if (!$video) {
            // Handle the case where the video doesn't exist, e.g., redirect or show an error
            header('Location: /hifi/videos');
            exit;
        }
        View::render('videos/edit', ['video' => $video]); // Ensure 'video' is passed correctly
    }
    

    /**
     * Updates a Video in the database.
     */

    public function updateVideo()
    {
        $id = $_POST['id'];
        $data = [
            'price' => $_POST['price'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'video' => $_POST['video'],
        ];


   // die(json_encode($data));
        $this->videoModel->updateVideo($id, $data);
        header('Location: /hifi/videos');
    }

    /**
     * Deletes a Video from the database.
     */
    public function deleteVideo()
    {
        $id = $_POST['id'];
      // die($_POST['id']);
        $this->videoModel->deleteVideo($id);
        header('Location: /hifi/videos');
    }
    
}
