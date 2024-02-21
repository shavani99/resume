<?php
    session_start();
    require_once('conn.php');

    if (ISSET($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_email = "SELECT * FROM webdurga_signup WHERE email='$email'";
        $fetch_email = mysqli_query($conn, $check_email);

        $email_count = mysqli_num_rows($fetch_email);

        if ($email_count>0) {

            $fetch_data = mysqli_fetch_assoc($fetch_email);
            $check_status = $fetch_data['status'];

            if ($check_status == "active") {

                $pass_data = $fetch_data['password'];
                $pass_verify = password_verify($password, $pass_data);
    
                if ($pass_verify === TRUE) {
                    $_SESSION['status'] = $check_status;
                    $_SESSION['username'] = $fetch_data['username'];
                    ?>
                        <script>
                            window.location.replace("index.php");
                        </script>
                    <?php
                }else {
                    ?>
                        <script>
                            alert("Invalid Credentials");
                            window.location.replace("login.php");
                        </script>
                    <?php
                }

            }else {
                $to = $email;
                $subject = "User Verification";
                $message = "Your verification OTP is " . $token;
                $body = "From: contact@webdurga.com";

                mail($to, $subject, $message, $body);
                ?>
                    <script>
                        alert("First complete your verification.");
                        window.location.replace("user-verification.php");
                    </script>
                <?php


            }


        }else {

            ?>
                <script>
                    alert("Invalid Credentials");
                    window.location.replace("login.php");
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
    <title>Log in - Web Durga</title>
    <meta name="title" content="Web Durga - Grow Your Business With Us (Best IT Services)">
    <meta name="description" content="We are here to help you out with all your queries and doubts. Reach out to us today for all Digital Marketing and IT Services.">
    <meta name="keywords" content="Web Durga, Webdurga, Best IT Services, Website Design, Website Development, Website Management, Digital Marketing, Search Engine Optimization, Logo & Banner Design, Video & Audio Editing, Social Media Management, Web Design, Web Development">
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

    <main>
        <section id="signup">
            <div class="container-fluid">
                <div class="row p-2 p-md-5">
                    <div class="col-12 col-md-4 bg-light shadow-lg px-3 py-5 p-md-5 rounded">
                        <div class="signup-form">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="mb-5 text-center">
                                    <img src="assets/img/logo.webp" class="img-fluid mb-1" width="70px" alt="">
                                    <h2>Log in</h2>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-floating mb-4 text-center">
                                    <a href="forgot-password.php">Forgot password</a>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2" name="login">Log in</button>
                                </div>
                                <div class="col-12 text-center pt-4">
                                    <p>If you don't have an account please <a href="signup.php">sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease',
            offset: 120,
            delay: 100,
        });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/hover.js"></script>
    <script src="assets/js/alert.js"></script>
    
</body>
</html>