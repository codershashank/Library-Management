
<?php
require 'connect.php';

if(isset($_GET['delete'])){
$id=$_GET['delete'];
$query="DELETE FROM stud_data WHERE id='$id'";
$query_run= mysqli_query($link,$query);
}
?>

<?php
$query="Select * from stud_data";
$query_run=mysqli_query($link,$query);
$sno=1;
?>
<table width="70%" border="bold" style="solid">
<tr>
<th>S_ID</th>
<th>NAME</th>
<th>DEGREE</th>
<th>BRANCH</th>
</tr>
<?php
while($query_exe=mysqli_fetch_assoc($query_run)){
$id=$query_exe['id'];
$name=$query_exe['name'];
$degree=$query_exe['degree'];
$branch=$query_exe['branch'];
?>

<tr>
<td><?php echo $id;?></td>
<td><?php echo $name;?></td>
<td><?php echo $degree;?></td>
<td><?php echo $branch;?></td>
<td><a href="edit.php?edit=<?php echo $id;?>">Edit</a></td>
<td><a href="delete.php?delete=<?php echo $id;?>">Delete</a></td>
</tr>

<?php
//echo $sno.' '.$id.' '.$name.' '.$degree.' '.$branch.' <br>';
$sno++;
}
?>
</table>
