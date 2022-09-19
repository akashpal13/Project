<?php
if(isset($_POST['update']))
{     $id=$_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
	include('db_connect.php');
	$query="UPDATE book SET name='$name',email='$email',phone='$phone',address='$address',location='$location',guests='$guests',arrivals='$arrivals',leaving='$leaving' 
            WHERE id='$id'";	
		if (mysqli_query($connection,$query))
				{
			header("Location:book_form.php");
			exit;
		}else{
			echo "error".mysqli_error($connection);
		}
}
				
?>