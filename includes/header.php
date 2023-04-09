<?php
include_once "config.php";
$site_title="";
$sql = "SELECT * FROM site_settings WHERE setting_key = 'site_title'";
$result = $con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
      while($row = $result->fetch_assoc()) {
         $title= $row["setting_value"];
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       <title><?php echo $title; ?></title>
        <!-- Favicon-->
        <?php
                   $site_favicon="./assets/favicon.ico";
               $sql = "SELECT * FROM site_settings WHERE setting_key = 'site_favicon'";
                 $result = $con->query($sql);
                       if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                             $site_favicon=$row["setting_value"];
                }
            }
?>
        <link rel="icon" type="image/x-icon" href="<?php echo $site_favicon; ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <?php
                   $site_logo="";
               $sql = "SELECT * FROM site_settings WHERE setting_key = 'site_logo'";
                 $result = $con->query($sql);
                       if ($result->num_rows > 0) {
                              // output data of each row
                         while($row = $result->fetch_assoc()) {
                          $site_logo= "<img src='".$row['setting_value']."' height='100px' width='100px' />";
                }
            }
?>
                <a class="navbar-brand" href="#page-top"><?php echo $site_logo; ?></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">
                <?php
                                      $site_description="";
                                        $sql = "SELECT * FROM site_settings WHERE setting_key = 'site_description'";
                                        $result = $con->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                                 $site_description = $row["setting_value"];
                                                        }
                                                    }
                                                            echo $site_description;
                            ?>
                </p>
            </div>
        </header>