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
    
    <style>
        body {
            background-image:url(f11.jpg) ;
            background-color:rgb(225,200,255) ;
            color: white;
        }
        .container {
            background-color: rgba(71, 71, 71, 0.89); 
            border-radius: 10px;
            padding: 90px;
            margin-top: 13%;
            text-decoration: solid;
        }
        .text1{
            
            padding-left:30px ;
            margin-right: 30px;
            text-align: center;

        }
        td{
            text-align: left;
            padding-top: 15px;
            padding-left: 50px;
            
        }
    </style>
    <title>Display Data</title>
</head>
<body>
    <div class="container">
        <h2>Display Data</h2>
        <table >
            <thead>
                <tr>
                    <th class="text1">Name</th>
                    <th class="text1">Father Name</th>
                    <th class="text1">Date of Birth</th>
                    <th class="text1">Email</th>
                    <th class="text1">Contact Number</th>
                </tr>
            </thead>
            <tbody class="tbody" >
                <?php
                $result = mysqli_query($conn, "SELECT * FROM sign_in");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['father']}</td>";
                    echo "<td>{$row['DOB']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['contact']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
