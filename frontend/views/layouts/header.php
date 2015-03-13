<?php
use yii\helpers\Url;
use frontend\assets\DWMainAsset;
use frontend\assets\AppAsset;

$appBundle  = AppAsset::register($this);
$dwBundle   =  DWMainAsset::register($this);
?>

<section id="topbar" class="clearfix">
    <div class="container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="callus">
                <div class="dropdown spanme">
                    <div>
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-globe"></i> Languages: English
                            <span class="fa fa-angle-down"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/flags/en.png" alt=""> English</a></li>
                        </ul>
                    </div>
                </div>
                <div class="spanme btn btn-default dropdown-toggle"><i class="fa fa-phone"></i> Phone: 083 625 4006</div>
            </div><!-- end callus -->
        </div><!-- end columns -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="pull-right">
                <?php
                    if (Yii::$app->user->isGuest) {
                ?>
                <a name="register" class="btn btn-primary border-radius" href="<?= Url::to('/site/signup')?>">Register</a>
                <a name="login-btn" class="btn btn-default border-radius" href="<?= Url::to('/site/login')?>">Login</a>
                <?php }
                    else {
                ?>
                        <a name="user-btn" href="<?= Url::to('/user/profile')?>">
                        <div class="spanme btn btn-primary  border-radius">
                            <i class="glyphicon glyphicon-user"></i>

                            Hi. <?= Yii::$app->user->identity->username; ?>

                        </div></a>
                        <a name="logout-btn" class="btn btn-default border-radius btn-transparent"  data-method="post" href="<?= Url::to('/site/logout'); ?>">Logout</a>
                <?php }?>
            </div><!-- end social icons -->
        </div><!-- end columns -->
    </div><!-- end container -->
</section><!-- end topbar -->

<header id="header-one" class="header">
    <div class="container-fluid">
        <div class="menu-wrapper">
            <nav id="navigation" class="navbar yamm" role="navigation">
                <div class="navbar-inner">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars fa-2x"></i>
                        </button>
                        <a id="brand" class="clearfix navbar-brand" href="<?= Url::to('/')?>"><img src="<?= $dwBundle->baseUrl . '/images/white-logo.png' ?>" alt="Creativ"></a>
                    </div><!-- end navbar-header -->
                    <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                        <ul class="nav navbar-nav">
                            <li class="dropdown wps-half"><a href="<?= Url::to('/')?>">Home</a>
                            </li><!-- end mega menu -->
                            <li class="dropdown wps-full"><a href="<?= Url::to('/site/about')?>" class="">About</a>
                            </li><!-- end mega menu -->
                            <li class="dropdown">
                                <a href="<?= Url::to('/site/recruitment')?>" class="">Recruitment</a>
                            </li>
                            <li><a href="<?= Url::to('/site/contact')?>">Contact</a></li>
                        </ul><!-- end navbar-right -->
                        <div class="pull-right clearfix">
                            <div class="right-menu">
                                <span><a title="Search" href="#" id="filter-menu" class="nav-toggle" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-search"></i></a></span>
                            </div><!-- end custom-menu -->
                        </div><!-- end widget -->
                    </div><!-- end navbar-callopse -->
                </div><!-- end navbar-inner -->
            </nav><!-- end navigation -->
        </div><!-- menu wrapper -->
        <div class="shadow"></div>
    </div>
</header><!-- end header -->