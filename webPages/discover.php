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
                <p class="container2-P1">Why Us!</p>

                <p class="container2-P2">Elite's Features</p>


                <section id="features">
                    <h2>Overview</h2>
                    <p>Elite aims to provide a luxurious and seamless room reservation experience. The platform caters to individuals seeking refined stays, emphasizing elegance and comfort. Below are the key features that define the Elite experience.</p>
                    <ol>
                        <li><strong>User-Friendly Reservation System:</strong>
                            <ul>
                                <li>Intuitive and easy-to-use platform for quick and hassle-free room reservations.</li>
                                <li>Streamlined booking process with clear navigation.</li>
                            </ul>
                        </li>
                        <li><strong>Exquisite Hotel Selection:</strong>
                            <ul>
                                <li>Curated list of premium hotels and resorts offering a superior level of magnificence and luxury.</li>
                                <li>Comprehensive information about each property, including amenities, services, and room options.</li>
                            </ul>
                        </li>
                        <li><strong>Transparent Pricing and Policies:</strong>
                            <ul>
                                <li>Clear and transparent pricing with no hidden fees.</li>
                                <li>Detailed policies regarding cancellations, refunds, and any additional charges.</li>
                            </ul>
                        </li>
                        <li><strong>Personalized User Accounts:</strong>
                            <ul>
                                <li>User accounts for a personalized experience, allowing guests to save preferences and booking history.</li>
                                <li>Secure account management with password protection.</li>
                            </ul>
                        </li>
                        <li><strong>Search Functionality:</strong>
                            <ul>
                                <li>Robust search capabilities for users to find the ideal accommodation based on location, date, and preferences.</li>
                                <li>Filters for refining search results, such as amenities, price range, and accommodation type.</li>
                            </ul>
                        </li>
                        <li><strong>Responsive Design:</strong>
                            <ul>
                                <li>Fully responsive design for seamless user experiences across various devices, including desktops, tablets, and smartphones.</li>
                                <li>Mobile-friendly interface for on-the-go bookings.</li>
                            </ul>
                        </li>
                        <li><strong>Customer Support:</strong>
                            <ul>
                                <li>Access to customer support for inquiries, assistance, and issue resolution.</li>
                                <li>Multiple channels for customer support, including live chat, email, and phone.</li>
                            </ul>
                        </li>
                        <li><strong>Privacy and Security:</strong>
                            <ul>
                                <li>Robust security measures to protect user data and ensure secure transactions.</li>
                                <li>Clear privacy policy outlining how user data is handled.</li>
                            </ul>
                        </li>
                    </ol>
                </section>

                <section id="requirements">
                    <h2>Requirements Document - Elite</h2>
                    <h3>Functional Requirements:</h3>
                    <ol>
                        <li><strong>User Registration:</strong>
                            <ul>
                                <li>Users can create accounts with a valid email address and password.</li>
                                <li>User account information should be securely stored.</li>
                            </ul>
                        </li>
                        <li><strong>Room Reservation:</strong>
                            <ul>
                                <li>Users should be able to browse available rooms and make reservations.</li>
                                <li>The system should confirm reservation details and provide a booking reference.</li>
                            </ul>
                        </li>
                        <li><strong>Hotel Information:</strong>
                            <ul>
                                <li>Comprehensive information about each hotel, including images, amenities, and policies.</li>
                            </ul>
                        </li>
                        <li><strong>Search Functionality:</strong>
                            <ul>
                                <li>Users can search for available rooms based on location, date, and preferences.</li>
                                <li>The search results should be accurate and up-to-date.</li>
                            </ul>
                        </li>
                        <li><strong>User Dashboard:</strong>
                            <ul>
                                <li>A dashboard for registered users to manage reservations, view booking history, and update account details.</li>
                            </ul>
                        </li>
                        <li><strong>Responsive Design:</strong>
                            <ul>
                                <li>The platform should be accessible and functional on various devices and screen sizes.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Non-functional Requirements:</h3>
                    <ol>
                        <li><strong>Security:</strong>
                            <ul>
                                <li>Implement secure data transmission and storage practices.</li>
                                <li>Use encryption for sensitive user information.</li>
                            </ul>
                        </li>
                        <li><strong>Performance:</strong>
                            <ul>
                                <li>Ensure quick response times for search queries and booking processes.</li>
                                <li>Optimize images and assets for fast loading.</li>
                            </ul>
                        </li>
                        <li><strong>Scalability:</strong>
                            <ul>
                                <li>Design the system to handle a scalable number of users and reservations.</li>
                                <li>Implement a robust database structure.</li>
                            </ul>
                        </li>
                        <li><strong>Privacy:</strong>
                            <ul>
                                <li>Clearly communicate the privacy policy to users.</li>
                                <li>Allow users to manage their privacy settings.</li>
                            </ul>
                        </li>
                        <li><strong>Customer Support:</strong>
                            <ul>
                                <li>Provide multiple channels for customer support.</li>
                                <li>Ensure timely responses to user inquiries.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Regulatory Compliance:</h3>
                    <ol>
                        <li><strong>Legal and Regulatory Standards:</strong>
                            <ul>
                                <li>Ensure compliance with data protection laws and regulations.</li>
                                <li>Keep abreast of any changes in relevant legislation.</li>
                            </ul>
                        </li>
                        <li><strong>Accessibility:</strong>
                            <ul>
                                <li>Design the platform to be accessible to users with disabilities.</li>
                                <li>Follow accessibility guidelines and standards.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Testing Requirements:</h3>
                    <ol>
                        <li><strong>User Acceptance Testing (UAT):</strong>
                            <ul>
                                <li>Conduct UAT to ensure the system meets user expectations.</li>
                                <li>Address any issues identified during UAT.</li>
                            </ul>
                        </li>
                        <li><strong>Performance Testing:</strong>
                            <ul>
                                <li>Test the system's performance under various loads.</li>
                                <li>Optimize for speed and efficiency.</li>
                            </ul>
                        </li>
                        <li><strong>Security Testing:</strong>
                            <ul>
                                <li>Conduct security testing to identify and address potential vulnerabilities.</li>
                                <li>Regularly update security measures.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Documentation Requirements:</h3>
                    <ol>
                        <li><strong>User Guides:</strong>
                            <ul>
                                <li>Provide comprehensive user guides for registration, reservation, and account management.</li>
                                <li>Ensure documentation is easily accessible.</li>
                            </ul>
                        </li>
                        <li><strong>Developer Documentation:</strong>
                            <ul>
                                <li>Create detailed developer documentation for future enhancements and maintenance.</li>
                                <li>Include API documentation if applicable.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Dependencies:</h3>
                    <ol>
                        <li><strong>Third-Party Integrations:</strong>
                            <ul>
                                <li>Integrate with payment gateways for secure transactions.</li>
                                <li>Collaborate with hotels to ensure accurate and updated information.</li>
                            </ul>
                        </li>
                        <li><strong>Internet Connectivity:</strong>
                            <ul>
                                <li>The platform depends on a stable internet connection for real-time updates and transactions.</li>
                            </ul>
                        </li>
                    </ol>
                </section>


            </div>
            <!--right image-->
            <div class="imgRightBox">
                <img src="img/container2.png" alt="" class="container2-img"> <br/> <br/> <br/>
                <img src="img/container2.png" alt="" class="container2-img"> <br/> <br/> <br/>
                <img src="img/container2.png" alt="" class="container2-img"> <br/> <br/> <br/>
                <img src="img/container2.png" alt="" class="container2-img"> <br/> <br/> <br/>
                <img src="img/container2.png" alt="" class="container2-img"> <br/> <br/> <br/>
                <img src="img/container2.png" alt="" class="container2-img">

            </div>

        </div>
        <!--end container2-->

    </main>

    ]




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
