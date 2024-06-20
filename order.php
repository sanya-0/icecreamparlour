<?php
//starts the session
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>order</title>
</head>



    <body>
        <h1>YOUR ORDERS</h1>
        <nav>
            <ul>
                <a href = "index.html"><li>Home</li></a>
                <a href = "order.php"><li>Order</li></a>
                <a href = "near.html"><li>Near</li></a>
                <a href = "about.html"><li>About</li></a>
                
    
            </ul>
        </nav>
<?php

        if(isset($_POST['signup'])){

        $id = $_POST["id"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $Pd = $_POST["Password"];
        $Pd2 = $_POST["Password2"];
        $icename = $_POST['icename'];
        $want=$_POST['want'];
        
    $sql="INSERT INTO sanya(id,username,email,Password,Password2,icename,want) VALUES ('$id','$username','$email','$Pd','$Pd2','$icename','$want')";
                if($conn->query($sql)==true)
                {
                    echo "THANK YOU";
                }
                else{
                    echo "Error :$sql <br> $conn->error";         }
            }
    ?>
</html>
    <div class="container">
        <h1>SIGNUP PAGE</h1><br>
        <form  class= "form " method="post">
            <label for="id"><b>Id: *</b></label><br><br>
            <input type="text" class="form-control" name= "id" > 
            <br>
            <label for="username"><b>UserName: *</b></label><br><br>
            <input type="text" class="form-control" name= "username" >
            <br>
            <label for="want"><b>Order Quantity: *</b></label><br><br>
            <input type="text" class="form-control" name= "want" >
            <br>
            <label for="icename"><b>Icecream Name: *</b></label><br><br>
            <input type="text" class="form-control" name= "icename" >
            <br>
            <label for="email"><b>Email: *</b></label><br><br>
            <input type="email" class="form-control" name= "email" >
            <br>
            <label for="Password"><b>Password: *</b></label><br><br>
            <input type="password" class="form-control" name= "Password" >
            <br> 
            <label for="Password2"><b>Password again: *</b></label><br><br>
            <input type="password" class="form-control" name= "Password2" >
            <br> 
            <a href="login.php">ARE YOU ALREADY A MEMBER?</a>
            <button name ="signup" class="form-control" type="submit" class="btn btn-primary">
            signup</button> 

        </form>
        </div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            
</body>
</html>