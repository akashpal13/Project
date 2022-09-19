<?php
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      include ('db_connect.php');
      $request = "INSERT INTO book(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";

   
      if(mysqli_query($connection,$request))
	{
		header("location:book_form.php");
        
		exit;
	}

	else{     
		echo"error".mysqli_error($connection);
	}



}

?>