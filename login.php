<?php
include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Log In Form</title>
    <style>
        body {
            background: url(pics/f10.jpg) no-repeat center center fixed;
            background-size: cover;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            
            border-radius: 10px;
            padding-left: 0%;
            margin-top: 22%;
            text-decoration: solid;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            color: rgb(  255, 128, 0);
            text-shadow: rgb(255, 191, 128) -1px 0px;
            text-decoration: solid;
        }
        .btn{
            margin-top: 22%;
            
            font-size: 30px;
        }
    
      
      .btn-success {
          background-color: rgba(223, 113, 3, 0.322);
          border-color: rgb(102, 51, 0);
          color:  rgb(102, 51, 0) ;
          
      }
      .btn-success:hover {
          background-color: rgb(255, 128, 0);
          border-color: rgb(197, 158, 116);

      }
      
    </style>
    
            
       
</head>
<body>
    

    <div class="container">
        <form class="row " action="" method="POST">
            <!-- Keep your existing form fields -->
            <div class="row justify-content-center">
            <!-- Add login-specific fields -->
            <div class="col my-3 col-md-4 ">
                <label class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control border border-dark" required>
            </div>
            </div>
            <div class="row justify-content-center">
            <div class="col my-3 col-md-4 ">
                <label class="form-label">Password</label>
                <input type="password" id="pass" name="pass" class="form-control border border-dark" required>
            </div>
            </div>
            <div class="col-12 mt-3 py-5">
                <button type="submit" name="sub" class="btn btn-success ">Login</button>
            </div>
        </form>
    </div>
    

    
</body>
</html>
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validate user credentials
    $sql = "SELECT * FROM sign_in WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if a row is returned
        if (mysqli_num_rows($result) > 0) {
            // User is authenticated
            echo "Login successful";
        } else {
            // Invalid credentials
            echo "Invalid email or password";
        }
    } else {
        // Query execution error
        echo "Error: " . mysqli_error($conn);
    }
}
?>