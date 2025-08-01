<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>

</head>

<body class="body">

    <style>
        * {
            margin: 0;
            padding: 0;

        }

        body {
            background: url("images/carbg2.jpg");
            background-position: center;
            background-size: cover;
        }

        .navbar {
            width: 1200px;
            height: 75px;
            margin: auto;
        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .logo {
            color: #ff7200;
            font-size: 35px;
            font-family: Arial;
            padding-left: 20px;
            float: left;
            padding-top: 10px;

        }

        .menu {
            width: 400px;
            float: left;
            height: 70px;

        }

        ul {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;

        }

        ul li a {
            text-decoration: none;
            color: black;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;

        }

        ul li a:hover {
            color: orange;

        }

        .box {

            position: center;
            top: 50%;
            left: 50%;
            padding: 20px;
            box-sizing: border-box;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%, rgba(250, 246, 246, 0.8)50%);
            display: flex;
            align-content: center;
            width: 600px;
            height: 200px;
            margin-top: 100px;
            margin-left: 350px;
        }

        .box .imgBx {
            width: 150px;
            flex: 0 0 150px;
        }

        .box .imgBx img {
            max-width: 150%;
        }

        .box .content {
            padding-left: 100px;
        }

        .box .button {
            width: 240px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-top: 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.4s ease;
        }

        .utton {
            width: 240px;
            height: 40px;

            background: #ff7200;
            border: none;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.4s ease;
        }




        .de {
            float: left;
            clear: left;
            display: block;



        }


        .de li a:hover {
            color: black;

        }

        .de .lis:hover {
            color: white;
        }


        .nn {
            width: 100px;
            border: none;
            height: 40px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: white;
            transition: 0.4s ease;

        }


        .nn a {
            text-decoration: none;
            color: black;
            font-weight: bold;

        }

        .overview {
            text-align: center;

            margin-top: 40px;
        }

        .circle {
            border-radius: 48%;
            width: 65px;
        }

        .phello {
            width: 200px;
            margin-left: -50px;
            padding: 0px;
        }

        #stat {
            margin-left: -8px;
        }
    </style>


<?php
    require_once('connection.php');
    session_start();

    // Assign the value from session to $value
    $value = $_SESSION['email'];

    $sql = "SELECT * FROM members WHERE email='$value'";
    $name = mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($name);
    $sql2 = "SELECT * FROM cars WHERE AVAILABLE='Y'";
    $cars = mysqli_query($con, $sql2);

    // echo "Redirected email: " . $value . "<br>";
?>

    </script>
    <div class="cd">
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2>&nbsp;</h2>
                <h2 class="logo">RentMyCars</h2>
                </div>
                <!-- <h2 >&nbsp;</h2> -->
                <div class="menu">

                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="aboutus2.html">ABOUT</a></li>

                        <li><a href="contactus2.html">CONTACT</a></li>
                        <li><a href="feedback/Feedbacks.php">FEEDBACK</a></li>
                        <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
                        <li><img src="images/profile.png" class="circle" alt="Alps"></li>
                        <li>
                         <a href="profile.php">   <p class="phello">HELLO! &nbsp;<a  href="profile.php" id="pname"><?php echo $rows['Username']?></a></p>
                        </li>
                        <li><a id="stat" href="bookinstatus.php">BOOKING STATUS</a></li>
                    </ul>
                </div>


            </div>
            <div>
                <h1 class="overview">OUR CARS OVERVIEW</h1>

                <ul class="de">
                    <?php
                    while ($result = mysqli_fetch_array($cars)) {
                        // echo $result['CAR_ID'];
                        // echo $result['AVAILABLE'];

                    ?>

                        <li>
                            <form method="POST">
                                <div class="box">
                                    <div class="imgBx">
                                        <img src="images/<?php echo $result['CAR_IMG'] ?>">
                                    </div>
                                    <div class="content">
                                        <?php $res = $result['CAR_ID']; ?>
                                        <h1><?php echo $result['CAR_NAME'] ?></h1>
                                        <h2>Fuel Type : <a><?php echo $result['FUEL_TYPE'] ?></a> </h2>
                                        <h2>CAPACITY : <a><?php echo $result['CAPACITY'] ?></a> </h2>
                                        <h2>Rent Per Day : <a>₹<?php echo $result['PRICE'] ?>/-</a></h2>
                                        <button type="submit" name="booknow" class="utton" style="margin-top: 5px;"><a href="booking.php?id=<?php echo $res; ?>">book</a></button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    <?php
                    }

                    ?>
                    <?php
                    require_once('connection.php');


                    $value = $_SESSION['email'];

                    $sql = "select * from members where email='$value'";
                    $name = mysqli_query($con, $sql);
                    $rows = mysqli_fetch_assoc($name);
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>