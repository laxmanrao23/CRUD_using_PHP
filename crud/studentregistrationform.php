<?php 
include 'connect.php';
if(isset($_POST['submit'])) {
  $firstname=$_POST['first_name'];
  $lastname=$_POST['last_name'];
  $mothername=$_POST['mother_name'];
  $fathername=$_POST['father_name'];
  $email=$_POST['email'];

  $sql= "insert into `crud` (first_name,last_name, mother_name, father_name, email)
  values('$firstname','$lastname','$mothername','$fathername','$email')";
  $result = mysqli_query($con,$sql);
  if($result){
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
          />

          last_name :
          <input
            
            type="text"
            class="form-control"
            name="last_name"
            placeholder="lastname"
          />

          mother_name :
          <input
            
            type="text"
            class="form-control"
            name="mother_name"
            placeholder="mothername"
          />

          father_name :
          <input
           
            type="text"
            class="form-control"
            name="father_name"
            placeholder="fathername"
          />

          <div class="form-group">
            email :
            <input
              type="email"
              name="email"
              class="form-control"
              id="..."
              required
            />
            <div class="invalid-feedback">Please provide a valid email.</div>
          </div>

          <button
            class="btn btn-primary"
            type="submit"
            name="submit"
          >
            Submit
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
