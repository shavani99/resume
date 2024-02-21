<?php

session_start();
$sitetitle;
require_once('conn.php');

if (ISSET($_POST['subscribe'])) {
    
    // register to create table
    $subscribe = "CREATE TABLE IF NOT EXISTS webdurga_subscribe (
    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($subscribe) === TRUE) {
        $semail = $_POST['semail'];
    
        $check_email = "SELECT email FROM webdurga_subscribe WHERE email = '$semail'";
        $fetch_email = mysqli_query($conn, $check_email);
    
        $email_count = mysqli_num_rows($fetch_email);
    
        if ($email_count > 0) {
            ?>
                <script>
                    // showPop();
                    alert("You are already subscribed!");
                    window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
                </script>
            <?php
        }else {
            $insert_sdata = "INSERT INTO webdurga_subscribe (email) VALUES ('$semail')";
    
            if ($conn->query($insert_sdata) === TRUE) {

                ?>
                    <script>
                        alert("Thanks for subscribing to Web Durga!");
                        window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
                    </script>
                <?php
                
                $to = $semail;
                $subject = "Thanks for subscribe";
                $message = "
                <html>
                    <head>
                        <title>HTML email</title>
                        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
                    </head>
                    <body>
                        <h3 class=\"bg-danger\">Hello Dear, You subscribe Web Durga. If you are interested on Web Durga Services. You can contact us.</h3>

                        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
                    </body>
                </html>
                ";
                $headers = 'From: Web Durga' . "\r\n";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    
                if (mail($to, $subject, $message, $headers)) {
                    $tome = "contact@webdurga.com";
                    $subject = "User Subscribe Web Durga";
                    $message = $to . "subscribe us";
                    $body = "From: Web Durga";

                    mail($tome, $subject, $message, $body);
                }
    
            }else {
                ?>
                    <script>
                        alert("Email exists!");
                        window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
                    </script>
                <?php
            }
        }
            
    } else {
        echo "Error creating table: " . $conn->error;
    }

}

