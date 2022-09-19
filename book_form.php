<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
body{
    background: linear-gradient(45deg,pink,purple);
    
}

.container{
   background: white;
   
}

    </style>
</head>

<body>
       <button class="btn btn-primary my-5 ml-5"
       >
            <a href="book.php" class="text-light">Add user</a>
        </button>
    <div class="container  mb-5">
        
        <table class="table">
            <thead>
                <tr>
                  
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">address</th>
                    <th scope="col">location</th>
                    <th scope="col">guests</th>
                    <th scope="col">arrivals</th>
                    <th scope="col">leaving</th>

            
                    <th scope="col">operations</th> 
                </tr>
            </thead>
            <tbody>
                <?php
    include "db_connect.php";
    $sql="select * from book";
    $result=mysqli_query($connection,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $name= $row['name'];
        $email= $row['email'];
        $phone= $row['phone'];
        $address=$row['address'];
        $location=$row['location'];
        $guests=$row['guests'];
        $arrivals=$row['arrivals'];
        $leaving=$row['leaving'];


        echo '
    <tr>
    
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$address.'</td>
      <td>'.$location.'</td>
      <td>'.$guests.'</td>
      <td>'.$arrivals.'</td>
      <td>'.$leaving.'</td>
      

      <td>
      <button class="btn btn-primary"><a class="text-light" href="update.php?
      updateid='.$id.'">Update</a></button>
      <button class="btn btn-danger my-2"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
    </td>
    </tr>';

}

    }

    ?>

            </tbody>
        </table>
    </div>

</body>

</html>

