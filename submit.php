<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="images/syringe.png" type="image/png" />
    <link rel="stylesheet" href="home_files/bootstrap.css" />
    <link rel="stylesheet" href="home_files/app.css" />

    <title>Registration | COVID-19 Info Center</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid site-title">
        <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>L1-team04</h3>
            </div>
        </div>
    </div>

    <div id="cdc-meganav-wrapper">
        <div class="container" id="cdc-meganav-bar">
            <nav class="navbar navbar-expand-xl yamm">
                <ul class="nav navbar-nav nav-justified w-100">
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html"> Home </a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html"> Pfizer-BioNTech </a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html"> Moderna </a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html"> J&J/Janssen </a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link" href="registration.html"> Registration </a>
                    </li>

                    <li class="nav-item" id="menu5">
                        <a class="nav-link" href="check_registration.html"> Check Registration </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            <div class="row">
                <img src="images/RegistrationStatusBanner.jpg" 
                alt="Registration Status Banner" 
                class="img-fluid rounded float-left" />
                <h2 id="content" class="open d-lg-block">
                    Registration Status
                </h2>
            </div>
            <div class="col-md-12">
                <?php
                if (file_exists($_POST['nric'] . '.txt')) {     //Check for filename with given nric
                    echo '<h3>You are already registered!</h3>';
                } else {   //filename not found, write to file
                    $content_to_write = "Name: " . $_POST['name'] . "\n";
                    $content_to_write .= "NRIC: " . $_POST['nric'] . "\n";
                    $content_to_write .= "Email: " . $_POST['email'] . "\n";
                    $content_to_write .= "Contact Number: " . $_POST['contact'] . "\n";
                    file_put_contents($_POST['nric'] . '.txt', $content_to_write);
                    echo '<h3>Registration is successful!</h3>';
                }
                ?>
            </div>
        </main>
    </div>

    <div class="container- mt-auto">
        <div class="container">
            <div class="card-body bg-quaternary">
                <h5>Disclaimer</h5>
                <p style="font-size: 14px">
                    This website is created mainly for educational and non-commercial
                    use only. It is a partial fulfillment for completion of unit
                    SWE20001 - Development Project 1 offered in Swinburne University of
                    Technology, Sarawak Campus. The web-master and author(s) do not
                    represent the business entity. The content of the pages of this
                    website might be out-dated or inaccurate, thus, the author(s) and
                    web-master does not take any responsibility for incorrect
                    information disseminated or cited from this website.
                </p>
            </div>
        </div>
    </div>

</body>

</html>