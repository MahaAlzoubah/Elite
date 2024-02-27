<?php
session_start();
if (!isset($_SESSION['active']))
    header("location:SignUp.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="findPassion.css">
    <title>find your passion</title>
    <style>
        html {
            height: 100% !important;
        }

        * {
            padding: 0px;
            margin: 0px;
            font-family: 'Roboto';
            font-size: 15px;
            line-height: 150%;
            box-sizing: border-box;

        }

        burgerIcon {
            display: none;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }



        burger {
            display: none;
        }

        /* nav style start here */
        nav {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: auto;
            height: 90px;
            background-color: #15133C;
            align-items: center;

        }

        nav form {
            display: flex;
            align-items: center;
            width: 30%;
        }

        nav form input {
            padding: 10px;
            width: 20%;
            font-size: 13px;
            border-radius: 7px;
            border: none;
        }

        nav form input[type="submit"] {
            color: white;
            background-color: #2F414B;
            font-weight: 500px;
        }

        nav form input[type="search"] {
            width: 70%;
            margin-right: 10px;
        }

        nav img {
            width: 5%;

        }

        links {
            margin-right: auto;
            margin-left: 20px;
            display: flex;
            width: 50%;
            justify-content: left;
            align-items: center;
        }

        links a {
            text-decoration: none;
            color: white;
            margin-left: 40px;
            font-size: 13px;
            line-height: 150%;
        }

        /* nav style ends here */

        /* footer style start here */
        footer {
            display: flex;
            justify-content: space-between;
            padding: 30px;
            width: auto;
            height: 400px;
            background-color: #15133C;
            color: white;
            margin-top: auto;
        }

        footer column {
            width: 20%;
            display: flex;
            flex-direction: column;
        }

        footer h3 {
            margin-top: 20%;
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 19px;
            letter-spacing: 0.1em;
            text-transform: capitalize;
        }

        a.captions-links {
            margin-top: 10px;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 163.15%;
            color: #BBC8D4;
            text-decoration: none;
        }

        footer column.big {
            width: 40%;
            margin-bottom: 50px;
        }


        footer column.big form {
            margin-top: 50px;
        }

        footer column.big form input[type="email"] {
            width: 80%;
            background: #FFFFFF;
            border: 2px solid #BBC8D4;
            border-radius: 17px;
            padding: 10px;
        }

        column:nth-of-type(1) img {
            width: 50px;
            margin-top: 35px;
        }

        column p {
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 163.15%;
            color: #BBC8D4;
            max-width: 199px;
            margin-top: 20px;
        }

        footer media {
            margin-top: 20px;
        }

        footer column.big h3 {
            margin-top: 44px;
        }

        footer media img {
            margin-right: 5px;
        }

        /* mian section  */
        main {
            position: relative;
            width: 100%;
            height: auto;
            margin: 0px;
            background-color: lightgray;
        }

        main img {
            width: 100%;
        }

        container {
            margin: 0px;
            width: 100%;
            height: auto;
            background-color: lightgray;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 30px;
        }



        blockImg img {
            border-radius: 15px 15px 0px 0px;
        }

        .cd {
            width: 30%;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            box-shadow: 5px 4px 15px rgba(0, 0, 0, 0.18);
            border-radius: 19px;
            margin-top: 30px;

        }

        detailsBlock {
            padding: 10px 20px 20px 20px;
            display: flex;
            flex-direction: column;

        }

        detailsBlock p {
            margin-top: 10px;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 160%;
        }

        .cd rate {
            margin-top: 10px;
        }

        .cd rate img {
            width: 20px;


        }

        detailsBlock h2 {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 150%;
            text-transform: capitalize;
            color: #000000;
        }


        detailsBlock price {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
        }

        detailsBlock button {
            background: #15133C;
            border-radius: 7px;
            width: 199px;
            color: white;
            margin-top: 10px;
            padding: 10px;
        }

        /* we reach here */
        main h1 {
            position: absolute;
            left: 27%;
            top: 14%;
            display: inline-block;
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 80px;
            width: 600px;
            line-height: 115.5%;
            text-align: center;
            color: #FFFFFF;
        }





        /* footer style ends here */


        /* media quries for tablet */
        @media (max-width: 1024px) {
            .cd {
                width: 45%;
            }

            /* nav start tablet*/
            nav {
                padding: 20px;
            }

            links a {
                font-size: 12px;
                margin-left: 20px;
            }

            nav form input {
                padding: 8px;
                font-size: 12px;
            }

            /* nav end tablet*/
            /* main code starts here */

            main h1 {
                position: absolute;
                left: 10%;
                top: 7%;
                display: inline-block;
                font-family: 'Times New Roman', Times, serif;
                font-style: normal;
                font-weight: 400;
                font-size: 60px;
                width: 500px;
                line-height: 115.5%;
                text-align: center;
                color: #FFFFFF;
            }


            /*footer start tablet*/
            footer {
                padding: 20px;
            }

            footer h3 {
                font-size: 13px;
            }

            footer p {
                font-size: 12px;
            }

            a.captions-links {
                font-size: 13px;
            }

            column:nth-of-type(1) p {

                font-size: 13px;

            }

            footer column.big form input[type="email"] {

                padding: 8px;
            }

            /*footer ends tablet*/
            div.content p {
                margin-top: 40px;
            }

            .price {
                margin-top: 30px;
            }




        }

        /* media quries between tablet and phone */
        @media (max-width: 750px) {


            .cd {
                width: 45%;
            }

            /* nav start between tablet and phone*/
            nav {
                padding: 10px;
            }

            links a {
                margin-left: 10px;
                font-size: 9px;
            }

            nav form input {
                padding: 6px;
                font-size: 10px;
            }

            /* nav end between tablet and phone*/

            main h1 {
                position: absolute;
                left: 17%;
                top: 4%;
                display: inline-block;
                font-family: 'Times New Roman', Times, serif;
                font-style: normal;
                font-weight: 400;
                font-size: 50px;
                width: 400px;
                line-height: 115.5%;
                text-align: center;
                color: #FFFFFF;
            }

            /* footer start between tablet and phone*/
            footer {
                padding: 10px;
                height: 280px;
            }

            footer h3 {
                font-size: 10px;
                margin-top: 10px;
            }

            footer p {
                font-size: 12px;
            }

            footer column.big h3 {
                margin-top: 10px;
            }

            a.captions-links {
                font-size: 10px;
            }

            column:nth-of-type(1) p {

                font-size: 10px;
            }

            footer column img.logoFooter {
                margin-top: 10px;
            }

            /* footer ends between tablet and phone*/
        }

        /* media quries for phone */
        @media (max-width: 550px) {

            container {
                flex-direction: column;
                align-items: center;
                justify-content: none;
            }

            .cd {
                width: 100%;
            }

            /* nav phone start*/
            links {
                display: none;
            }

            burgerIcon {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30%;

            }

            nav img {
                width: 20%;
            }

            burgerIcon img {
                width: 40%;
            }

            nav form {
                display: none;
            }

            burger {
                display: flex;
                text-align: center;
                justify-content: center;
                background-color: #15133C;

            }

            burger a {
                text-decoration: none;
                color: white;

            }

            burger ul {
                display: block;
                width: 100%;
            }

            burger ul li {
                list-style-type: none;
                padding: 10px;
                display: block;
                border: 1px solid white;
                width: 100%;

            }

            burger form {
                display: flex;
                justify-content: center;
            }

            burger form input {
                padding: 10px;
                width: 20%;
                font-size: 12px;
                border-radius: 7px;
                border: none;
            }

            burger form input[type="submit"] {
                color: white;
                background-color: #2F414B;
                font-weight: 500px;
            }

            burger form input[type="search"] {
                width: 60%;
                margin-right: 10px;
            }

            burger {
                display: none;
            }

            /* nav phone ends*/

            main h1 {
                position: absolute;
                left: 10%;
                top: 3%;
                display: inline-block;
                font-family: 'Times New Roman', Times, serif;
                font-style: normal;
                font-weight: 400px;
                font-size: 40px;
                width: 300px;
                line-height: 115.5%;
                text-align: center;
                color: #FFFFFF;
            }

            /* footer phone start*/
            footer {

                flex-direction: column;
                align-items: center;
                padding: 10px;
                width: auto;
                height: auto;
                background-color: #15133C;
                color: white;
                margin-top: auto;
            }

            footer column {
                text-align: center;
                align-items: center;
                flex-direction: column;
                margin-top: 50px;
                width: 100%;
            }

            footer column.big {
                width: 100%;
            }

            footer column.big form {
                margin-top: 20px;
                width: 100%;
            }


            footer input[type="email"] {
                width: 100%;

            }

            /* footer phone ends*/
        }
    </style>

    <!-- Don't open this until we write PHP I alert you, you will scroll for rest of your life this is css code for page -->
</head>

<body>
    <!-- navbar start Open by clikcing on arrow, but keep it close for your mental health-->
    <nav>
        <img id="logo" src="meta/Logo.svg" alt="logo" width="50px" height="50px">
        <links>
            <a href="homePage.php">Home</a>
            <a href="userInfo.php">Profile</a>
            <a href="aboutUs.php">About Us</a>
            <a href="Login.php">Login</a>
            <a href="SignUp.php">Sign Up</a>
            <a href="addItem.php">Add Room</a>
            <a href="showDetails.php">Show users</a>
        </links>
        <form action="https://www.google.com">
            <input type="search" placeholder="Search for room name,place..." name="search">
            <input type="submit" value="Search" name="search_btm">
        </form>
        <burgerIcon>
            <img src="meta/burgerIcon.svg" alt="burger">
        </burgerIcon>
    </nav>
    <burger>
        <!-- burger menu  -->
        <ul>
            <li><a href="homePage.php">Home</a></li>
            <li><a href="userInfo.php">Profile</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="SignUp.php">Sign Up</a></li>
            <li> <a href="aboutUs.php">About Us</a> </li>
            <li> <a href="addItem.php">Add Room</a></li>
            <li><a href="showDetails.php">Show users</a></li>
            <li>
                <form action="https://www.google.com">
                    <input type="search" placeholder="Search for room name,place..." name="search">
                    <input type="submit" value="Search" name="search_btm">
                </form>
            </li>
        </ul>
    </burger>
    <!-- navbar end -->

    <!---------------------------- main start here ---------------------------->
    <main>
        <img src="meta/findPassionPicture.jpg" alt="image of bed">
        <h1>Find Your Passion With Our Rooms</h1>

        <container>
            <?php

            try {
                require("connect.php");
                $r = $db->query("SELECT * FROM room");


                foreach ($r as $row) {
            ?>
                    <!-- card 1 -->
                    <form class="cd" method="POST" action="Product.php?id=<?php echo $row[0]; ?>">
                        <blockImg>
                            <img class="card-img" src="roomImges/<?php echo $row[5]; ?>">
                        </blockImg>
                        <detailsBlock>
                            <h2><?php echo $row[1]; ?></h2>
                            <p><?php echo $row[2]; ?></p>
                            <price><?php echo $row[3]; ?>$ Per Night </price>
                            <rate>
                                <?php for ($i = 0; $i < round($row[4]); $i++) { ?>
                                    <img src="star.svg" alt="start-rate">
                                <?php } ?>
                            </rate>
                            <button type="submit">Book Now</button>
                        </detailsBlock>
                    </form>

            <?php
                }
                $db = null;
            } catch (PDOException $e) {
                die("error: " . $e->getMessage());
            }

            ?>

        </container>
    </main>

    <!---------------------------- Your Code end is here ---------------------------->
    <!-- footer code start here -->
    <footer>
        <column>
            <!--column 1 width="20%"-->
            <img class="logoFooter" src="meta/Logo.svg">
            <p>The best collaboration application </p>
        </column>
        <column>
            <!--column 2 width="20%"-->
            <h3>Features</h3>
            <a href="#page" class="captions-links">Sharing</a>
            <a href="#page" class="captions-links">IOS & androide</a>
            <a href="#page" class="captions-links">File Sharing</a>
            <a href="#page" class="captions-links">Video Call</a>
        </column>
        <column>
            <!--column 3 width="20%"-->
            <h3>Company</h3>
            <a href="#page" class="captions-links">Careers</a>
            <a href="#page" class="captions-links">Departments</a>
            <a href="#page" class="captions-links">Contact Us</a>
        </column> <!-- end of col 3-->
        <column class="big">
            <!--column 4 width="40%"-->
            <h3>Stay Up To Date</h3>
            <p>Subsecribe for new upadates</p>
            <form class="footerEmail">
                <input type="email" placeholder="Email">
            </form>
            <media>
                <img src="meta/media/twitter.svg">
                <!--onClick event must be insert-->
                <img src="meta/media/linkedIn.svg">
                <img src="meta/media/instagram.svg">
                <img src="meta/media/google.svg">
            </media>
        </column><!-- end of col 4-->
    </footer>
    <!-- ends of footer -->


    <!--java script code for burger menu-->
    <script>
        const burgerIcon = document.querySelector("nav burgerIcon");
        const burgerMenu = document.querySelector("burger");
        burgerIcon.addEventListener("click", () => {
            if (burgerMenu.style.display == "none")
                burgerMenu.style.display = "flex";
            else
                burgerMenu.style.display = "none";

        });
    </script>

</body>

</html>