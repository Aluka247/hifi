<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Video;

class DashboardController
{
    public function index()
    {
        // Fetch videos or any other data needed for the dashboard
        $videos = (new Video())->getAllVideos();
        
        // Pass the video data to the dashboard view
        View::render('dashboard', ['videos' => $videos, 'message' => 'Welcome to the Dashboard']);
    }
}
