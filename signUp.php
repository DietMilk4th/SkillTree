<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <style>
        body{
            background-color: black;
        }

        .info::placeholder{
            color: white;
        }
        #first::placeholder{
            color: black;
        }

        .button{
    background: blue;
    color: white;
    font-weight: bold;
    font-size: medium;
    margin: 10px auto;
    align-self: center;
    width: 50%;
    border: none;
    height: 40px;
    text-decoration: none;
    font-size: 1.2rem;
    transform: skew(-25deg);
    
}

    .button:hover{
    background: rgb(0, 149, 255);
    cursor:pointer;
    border:1px solid black;
    }
    </style>
</head>
<body>
     <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,101.3C384,107,480,181,576,229.3C672,277,768,299,864,288C960,277,1056,235,1152,218.7C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

    <div class="centered">

    <form action method="post">
        <h2 style="text-align: center;">Sign Up</h2>
        
        <input class="info" type="text" name="Username" placeholder="Username" id="first"> <br>
        
        <input class="info" type="email" name="email" placeholder="Email"> <br>
        
        <input class="info" type="password" name="password" id="PW" placeholder="Enter Your Password"> <br>
        <input class="info" type="password" name="Repassword" id="RPW" placeholder="Renter Your Password"> <br>

        <input class="button" type="submit" name="signUpBtn" value="Sign Up"  >
    </form>
</div>


</body>
</html>


<?php 
$username="";
$email="";
$password="";
$rePassword="";

$errors=array();

if(isset($_POST['signUpBtn'])){
    $username=$_POST['Username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rePassword=$_POST['Repassword'];

    if (empty($username)){
        $errors['username']="Username Required";
    }

    if (empty($email)){
        $errors['email']="Email Required";
    }

    if (empty($password)){
        $errors['password']="Password Required";
    }

    if($rePassword!==$password){
        $errors['confPass']="Passwords Do Not Match";
    }

    if(!empty($errors)){
        echo '<div class="alert-errors"> <p class="error-text">Errors!</p>';
        foreach($errors as $error){
            echo "<li>" . $error . "</li>";

        }
        echo "</div>";
    }

    elseif(count($errors)===0){
        header("Location: index.html");
        exit;
    }
}
?>

