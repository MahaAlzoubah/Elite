<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
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


    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
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


    /* nav style ends here */

    /* footer style start here */
     /* footer style start here */
     footer {
            padding: 30px;
            width: auto;
            height: 200px;
            background: #15133C;
            color: white;
        }

    /* mian section  */

    /* container2 */
    .container2 {
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 150px;
        padding: 30px;
        padding: 0px 60px;
        margin-bottom: 100px;

    }

    /* container2 right image*/
    .container2-img {
        width: 100%;
        height: auto;
    }

    /* container2 left text(title, para,...etc)*/
    .container2-text {
        display: flex;
        flex-direction: column;
        width: 45%;
    }

    .imgRightBox {
        width: 40%;
    }

    .container2-P1 {
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        font-weight: 400;
        font-size: 50px;
        line-height: 100%;
        width: 354px;
    }



    .container2-P2 {
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 150%;
        margin: 30px 0px;
        letter-spacing: 0.255em;

        color: #73777B;
    }



    .container2-P3 p {
        width: 302.71px;
        height: 147.48px;
        font-weight: 400;
        font-size: 16px;
        line-height: 168%;
        color: #000000;
    }

    /* container2 left button*/
    .container2-a {
        width: 166px;
        height: 45px;
        left: 164px;
        top: 1503px;
        background: #15133C;
        border-radius: 7px;
        margin-top: 30px;
        color: white;

    }

    .container2-a a {
        text-decoration: none;
        font-size: 13px;
        color: #FFFFFF;
    }

    /* we reach here */

    /* footer style ends here */
    /* mian section  */

    /* container2 */
    .container2 {
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 150px;
        padding: 30px;
        padding: 0px 60px;
        margin-bottom: 100px;

    }

    /* container2 right image*/
    .container2-img {
        width: 100%;
        height: auto;
    }

    /* container2 left text(title, para,...etc)*/
    .container2-text {
        display: flex;
        flex-direction: column;
        width: 45%;
    }

    .imgRightBox {
        width: 40%;
    }

    .container2-P1 {
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        font-weight: 400;
        font-size: 50px;
        line-height: 100%;
        width: 354px;
    }



    .container2-P2 {
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 150%;
        margin: 30px 0px;
        letter-spacing: 0.255em;

        color: #73777B;
    }



    .container2-P3 p {
        width: 302.71px;
        height: 147.48px;
        font-weight: 400;
        font-size: 16px;
        line-height: 168%;
        color: #000000;
    }

    /* container2 left button*/
    .container2-a {
        width: 166px;
        height: 45px;
        left: 164px;
        top: 1503px;
        background: #15133C;
        border-radius: 7px;
        margin-top: 30px;
        color: white;

    }

    .container2-a a {
        text-decoration: none;
        font-size: 13px;
        color: #FFFFFF;
    }

    /* we reach here */

    /* footer style ends here */
</style>

<!-- Don't open this until we write PHP I alert you, you will scroll for rest of your life this is css code for page -->
</head>

