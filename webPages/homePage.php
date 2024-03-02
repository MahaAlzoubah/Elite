
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Luxury Rooms&Hotels</title>
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

        .centerBox-modified {
            display: none;
        }



        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: lightgray;
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

        /* main section style start here */
        main {
            width: 100%;
            height: auto;
        }

        /* container1 */
        .container1 {
            width: 100%;
            min-height: 900px;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 62.29%, rgba(0, 0, 0, 0) 100%), url(img/div1bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;

            align-items: center;

            position: relative;
        }

        /* center title */
        .p1 {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            text-align: center;
            color: #FFFFFF;
            padding: 0px 200px;
        }

        /* big center title */
        .p2 {
            width: 700px;
            font-family: 'Times New Roman', Times, serif;
            height: 276px;
            font-weight: 400;
            font-size: 70px;
            text-align: center;
            color: #FFFFFF;
            margin-top: 20px;
        }



        .orangelB {
            width: 262px;
            margin-top: 30px;
            height: 59px;
            border: none;
            color: white;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 150%;
            border-radius: 7px;
            background: #FF9129;
        }

        /* center box */
        .centerBox {
            position: absolute;
            width: 936px;
            height: 202px;
            background: #FFFFFF;
            border-radius: 5px;
            display: flex;
            transform: translate(-50%, -50%);
            top: 100%;
            left: 50%;
        }

        /* left white box (inside center box) */
        .leftWhiteBox {
            width: 75%;
            height: 100%;
            border-radius: 5px 0px 0px 5px;
            background: #F2F2F2;
            display: flex;
            justify-content: space-around;
        }

        /* left part */
        .RI {
            border-right: 1px solid #15133C;
            padding-right: 60px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* right part */
        .LE {
            border-left: 1px solid #15133C;
            padding-left: 60px;
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
        }

        .rate {
            padding-top: 7px;
        }

        .star-img {
            padding-bottom: 2px;
        }

        /* center part */
        .CE {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* text inside all parts */
        .leftWhiteBox-divs p {
            text-align: center;
        }



        .one {
            margin-top: 20px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 150%;
            text-align: center;
            color: #000000;
        }

        .two {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 150%;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .rate-number {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 100%;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 6px;
            color: #0B1B25;
        }

        .three {
            font-size: 12px;
            line-height: 100%;
        }

        /* right yellow box (inside center box) */
        .rightYellowBox {
            width: 25%;
            height: 100%;
            background: #FFC800;
            border-radius: 0px 5px 5px 0px;
        }

        .rightYellowBox p {
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 100%;
            /* or 48px */
        }

        /* text inside yellow part */
        .rightYellowBox p {
            width: 30%;
            height: 104px;
            font-weight: 400;
            font-size: 48px;
            line-height: 100%;
            padding-top: 50px;
            padding-left: 60px;
            text-align: center;
            color: #000000;
        }



        /* container2 */


        .container3 {
            position: relative;
            width: 100%;
            min-height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: lightgray;
            margin-top: 200px;

        }

        .top {
            position: absolute;
            top: -100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 100%;
            margin-bottom: 30px;
            background-color: inherit;

        }

        .p3 {
            /* Luxuirous */
            width: 100%;
            height: auto;
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 150%;
            margin-top: 20px;

            display: block;
            align-items: center;
            text-align: center;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #73777B;
        }

        .p4 {
            /* Best Rooms */
            width: 100%;
            height: auto;
            font-family: 'Times New Roman', Times, serif;
            font-style: normal;
            font-weight: 600;
            font-size: 38px;
            line-height: 150%;
            /* or 36px */
            text-align: center;
            color: #000000;
        }
    
        .orange2 {
            width: 262px;
            height: 59px;
            left: 591px;
            top: 609px;
            margin: 20px 0px;
            background: #FF9129;
            border-radius: 7px;
            border: none;
            color: white;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 150%;
        }


     
        /* main section style ends here */

        /* footer style start here */
        footer {
            padding: 30px;
            width: auto;
            height: 200px;
            background: #15133C;
            color: white;
        }

       
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
              <li><a class="dropdown-item" href="whatelite.html">What is Elite?</a></li>
              <li><a class="dropdown-item" href="priv.html">Privcy & Policy</a></li>
              <li><a class="dropdown-item" href="lic.html">License</a></li>
              <li><a class="dropdown-item" href="chang.html">Change Log</a></li>
              <li><a class="dropdown-item" href="screen.html">Screenshots</a></li>
              </ul>
           </div>
           <div class="dropdown">
            <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               Improvment
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="de-fet-req.html">Features & Requirements</a></li>
              <li><a class="dropdown-item" href="de-code.html">Code of conduct</a></li>
              <li><a class="dropdown-item" href="de-doc.html">Developer documentation</a></li>
              <li><a class="dropdown-item" href="de-guid.html">Developer guidlines</a></li>
              <li><a class="dropdown-item" href="https://discord.gg/3BpZhYgY">Message forum </a></li>
              <li><a class="dropdown-item" href="user-feed.php">Feedback</a></li>
              <li><a class="dropdown-item" href="https://github.com/MahaAlzoubah/Elite/issues">Issue reporting</a></li>

              </ul>
           </div>

           <div class="dropdown">
            <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               Discover
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="discover.html">Why Us?</a></li>
              <li><a class="dropdown-item" href="user-annouc.html">Annoucment</a></li>
              <li><a class="dropdown-item" href="user-feed.php">Feedback</a></li>
              <li><a class="dropdown-item" href="https://github.com/MahaAlzoubah/Elite/issues">Issue reporting</a></li>

              </ul>
           </div>

        </links>
  
    </nav>
   
    <!-- navbar end -->

    <!---------------------------- Your Code is here ---------------------------->
    <!--make 4 container inside one main-->
    <main>
        <!--start container1-->
        <div class="container1">
            <!--center title-->
            <p class="p2">Elite</p>

            <!--big center title-->
            <p class="p1">Elite is a newly launched website for booking a luxurious hotel room, developed as Free and Open-Source Software. Our goal is to serve individuals who are looking for the ultimate in luxury travel experiences by offering a simple and easy-to-use booking platform. Our dedication is in our selection of exceptional hotels and resorts that provide guests with an unmatched degree of magnificence and luxury. Elite aims to be the preferred option for people looking for a classy and elegant stay, providing our wealthy guests with an easy and elegant reservation experience.</p></p>
            <button class="orangelB" onclick="window.location.href='download.php?file=Elite.zip';">Download</button>


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
            <!--center button-->

            <!--start center box-->
            <div class="centerBox">
                <!--start left white box (inside center box)-->
                <div class="leftWhiteBox">
                    <!--divided the white part into 3 div-->
                    <!--left part-->
                    <div class="leftWhiteBox-divs RI">
                        <p class="one">CUSTOMES</p>
                        <p class="two">+300</p>
                        <p class="three">Happy Customers</p>
                    </div>
                    <!--center part-->
                    <div class="leftWhiteBox-divs CE">
                        <p class="one">ROOMS</p>
                        <p class="two">+2500</p>
                        <p class="three">Room Avalilable</p>
                    </div>
                    <!--right part-->
                    <div class="leftWhiteBox-divs LE">
                        <div>
                            <p class="one">RATES</p>
                        </div>
                        <div class="rate">
                            <p style='font-size:45px' class="rate-number">4.6</p>
                        </div>
                        <!--stars rate-->
                        <div class="star-img">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                            <img src="img/star.png" alt="">
                        </div>
                        <div>
                            <p class="three">Over 200 Rateings</p>
                        </div>
                    </div>
                </div>
                <!--end left white box (inside center box)-->
                <!--start right yellow box (inside center box)-->
                <div class="rightYellowBox">
                    <p>Until Now</p>
                </div>
                <!--end right yellow box (inside center box)-->
            </div>
            <!--end center box-->
        </div>
        <!--end container1-->

        <div class="centerBox-modified">
            <p class="p1-m">CUSTOMES</p>
            <p class="p2-m">+300</p>
            <p class="p3-m">Happy Customers</p>
            <div class="line2"></div>
            <p class="p1-m">ROOMS</p>
            <p class="p2-m">+2500</p>
            <p class="p3-m">Room Available</p>
            <div class="line2"></div>
            <p class="p1-m">RATES</p>
            <p class="number-m">4.6</p>
            <div class="star-img">
                <img src="img/star.png" alt="">
                <img src="img/star.png" alt="">
                <img src="img/star.png" alt="">
                <img src="img/star.png" alt="">
                <img src="img/star.png" alt="">
            </div>
            <p class="p3-m">Over 200 Rateings</p>
        </div>



        <!-------------------------- code of PHP starts here -------------------->
        <div class="container3">
            <div class="top">
                <p class="p3">Luxuirous</p>
                <p class="p4">Best Rooms</p>
            </div>

        </div>

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