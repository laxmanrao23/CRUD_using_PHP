<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['first_name'];
$lastname=$row['last_name'];
$mothername=$row['mother_name'];
$fathername=$row['father_name'];
$email=$row["email"];


if(isset($_POST['submit'])) {
  $firstname=$_POST['first_name'];
  $lastname=$_POST['last_name'];
  $mothername=$_POST['mother_name'];
  $fathername=$_POST['father_name'];
  $email=$_POST['email'];

  $sql= "update `crud` set id=$id, first_name='$firstname', last_name='$lastname',
  mother_name='$mothername', father_name='$fathername', email='$email'
  where id=$id";
  $result = mysqli_query($con,$sql);
  if($result){
    //echo "update Successfully";
    header('location:display.php');
  }else {
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Registration Form</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="register.css"
    />
  </head>
  <body>
    <div class="container">
      <h1 style="color: blue">Registration Form</h1>

      <form class="form-group" method="POST">
        <fieldset class="form-group">
          first_name :<input
            
            type="text"
            class="form-control"
            name="first_name"
            placeholder="Firstname"
            value=<?php echo $firstname;?>
          />

          last_name :
          <input
            
            type="text"
            class="form-control"
            name="last_name"
            placeholder="lastname"
            value=<?php echo $lastname;?>
          />

          mother_name :
          <input
            
            type="text"
            class="form-control"
            name="mother_name"
            placeholder="mothername"
            value=<?php echo $mothername;?>
          />

          father_name :
          <input
           
            type="text"
            class="form-control"
            name="father_name"
            placeholder="fathername"
            value=<?php echo $fathername;?>
          />

          <div class="form-group">
            email :
            <input
              type="email"
              name="email"
              class="form-control"
              id="..."
              required
              value=<?php echo $email;?>
            />
            <div class="invalid-feedback">Please provide a valid email.</div>
          </div>

          <button
            class="btn btn-primary"
            type="submit"
            name="submit"
          >
            update
          </button>
          <button
            class="btn btn-primary"
            type="reset"
          >
            reset
          </button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
