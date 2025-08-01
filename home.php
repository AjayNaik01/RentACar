<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Welcome | Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    form {
      background-color: #4654e1;
      margin-top: 40px;
      margin-left: 40px;
      width: 300px;
      height: 44px;
      border-radius: 5px;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    input {
      all: unset;
      font: 16px system-ui;
      color: #fff;
      height: 100%;
      width: 100%;
      padding: 6px 10px;
    }

    ::placeholder {
      color: #fff;
      opacity: 0.7;
    }

    svg {
      color: #fff;
      fill: currentColor;
      width: 45px;
      height: 40px;
      padding: 10px;
    }

    button {
      all: unset;
      cursor: pointer;
      width: 44px;
      height: 44px;
    }

    nav {
      padding-left: 00px !important;
      padding-right: 100px !important;
      background: #6665ee;
      font-family: 'Poppins', sans-serif;
    }

    nav a.navbar-brand {
      color: #fff;
      font-size: 30px !important;
      font-weight:700;
    }

    button a {
      color: #6665ee;
      font-weight: 500;
    }

    button a:hover {
      text-decoration: none;
    }

    h1 {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      text-align: center;
      transform: translate(-50%, -50%);
      font-size: 50px;
      font-weight: 600;
    }

    .small-link {
      font-size: 16px;
      color: #fff;
      
    }
    .round-image {
            border-radius: 80%;
        }
        

  </style>
</head>

<body>
  <nav class="navbar">
  <img src="images\th.jpg"  class="round-image" alt="logo" width=60 height="60">
    <a class="navbar-brand" href="#">RentACars</a>
    <a class="small-link" href="#">HOME</a>
    <a class="small-link" href="#">ABOUT</a>
    <a class="small-link" href="#">CONTACT</a>
    <a class="small-link" href="#">FEEDBACK</a>
    <button type="button" class="btn btn-light" style="width: 60px; height:20px;"><a href="login.php">Logout</a></button>
    <button type="button" class="btn btn-light" style="width: 60px; height:20px;"><a href="admin_login.php">ADMIN</a></button>
   
  </nav>

</body>

</html>