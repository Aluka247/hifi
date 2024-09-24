<?php include 'app/Views/layouts/header.php'?>
    <?php  $baseUrl="hifi"   ?>
 
    

<div class="container">

<div class="table-responsive">

<table class="table">

<div class=" py-2  justify-content-around">
<h1 class="">Users List</h1>

<a class="btn btn-primary " href="/hifi/users/signup">Add New</a>
</div>
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
        
    </tr>
</thead>

<tbody>
    <?php
    foreach ($users as $user) {
    ?>




<tr>
<td><?php echo $user['id'];?></td>
<td><?php echo $user['name'];?></td>
<td><?php echo $user['email'];?></td>
<td><?php echo $user['age'];?></td>


<td class="d-flex gap-2">
<a class="btn btn-xs btn-primary" href="/hifi/users/edit?id=<?php echo $user['id'];?>">Edit</a>

<form id='<?php echo "myForm{$user['id']}"?>' action="/hifi/users/delete" method="post">
<input type="hidden" name="id" value="<?= $user['id']; ?>">
<input type="hidden" name="_method" value="delete">

<button onclick="conFirmDelete(<?php echo $user['id'];?>)" class="btn btn-xs btn-danger" type="button">Delete</button>
</form>

</td>
</tr>

<?php  }?>
    
    
</tbody>
</table>
</div>



</div>
<?php include 'app/Views/layouts/footer.php'?>

 