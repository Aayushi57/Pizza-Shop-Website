<?php
session_start();
include("coon.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password= $_POST["password"];
}
if(!empty($email) && !empty($password) && !is_numeric($email))
{
    $query = "insert into signup_table (name, email, password) values ('$name', '$email', '$password')";
    mysqli_query($con, $query);
    echo "<script type'text/javascript'> alert('Successfully register')</script>";
}
else
{
    echo "<script type'text/javascript'> alert('Please enter some valid information')</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <title>signup</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
    font-family: 'Poppins', sans serif;
}
body{
    background-image: url("pics/table-with-cutting-board-bread-with-oil.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
}
.container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
}
header{
    color: #fff;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}
.input-field{
    display: flex;
    flex-direction: column;
    margin-top: 10%;
}
.input-field .input{
    height: 45px;
    width: 87%;
    border: none;
    outline: none;
    border-radius: 30px;
    color: #fff;
    padding: 0 0 0 42px;
    background: rgba(255,255,255,0.1);
}
i{
    position: relative;
    top: -31px;
    left: 17px;
    color: #fff;
}
::-webkit-input-placeholder{
    color: #fff;
}
.submit{
    border: none;
    border-radius: 40px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    background: rgba(255,255,255,0.7);
    cursor: pointer;
    transition: .3s;
}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: small;
    color: #fff;
    margin-top: 10px;
}
.left{
    display: flex;
    text-align: center;
}
label a{
    color: cornflowerblue;
    text-decoration: none;
    
}
label a:hover{
    color: rgb(243, 246, 250);
}
</style>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Sign up</header>
            </div>
            <form action="" method="POST">
            <div class="input-field">
                <input type="text"name="name" class="input" placeholder="Name" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="email" name="email" class="input" placeholder="Email" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="password" name="password" class="input" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" name="submit" class="submit" value="Sign up">
            </div>
            <div class="bottom">
                <div class="left">
                    <label>Already have an account</label>
                </div>
                <div class="right">
                    <label><a href="login.php">Log in</a></label>
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>