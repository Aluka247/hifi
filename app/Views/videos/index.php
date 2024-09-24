<?php include 'app/Views/layouts/header.php'?>


    <?php  $baseUrl="hifi"   ?>
 
    <br>
    <br>
    <br>
    <br>

<div class="container">

<div class="">

<table class="table">

<div class=" py-2 ">
<h1 class="">Users List</h1>

<a class="btn btn-primary " href="/hifi/videos/create">New Post</a>
</div>
<thead>
    <tr>
        <th>ID</th>
        <th>Price</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
        
    </tr>
</thead>

<tbody>
    <?php
    foreach ($videos as $video) {
    ?>




<tr>
<td><?php echo $video['id'];?></td>
<td><?php echo $video['price'];?></td>
<td><?php echo $video['title'];?></td>
<td><?php echo $video['description'];?></td>


<td class="d-flex gap-2">
<a class="btn btn-xs btn-primary" href="/hifi/videos/edit?id=<?php echo $video['id'];?>">Edit</a>

<form id='<?php echo "myForm{$video['id']}"?>' action="/hifi/videos/delete" method="post">

<input type="hidden" name="_method" value="delete">
<input type="hidden" name="id" value="<?php echo $video['id']; ?>">
<button onclick="conFirmDelete(<?php echo $video['id'];?>)" class="btn btn-xs btn-danger" type="button">Delete</button>
</form>

</td>
</tr>

<?php  }?>
    
    
</tbody>
</table>
</div>

</div>


<br>
    <br>
    <br>
    <br>

<?php include 'app/Views/layouts/footer.php'?>



 