<?php
/**
 * Created by PhpStorm.
 * User: Mila
 * Date: 02/08/2018
 * Time: 14:31
 */
?>
<!DOCTYPE html>
<html>

<?php require_once 'application/views/header.php';?>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="<?php echo base_url();?>/assets/images/logo/icon2.jpg" width="40">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo site_url('welcome/index'); ?>">amma</a>
        </div>
        <?php require_once 'application/views/notification.php';?>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <?php
    require_once 'application/views/leftSidebar.php';
    require_once 'application/views/rightSidebar.php';
    ?>

</section>

<?php require_once 'application/views/script.php';?>

</body>

</html>
