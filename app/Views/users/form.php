

        
<input type="hidden" name="id" value="<?= $user['id']??''; ?>">
<div class="form-group">  
<!-- <label for="name">Name:</label>        -->
<input class="form-control" type="text" name="name" id="name"  placeholder="Full name" value="<?php echo $user['name']??''; ?>" required><br>
</div>


<div class="form-group">  
        <!-- <label for="email">Email:</label> -->
        <input class="form-control"  type="email" name="email" id="email" placeholder="Email" value="<?php echo $user['email']??''; ?>" required><br>
</div>

<div class="form-group">  
        <!-- <label for="age">Age:</label> -->
        <input class="form-control"  type="number" name="age" id="age"  placeholder="Age" value="<?php echo $user['age']??''; ?>" required><br>
</div>

<div class="form-group">
        <input type="password"  name="password" value="<?php echo $password['password']??''?>" class="form-control" placeholder="Password">
    </div>



