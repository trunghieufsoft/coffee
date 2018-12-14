<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 ?>
<!--end-navbar-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4>liên hệ</h4>
            </div>
            <div class="col-md-2 cart">
                <h4><a href="#">Giỏ hàng (<?=$total?> items)</a></h4>
                <ul>
                    <li><a href="index.php">Trang chủ /</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- shop-page -->
<div class="container">
    <div class="row content">
        <div class="col-md-9">
            
            <div class="row contact-all">
                <div class="triggerAnimation animated" data-animate="fadeInLeft">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <h1>liên hệ với chúng tôi</h1>
                        <div class="text-fields">
                            <div class="float-input">
                                <?= $form->field($model, 'name')->textInput(['placeholder'=>'Họ và tên'])->label(false) ?>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <div class="float-input">
                                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
                                <span><i class="fa fa-envelope-o"></i></span>
                            </div>
                            <div class="float-input">
                                <?= $form->field($model, 'phone')->textInput(['placeholder'=>'Số điện thoại'])->label(false) ?>
                                <span><i class="fa fa-link"></i></span>
                            </div>
                        </div>
                        <div class="submit-area">
                            <?= $form->field($model, 'body')->textarea(['placeholder'=>'Nội dung'])->label(false) ?>
                            <input type="submit" id="submit_contact" class="main-button" value="gửi liên hệ">
                            <div id="msg" class="message">
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 shop-sidebar">
            <div class="sidebar-widgets">
                <div class="row right-cal">
                    <h4>giờ mở cửa</h4>
                    <ul>
                        <li><a href="#">thứ hai<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">thứ ba<span>8am-5pm</span></a></li>
                        <li><a href="#">thứ tư<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">thứ năm<span>8am-5pm</span></a></li>
                        <li><a href="#">thứ sáu<span>8am-5pm</span></a></li>
                        <li class="colored"><a href="#">thứ bảy<span>8am-5pm</span></a></li>
                        <li><a href="#">chủ nhật<span>8am-5pm</span></a></li>
                    </ul>
                </div>
                <div class="row right-inf">
                    <h4>thông tin liên hệ</h4>
                    <ul>
                        <li>
                        <p>
                             Chocco Webshop
                        </p>
                        </li>
                        <li>
                        <p>
                             Street name 0123, Washington, USA
                        </p>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#">Hotline : 0123 456 789</a></li>
                        <li><a href="#">DĐ : 0123 456 789</a></li>
                        <li><a href="#">Email : info@chocco.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-shop-page -->
<!-- partners box -->
<div class="container">
</div>
<!--prize-->
<div class="prize">
    <div class="container">
        <h1>win our special prize on our facebook page</h1>
    </div>
</div>
<!--end-prize-->
<!--footer-->
