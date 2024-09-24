
<!DOCTYPE html>
<html>
<?php include 'app/Views/layouts/header.php'?>

<br>
<br>
<br>
<br>

<div class="container" id="form-container" >
    
<div class="form-bg" >
<h3 class="sign-up-text">Post New Product</h3>

    <form action="/hifi/videos/store" method="post" enctype="multipart/form-data">
       <?php
       include "form.php"

       ?>

    <div class="form-group py-4">
    <button class="form-control" id="enroll-click" type="submit">Post</button>
    </div>
    </form>
    
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    
    <?php include 'app/Views/layouts/footer.php'?>

</div>