<body>
   <!-- navbar start Open by clikcing on arrow, but keep it close for your mental health-->
   <nav>
    <img id="logo" src="meta/logo.png" alt="logo" width="100px" height="100px">
    <links>
        <a href="homePage.php">Home</a>
        <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           About Us
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="whatelite.php">What is Elite?</a></li>
          <li><a class="dropdown-item" href="priv.php">Privcy & Policy</a></li>
          <li><a class="dropdown-item" href="lic.php">License</a></li>
          <li><a class="dropdown-item" href="chang.php">Change Log</a></li>
          <li><a class="dropdown-item" href="screen.php">Screenshots</a></li>
          </ul>
       </div>
       <div class="dropdown">
        <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           Improvment
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="de-fet-req.php">Features & Requirements</a></li>
          <li><a class="dropdown-item" href="de-code.php">Code of conduct</a></li>
          <li><a class="dropdown-item" href="de-doc.php">Developer documentation</a></li>
          <li><a class="dropdown-item" href="de-guid.php">Developer guidlines</a></li>
          <li><a class="dropdown-item" href="https://discord.gg/3BpZhYgY">Message forum </a></li>
          <li><a class="dropdown-item" href="user-feed.php">Feedback</a></li>
          <li><a class="dropdown-item" href="https://github.com/MahaAlzoubah/Elite">Github repository</a></li>
          <li><a class="dropdown-item" href="https://github.com/MahaAlzoubah/Elite/issues">Issue reporting</a></li>

          </ul>
       </div>

       <div class="dropdown">
        <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           Discover
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="discover.php">Why Us?</a></li>
          <li><a class="dropdown-item" href="user-annouc.php">Annoucment</a></li>
          <li><a class="dropdown-item" href="user-feed.php">Feedback</a></li>
          <li><a class="dropdown-item" href="https://github.com/MahaAlzoubah/Elite/issues">Issue reporting</a></li>

          </ul>
       </div>

       <button style=" margin-left: 30px; color:white; background-color: transparent; border:none" onclick="window.location.href='download.php?file=Elite.zip';">Download</button>


     <?php
     if (!empty($_GET['file']))
     {
     $filename=basename($_GET['file']);
     $filepath= './'. $filename;
     if(!empty($filename) && file_exists($filepath)){

       //define headers
       header("cache-control: public");
       header("content-description: File Transfer");
       header("Content-Disposition: attachment; filename=$filename");
       header('Content-Type: application/octet-stream');
       header('Content-Length: ' . filesize($filepath));
       header("Content-Transfer-Encoding: binary");

       ob_clean(); // Clean (erase) the output buffer
       flush();    // Flush system output buffer
       readfile($filepath);
       exit;

     }
     else{
       echo "This File Does not exist.";
     }
     }
     ?>
    </links>

</nav>

<!-- navbar end -->
    <!-- navbar end -->

    <!---------------------------- main start here ---------------------------->
    <main>
        <!--start container2-->
        <div class="container2">

            <!--left text(title, para,...etc)-->
            <div class="container2-text">
                <p class="container2-P1">Features and Requirements</p>

                <p class="container2-P2">Features</p>


                <p class="container2-P3">
                    <ol>
                        <li>User-Friendly Booking Platform: - Provide a user-friendly interface that makes booking simple and easy to navigate.</li>
                        <li>Selection of Exquisite Hotels and Resorts: Offer a carefully selected range of upscale residences that are known for their opulence and grandeur. </li>
                        <li>Elegant and Stylish Booking Procedure: - Make sure each stage of the booking procedure exudes elegance and sophistication.</li>
                        <li>Personalized Guest Experience: - Customize offers and suggestions to each visitor's particular tastes and needs.</li>
                        <li>Transparent Pricing and Policies: - Give customers access to precise pricing details as well as explicit guidelines about bookings, refunds, and extra services.</li>
                        <li>Secure and Reliable Booking Platform: - Adhere to industry standards for data protection and implement strong encryption mechanisms.</li>
                        <li>available Customer Support: - Provide easily available methods for guests to voice questions, grievances, and special requests in a timely manner.</li>
                    </ol>
                </p>

                <p class="container2-P2">Requirements</p>


                <p class="container2-P3">
                    <ol>
                        <li>XAMPP Installation Required: Install XAMPP to set up the necessary server environment for hosting the web application. <a href="https://www.apachefriends.org/download.html">Download from here</a></li><br/>
                        <li>Choice of Text Editor: You may choose any preferred text editor for coding and development purposes. (For instance, Visual Studio Code is recommended.)<a href="https://code.visualstudio.com/download">Download from here</a></li><br/>
                        <li>	Bootstrap v5.3 Integration Necessary: Bootstrap v5.3 must be integrated into the project as the CSS Framework to ensure consistent styling and layout across the website. <a href="https://getbootstrap.com/">Discover</a> </li><br/>
                    </ol>
                </p>
                <!-- <button class="container2-a">Discover all Rooms</button> -->
            </div>
            <!--right image-->
            <div class="imgRightBox">
                <img src="img/container2.png" alt="" class="container2-img">
                <img src="img/container2.png" alt="" class="container2-img">

            </div>

        </div>
        <!--end container2-->

    </main>

    <!---------------------------- Your Code end is here ---------------------------->
    <!-- footer code start here -->
    <footer>
        <column>
            <!--column 1 width="20%"-->
            <img class="logoFooter" src="meta/logo.png" alt="logo" width="90px" height="90px">
            <p>The best collaboration application </p>
        </column>

    </footer>
    <!-- ends of footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
