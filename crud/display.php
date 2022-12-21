<?php

include 'connect.php';?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="studentregistrationform.php" class="text-light">Add user</button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">mother_name</th>
      <th scope="col">father_name</th>
      <th scope="col">email</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 

$sql = "Select * from `crud`";
$result = mysqli_query($con, $sql);
if($result) {
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $firstname=$row['first_name'];
        $lastname=$row['last_name'];
        $mothername=$row['mother_name'];
        $fathername=$row['father_name'];
        $email=$row['email'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$mothername.'</td>
        <td>'.$fathername.'</td>
        <td>'.$email.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'" 
        class="text-light">update</a></button>
        
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'" 
        class="text-light">Delete</a></button>
        </td>
      </tr>';
    }
}







?>








    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>

    </div>
</body>
</html>