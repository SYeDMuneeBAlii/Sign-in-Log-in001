<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Sign In Form</title>
    <style>
        body {
            background: url(f9.jpg) no-repeat center center fixed;
            background-size: cover;
            font-size: large;
            font-weight: bold;
        }
        .container {
            background-color: rgba(170, 169, 169, 0.767); 
            border-radius: 10px;
            padding: 20px;
            margin-top: 20%;
            text-decoration: solid;
            
        }
        .nav{
            color: black;
        }
    </style>
</head>
<body>
  
<ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="./display.php">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="./login.php">LOG-IN</a>
        </li>
      </ul>
      </body> -->
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Contact Us</title>
    <style>
        body {
            background: url(f9.jpg) no-repeat center center fixed;
            background-size: cover;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            background-color: rgba(226, 164, 200, 0.582); 
            border-radius: 10px;
            padding: 20px;
            margin-top: 10%;
        }
        .nav {
            color: black;
        }
    </style>
</head>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="./display.php">Form</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="./login.php">LOG-IN</a>
        </li>
    </ul>

    <!-- Contact Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Contact Us</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="container mb-5">
        <div class="row ">
            <div class="col-md-6 offset-md-3 text-center ">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com/profile.php?id=100009770469645" class="btn btn-outline-primary mr-2 font-weight-bold" target="_blank">Facebook</a>
                <a href="https://www.instagram.com/sy3dmun33bali/" class="btn btn-outline-info mr-2 font-weight-bold" target="_blank">Twitter</a>
                <a href="https://www.instagram.com/your-instagram-account" class="btn btn-outline-danger mr-2 font-weight-bold" target="_blank">Instagram</a>
                <!-- Add more social media links as needed -->
            </div>
        </div>
    </div>
</body>
</html>
