<?php
$id=$_GET['deleteid'];
include('db_connect.php');
$query="DELETE FROM book WHERE id='$id'";
if(mysqli_query($connection,$query))
{
	header("location:book_form.php");
	exit;
}else{
	echo "Error".mysqli_error($connection);
}
?>