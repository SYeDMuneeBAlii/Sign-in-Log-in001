
<?php
include ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Sign In Form</title>
    <style>
        body {
            background: url(pics/f11.jpg) no-repeat center center fixed;
            background-size: cover;
            font-size: 20px;
            font-weight: bold;
            
        }
        .row{
            padding-left: 3%;
        }
        .containerr {
           
            border-radius: 20px;
            padding: 20px;
            margin-left: 0%;
            margin-top: 10%;
            text-decoration: solid;
            
        }
        .nav{
            color: rgb(138, 85, 85);
        }
        .btn{
            margin-top: 15%;
            margin-left: 45%;
            font-size: 30px;
        }
      
        .btn-primary {
            background-color: rgba(255, 128, 0, 0.507);
            border-color: rgb(248, 125, 2);
            color:  rgb(102, 51, 0) ;
            
        }
        .btn-primary:hover {
            background-color: rgb(255, 128, 0);
            border-color: rgb(211, 172, 131);

        }
        .ft{
            margin-top: 13%;
          
            width: 100%;
            color: rgb(  255, 128, 0);
            text-shadow: rgb(255, 191, 128) -1px 0px;
            text-decoration: solid;
            font-family: "Times New Roman", Times, serif;
            
        }
        /* .custom-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: end;
            text-decoration: none;
            background-color:rgb(255, 191, 128);
            color:rgb(255, 191, 128);
            border: 2px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 65%;
        } */
    </style>
</head>
<body>
    
     <ul class="nav justify-content-end ">
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./display.php">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">LOG-IN</a>
        </li>
      </ul>

    <!-- <div>
        <img src="f3.jpg" alt="" class="">
    </div> -->
    <div class="ft containerr">
        <form class="row " action="" method="POST">
            <div class="row ">
            <div class="row justify-content-center">
            <div class="col-3 ">
                <label class="form-label ">Name</label>
                <input type="text" id="name" name="name" class="form-control border border-dark" required>
            
            </div>
            
            
            <div class="col-3">
                <label class="form-label">Father Name</label>
                <input type="text" id="father" name="father" class="form-control border border-dark" required>
            </div>
            </div>
            </div>
            <div class="row ">
                <div class="row justify-content-center">
            <div class="col-6">
                <label class="form-label">Address</label>
                <input type="text" id="addd" name="addd" class="form-control border border-dark" required>
            </div>
            </div>
            <div class="row ">
                <div class="row justify-content-center">
            <div class="col-3 ">
                <label class="form-label">Date of birth</label>
                <input type="date" id="DOB" name="DOB" class="form-control border border-dark" required>
            </div>
            
            
            
            <div class="col-3">
                <label class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control border border-dark" required>
            </div>
            </div> 
            </div> 
            <div class="row "> 
                <div class="row justify-content-center">
            <div class="col-3">
                <label class="form-label">Password</label>
                <input type="password" id="pass" name="pass" class="form-control border border-dark" required>
            </div>
            
            
            
            <div class="col-3">
                <label class="form-label">Contact</label>
                <input type="text" id="contact" name="contact" class="form-control border border-dark" required>
            </div>
            </div>
            </div>
            <div class="row ">
                <div class="row justify-content-center">
            <div class="col-3">
                <label class="form-label ">Gender</label>
                <select id="gen" name="gen" class="form-select border border-dark">
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            
            </div>
            
            
            <div class="col-3">
                <label class="form-label">User ID</label>
                <input type="number" id="id" name="id" class="form-control border border-dark" required>
            </div>
            </div>
            </div>
            
            <div class="  ">
                <button type="submit" name="sub" class="btn btn-primary ">Submit</button>
            </div>
                
        </form>
    </div>
    <div>
       
    
</body>
</html>


<?php
if (isset($_POST['sub'])) {
    $ID = $_POST['id'];
    $name = $_POST['name'];
    $father = $_POST['father'];
    $DOB = $_POST['DOB'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];
    $gen = $_POST['gen'];
    $addd = $_POST['addd'];

    $sql = "INSERT INTO sign_in (id, name, father, DOB, email,pass, contact, gen,addd) VALUES ('$ID','$name','$father','$DOB','$email','$pass','$contact','$gen','$addd')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "";
    }
}
?>
