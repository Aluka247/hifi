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
            
        ];
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
        // $courses = $this->course->getAllCourses();
        // $levels = $this->level->getAllLevels();

        //die($id);
        $video = $this->videoModel->getVideoById($id);
        View::render('videos/edit', ['video' => $video  //,'courses'=>$courses, 'levels'=>$levels
    ]);
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
        $this->videoModel->deleteVideo($id);
        header('Location: /hifi/videos');
    }
    
}
