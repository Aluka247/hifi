<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Video;

class HomeController
{
    private $videoModel;

    public function __construct()
    {
        // Initialize the Video model
        $this->videoModel = new Video();
    }

    public function index()
    {
        // Fetch videos from the Video model
        $videos = $this->videoModel->getAllVideos();

        // Pass the videos to the view
        View::render('home', ['videos' => $videos, 'message' => 'Welcome to Home' ]);
    }
}
