

        
<input type="hidden" name="id" value="<?= $video['id']??''; ?>">
<div class="form-group">  
<!-- <label for="name">Name:</label>        -->
<input class="form-control" type="text" name="price" id="video_price"  placeholder="Price" value="<?php echo $video['price']??''; ?>" required><br>
</div>


<div class="form-group">  
        <!-- <label for="email">Email:</label> -->
        <input  class="form-control"  type="text" name="title" id="video_title" placeholder="Title" value="<?php echo $video['title']??''; ?>" required><br>
</div>



<!-- Video Text area -->
<div class="form-group">  
<textarea type="text" name="description" id="v_description" class="form-control" placeholder="Description" required><?php echo $video['description']??''; ?>
</textarea>
</div>