if (ISSET($_POST['contact'])) {

    // register to create table
    $contact = "CREATE TABLE IF NOT EXISTS webdurga_contact (
    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile VARCHAR(255) NOT NULL,
    service VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($contact) === TRUE) {
            
        $cname = $_POST['cname'];
        $cemail = $_POST['cemail'];
        $cmobile = $_POST['cmobile'];
        $cservice = $_POST['cservice'];
        $cmessage = $_POST['cmessage'];

        $toupper = ucwords($cname);
    
        $insert_cdata = "INSERT INTO webdurga_contact (name, email, mobile, service, message) VALUES ('$cname', '$cemail', '$cmobile', '$cservice', '$cmessage')";
        
        if ($conn->query($insert_cdata) === TRUE) {
            ?>
            <script>
                alert("Thank you for contacting us. we will get back to you soon!");
                window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
            </script>
            <?php
                $to = $cemail;
                $subject = "Thanks for Contact Us";
                $message = "
                <html>
                    <head>
                        <title>HTML email</title>
                        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
                    </head>
                    <body>
                        <h3 class=\"bg-danger\">Hello Dear {$toupper}, Thank you for contacting Web Durga. We will get back to you soon!</h3>

                        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>
                    </body>
                </html>
                ";
                $headers = 'From: Web Durga' . "\r\n";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                if (mail($to, $subject, $message, $headers)) {
                    ?>
                    <script>
                        alert("Mail Sent!");
                        window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
                    </script>
                    <?php
                }else {
                    ?>
                    <script>
                        alert("Mail not Sent!");
                        window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
                    </script>
                    <?php
                }
                
        }else {
            ?>
            <script>
                alert("Sorry the form has not submitted! Please try again.");
                window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
            </script>
            <?php
        }

    } else {
        ?>
        <script>
            alert("database does not exist!");
            window.location.replace("<?php echo $_SERVER['HTTP_REFERER']; ?>");
        </script>
        <?php
    }


}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="google-site-verification" content="dPwG5ziFtb1DDhq7pv__CxH15lQ5kft8uNq20Om06dk" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TND786V');</script>
        <!-- End Google Tag Manager -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $sitetitle; ?></title>
        <meta name="title" content="Web Durga - Grow Your Online Business With Us | Best IT Services | Digital Marketing Agency">
        <meta name="description" content="Web Durga is a digital marketing agency that provides a wide range of services to help businesses succeed in the online world. With a team of experienced professionals, Web Durga offers services such as web design & development, social media management, website management, logo & banner design, video & audio editing, search engine optimization (SEO), social media marketing, email marketing, content marketing, and more. The agency's goal is to help businesses increase their online visibility, attract more traffic to their websites, and ultimately generate more leads and sales. Whether it's creating a comprehensive digital marketing strategy or executing a specific campaign, Web Durga has the expertise and resources to deliver results.">
        <meta name="keywords" content="Web Durga, Webdurga, Best IT Services In Dehradun, Website Design, Website Development, Website Management, Digital Marketing, Search Engine Optimization, Logo & Banner Design, Video & Audio Editing, Social Media Management, Web Design, Web Development">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="Nitin Singh Gusain">
        <!-- Favicons -->
        <link rel="icon" type="image/x-icon" href="assets/img/logo.webp">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/scss/main.css" rel="stylesheet">

        <!-- Jquery JS Link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- Animated Animate -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TND786V"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- ======= Header ======= -->
        <header id="header" class="header">

            <nav class="navbar navbar-expand-lg shadow">
                <div class="container">
                    <a class="navbar-brand me-auto" href="index" data-aos="fade-right">
                        <img src="assets/img/logo.webp" class="img-fluid d-none d-md-flex" alt="Web Durga Logo">
                        <img src="assets/img/mobilelogo.webp" class="img-fluid d-flex d-md-none" alt="Web Durga Logo">
                    </a>
                    <div class="menu">
                        <i class="fa-solid fa-bars d-block d-lg-none mobileshow" aria-label="Mobilemenu" role="button" data-aos="fade-left" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample"></i>
                    </div>
                    <?php
                        if (ISSET($_SESSION['status'])) {
                    ?>
                        <div class="dropdown" data-aos="fade-left">
                            <span class="mobileProfile mobileProfile1 d-flex d-lg-none" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-offset="10,20"><?php echo ucwords(substr($_SESSION['username'],0,1)); ?></span>
                            <div class="dropdown-menu dropdown-menu-end mt-2 profileDetail" style="width: 300px">
                                <div class="vstack text-center pb-2 pt-3">
                                    <div class="image mb-2">
                                        <span class="mobileProfile mobileProfile2"><?php echo ucwords(substr($_SESSION['username'],0,1)); ?></span>
                                    </div>
                                    <h5><?php echo ucwords($_SESSION['username']); ?></h5>
                                </div>
                                <ul class="nav d-block">
                                    <li class="nav-item"><hr class="dropdown-divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-user"></i>Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-file"></i>My Projects</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-heart"></i>Likes</a></li>
                                    <li class="nav-item"><hr class="dropdown-divider"></li>
                                    <li class="nav-item"><a class="nav-link" href="logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php
                        }else {
                    ?>
                        <!-- <a href="login" class="btn btn-primary d-block d-lg-none" data-aos="fade-left">Log in</a> -->
                    <?php } ?>
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto" data-aos="fade-down">
                            <li class="nav-item"><a class="nav-link home" aria-current="page" href="index">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us">About us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="website-design-&-development">Website Design & Development</a></li>
                                    <li><a class="dropdown-item" href="website-management">Website Management</a></li>
                                    <li><a class="dropdown-item" href="digital-marketing">Digital Marketing</a></li>
                                    <li><a class="dropdown-item" href="search-engine-optimization">Search Engine Optimization</a></li>
                                    <li><a class="dropdown-item" href="social-media-management">Social Media Management </a></li>
                                    <li><a class="dropdown-item" href="logo-&-banner-design">Logo & Banner Design</a></li>
                                    <li><a class="dropdown-item" href="video-&-audio-editing">Video & Audio Editing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="our-team">Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us">Contact us</a></li>
                        </ul>
                        <?php
                            if (ISSET($_SESSION['status'])) {
                        ?>
                            <div class="hstack gap-4">
                                <!-- <div class="dropdown">
                                    <i class="fa-regular fa-bell position-relative" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-offset="10,20">
                                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </i>
                                    <div class="dropdown-menu dropdown-menu-lg-end p-3" style="width: 350px; height: 400px; overflow-y: scroll">
                                        <div class="alert alert-secondary" role="alert">
                                            A simple primary alert—check it out!
                                        </div>
                                    </div>
                                </div> -->
                                <div class="dropdown">
                                    <span class="iconProfile iconProfile1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" data-bs-offset="10,20"><?php echo ucwords(substr($_SESSION['username'],0,1)); ?></span>
                                    <div class="dropdown-menu dropdown-menu-lg-end mt-2 profileDetail" style="width: 300px">
                                        <div class="vstack text-center pb-2 pt-3">
                                            <div class="image mb-2">
                                                <span class="iconProfile iconProfile2"><?php echo ucwords(substr($_SESSION['username'],0,1)); ?></span>
                                            </div>
                                            <h5><?php echo ucwords($_SESSION['username']); ?></h5>
                                        </div>
                                        <ul class="nav d-block">
                                            <li class="nav-item"><hr class="dropdown-divider"></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-user"></i>Profile</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-file"></i>My Projects</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-regular fa-heart"></i>Likes</a></li>
                                            <li class="nav-item"><hr class="dropdown-divider"></li>
                                            <li class="nav-item"><a class="nav-link" href="logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }else {
                        ?>
                        <div class="hstack gap-3" data-aos="fade-left">
                            <!-- <a href="signup" class="btn btn-danger">Sign up</a> -->
                            <!-- <a href="login" class="btn btn-primary">Log in</a> -->
                            <a href="contact-us" class="btn btn-danger ms-3">Apply now</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header bg-light shadow">
                    <img src="assets/img/logo.webp" class="img-fluid" width="60px" alt="Web Durga Logo">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto" data-aos="fade-down">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu shadow p-0">
                                <li><a class="dropdown-item" href="website-design-&-development">Website Design & Development</a></li>
                                <li><a class="dropdown-item" href="website-management">Website Management</a></li>
                                <li><a class="dropdown-item" href="digital-marketing">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="search-engine-optimization">Search Engine Optimization</a></li>
                                <li><a class="dropdown-item" href="social-media-management">Social Media Management </a></li>
                                <li><a class="dropdown-item" href="logo-&-banner-design">Logo & Banner Design</a></li>
                                <li><a class="dropdown-item" href="video-&-audio-editing">Video & Audio Editing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="our-team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us">Contact us</a></li>
                        <hr>
                        <div class="d-grid">
                            <a href="contact-us" class="btn btn-danger ms-3">Apply now</a>
                        </div>
                    </ul>
                </div>
            </div>

        </header>
        <!-- ======= End Header ======= -->