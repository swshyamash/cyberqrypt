<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <meta name="theme-color" content="#310f72">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="sonance/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="sonance/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="sonance/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="sonance/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="sonance/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="sonance/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="sonance/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="sonance/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="sonance/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="sonance/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="sonance/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="sonance/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="sonance/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="sonance/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="sonance/img/favicon/ms-icon-144x144.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Default Style CSS -->
    <link rel="stylesheet" type="text/css" href="sonance/css/default.css">
    <link rel="stylesheet" type="text/css" href="sonance/css/responsive.css">
    <!-- Global site tag (gtag.js) - AdWords: 1045328140 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1045328140"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-1045328140'); </script>
</head>
<?php
include '../lib/common.php';
?>
<body class="register-page">
    <div class="register-container">
        <div class="container">
            <div class="register-card">
                <div class="text-center logo-otr">
                    <img src="images/star.png" alt="img" class="logo-star">
                    <img src="images/logo1.png" alt="img" class="main-logo" />
                </div>
                <h6 class="text-center"><strong>Register</strong></h6>
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label>First name*</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>" placeholder="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="lname" value="<?php echo $lname; ?>" placeholder="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                            <div class="input-group">
                                <input class="form-control" type="email" name="email" value="<?php echo $email; ?>"" placeholder="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Mobile*</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="mobile" value="<?php echo $mobile; ?>" placeholder="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Password*</label>
                            <div class="input-group">
                                <input class="form-control" type="Password" name="password">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password*</label>
                            <div class="input-group">
                                <input class="form-control" type="Password" name="cpassword">
                            </div>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn" name="reg_user">Register</button>
                    </div>
                </form>
                <p class="note">Already Registered? <a href="login">Login</a></p>
            </div>
            <div class="copyrights">
                <p>&copy; 2018 <?= $CFG->exchange_name; ?>. All Rights Reserved</p>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </script>
    </script>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="sonance/js/script.js"></script>
</body>
</html>