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

<?php require_once 'header.php';?>

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
            <img src="<?php echo base_url();?>/assets/images/logo/logo_ver3.png" width="40" style="padding-top: 10px">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo site_url('welcome/index'); ?>">amma</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
<!--                --><?php //require_once 'notification.php';?>
<!--                <li><a href="--><?php //echo base_url();?><!--index.php/welcome/login/" role="button">-->
<!--                    <i class="material-icons">person</i>-->
<!--                    </a>-->
<!--                </li>-->
                <li><a href="" data-toggle="modal" data-target="#defaultModal" role="button">
                        <i class="material-icons">person</i>
                    </a>
                </li>
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <?php
        require_once 'leftSidebar.php';
        require_once 'rightSidebar.php';
    ?>
</section>

<section class="content">
    <!-- Default Size -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="login-page">
                    <div class="login-box">
                        <div class="card">
                            <div class="body">
                                <form id="sign_in" method="POST">
<!--                                    <div class="msg">Sign in to start your session</div>-->
                                    <div class="modal-header">
                                        <h4 class="msg modal-title" id="defaultModalLabel">Sign in to start your session</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-8 p-t-5">
                                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                                <label for="rememberme">Remember Me</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-block bg-deep-orange waves-effect" type="submit">SIGN IN</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row m-t-15 m-b-20">
                                            <div class="col-xs-6 align-left">
                                                <a href="<?php echo base_url();?>index.php/welcome/register/">Register Now!</a>
                                            </div>
                                            <div class="col-xs-6 align-right">
                                                <a href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="modal-header">-->
<!--                    <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan-->
<!--                    vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.-->
<!--                    Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus-->
<!--                    nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.-->
<!--                    Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>-->
<!--                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>

<?php require_once 'application/views/script.php';?>

</body>

</html>
