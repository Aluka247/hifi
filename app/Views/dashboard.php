
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'app/Views/layouts/header.php'?>



<div class="alert alert-success"><?php echo $successMessage ?></div>





<!-- <h2>Video Details:</h2> -->

<?php foreach ($videos as $video): ?>

    <div class="video-row">

    <div class="video-details">

    <div class="vid">

    <video controls width="400">
    <source src="<?php echo $video['file_path']; ?>" type="video/mp4">
    Your browser does not support the video tag.
</video>



    </div>

    <div class="product-details">
        <h4>Product: <span><?php echo $video['title']; ?></span></h4>

        <p><h5>Description: <span><?php echo $video['description']; ?></span></h5></p>
     
        <h5>Price: <span><span><?php echo $video['price']; ?></span></h3>

        </div>
        </div>
        <?php endforeach;
        
        ?>

<?php

include 'app/Views/layouts/footer.php';

?>





<style>
.vid-container{
    width: 100%;
    height:100%;
    margin: auto ;
    display: flex;
    flex-direction:row;
  
   
}

.video-row{
    width: 100%;
    gap: 30px;
    display: flex;
    flex-direction:row;
}

.video-details{

        background-color: gray;
        width: 400px;
        padding-bottom: 20px;
    }

    .vid{
        width:400px;
        height:300px;
        
    }

    .vid img{
        width:100%;
        height:100%;
    }

    .product-details{
        padding: 10px;
    }

</style>



    
</body>
</html>