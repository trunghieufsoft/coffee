<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\models\Category;


AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Coffee House</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"/>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
<!--top-strip-->
<div class="top-strip">
    <div class="container">
        <div class="row">
            <div class="col-md-6 user">
                <p>
                     Welcome to The Coffee House
                </p>
            </div>
            <div class="col-md-6 language">
                <ul>
                    <?php if(Yii::$app->user->isGuest): ?>
                    <li><a href="index.php?r=site/signup"><i class="glyphicon glyphicon-log-in"></i> Đăng Ký</a></li>
                    <li><a href="index.php?r=site/login"><i class="glyphicon glyphicon-log-in"></i> Đăng Nhập</a></li>
                    <?php else: ?>
                    <li><a href="index.php?r=user/update"><i class="glyphicon glyphicon-edit"></i> Cập nhật thông tin</a></li>
                    
                    <?php if(Yii::$app->user->identity->username == 'Admin'): ?>
                     <li><a href="/cafe/backend/web"><i class="glyphicon glyphicon-edit"></i> Quản lý Admin</a></li>   
                    <?php endif; ?>    
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> <?=Yii::$app->user->identity->username?></a></li>
                    <li><a href="index.php?r=site/logout">Thoát <i class="glyphicon glyphicon-log-out"></i></a></li>
                 <?php endif; ?>   
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end-top-strip-->
<!--navbar-->
<div class="container header">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="width: 200px;height: 24px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
                <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Thực đơn</a>
                <ul class="dropdown-menu">                   
                    <?php $category = backend\models\Category::find()->all(); ?>
                    <?php foreach ($category as $item): ?>
                    <li><a href="index.php?r=site/category&id=<?=$item->id?>"><?=$item->name?></a></li>
                    <?php endforeach; ?>
                </ul>
                </li>
                <li><a href="index.php?r=cart">Giỏ hàng</a></li>
                
                <li><a href="index.php?r=site/about">Giới thiệu</a></li>
                
                <li><a href="index.php?r=site/contact">Liên hệ</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    </nav>
</div>
<!--end-navbar-->
<!--flex-slider-->
<?=Alert::widget()?>
<?php echo $content; ?>
<!--end-prize-->
<!--footer-->
<div class="full-footer">
    <div class="container-full">
        <div class="container info">
            <div class="row">
                <div class="col-md-4 addres">
                    <img src="images/footer-logo.png" alt="logo">
                    <h6>The Coffee House</h6>
                    <p>
                         123 Nguyễn Văn Linh, Hải Châu, Đà Nẵng
                    </p>
                    <p>
                         Phone 0123 456 789/0123 456 788
                    </p>
                </div>
                <div class="col-md-2 account">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="#">Giỏ hàng</a></li>
                        <li><a href="#">Đặt hàng</a></li>
                        <li><a href="#">Thông tin cá nhân</a></li>
                    </ul>
                </div>
                <div class="col-md-2 assistance">
                    <h4>Tiêu chí</h4>
                    <ul>
                        <li><a href="#">Nhân viên nhiệt tình</a></li>
                        <li><a href="#">Không gian sang trọng</a></li>
                        <li><a href="#">Giao hàng miễn phí tận nơi</a></li>
                    </ul>
                </div>
                <div class="col-md-4 about">
                    <h4>Về chúng tôi</h4>
                    <p>
                         Với đội ngũ nhân viên nhiệt tình cộng với chất lượng hảo hạn từ sản phẩm tại đây, hi vọng quý vị có những giây phút tuyệt với bên gia đình, bạn bè và ngưòi thân
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end-addres-->
    <div class="container">
        <div class="row bottom-strip">
            <div class="col-md-6 rights">
                <p>
                     Thực Tập Công Nhân 2017
                </p>
            </div>
            <div class="col-md-6 social">
                <ul>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-asterisk"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end-footer-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
// jQuery
(function($) {
  "use strict";
    $(document).ready(function() {
        // Main Slider
        $('.main-flexslider').flexslider({
            directionNav: true, 
            controlNav: false, 
            animation: "fade",
            slideshowSpeed: 3000,
            prevText: "",
            nextText: "",
        });
    });
})(jQuery);
</script>
</body>
</html>