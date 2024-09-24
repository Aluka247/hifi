<!DOCTYPE html>
<html>
<?php include 'app/Views/layouts/header.php'?>


<br>
    <br>
    <br>
    <br>
    
<div class="container" id="form-container" >
    
<div class="form-bg" >
<h3 class="sign-up-text">Sign up</h3>
    <form action="/hifi/users/store" method="post">
       <?php
       include "form.php"

       ?>
    <div class="form-group py-3">

    <button class="form-control" id="enroll-click" type="submit">Enroll</button>
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






