<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    html {
        height: 50% !important;
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

    <!---------------------------- main start here ---------------------------->
    <main>
        <!--start container2-->
        <div class="container2">

            <!--left text(title, para,...etc)-->
            <div class="container2-text">
                <p class="container2-P1">Code of Conduct </p>

                <p class="container2-P2">Elite Code of Conduct</p>


                <p class="container2-P2">Overview</p>
                <p class="container2-P3">
                    We, the project's contributors, and maintainers, promise to respect everyone who participates by filing bug reports, making feature requests, adding to the documentation, pulling requests, and other actions.
                    Regardless of experience level, gender, gender identity and expression, handicap, physical appearance, body size, color, ethnicity, age, religion, or nationality, we are dedicated to ensuring that everyone involved in this project is free from harassment.
                </p>

                <p class="container2-P2">Our Standards</p>
                <p class="container2-P3">
                    Some Examples of behavior that contributes to creating a positive environment include:
                    Focusing on what is best for the community, being respectful of others' perspectives and experiences, accepting constructive criticism with grace, speaking in a kind and inclusive manner, and empathetically relating to other community members.

                    <br/>
                    Some Examples of unacceptable behavior by participants include:
                    Insults, disparaging remarks, and political or personal assaults Harassment in public or private; disclosing another person's personal information—like their physical or email address—without their consent; and engaging in any other behavior that would be deemed improper in a work environment.
                </p>

                <p class="container2-P2">Responsibilities of Contributors</p>
                <p class="container2-P3">
                    The right and obligation to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that do not adhere to this code of conduct rests with the project maintainers. They also have the authority to ban any contributor temporarily or permanently for any other behaviors that they consider to be improper, threatening, offensive, or harmful.
                </p>

                <p class="container2-P2">Scope</p>
                <p class="container2-P3">
                    When someone is speaking on behalf of the project or its community in public, they are bound by this code of conduct. Using an official project email address, publishing content on an official social media account, or serving as a designated representative at an online or offline event are a few instances of representing a project or community.
                </p>

                <p class="container2-P2">Enforcement</p>
                <p class="container2-P3">
                    Reporting abusive, harassing, or otherwise inappropriate behavior can be done by sending an email to <a href="mailto:elite.github@gmail.com"> elite.github@gmail.com</a>, the project team. All concerns will be examined and investigated by the project team, which will then take the appropriate action given the situation. The project team has a duty to keep the identity of the incident reported discreet.                </p>

                <p class="container2-P2">Attribution</p>
                <p class="container2-P3">
                    This Code of Conduct is adapted from the Contributor Covenant, version 2.0, available <a href="https://www.contributor-covenant.org/version/2/0/code_of_conduct/ "> here</a></p>



                <!-- <button class="container2-a">Discover all Rooms</button> -->
            </div>
            <!--right image-->
            <div class="imgRightBox">
                <img src="img/container2.png" alt="" class="container2-img">
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
