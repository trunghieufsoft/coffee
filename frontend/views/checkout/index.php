<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$model->amount = $cost;
?>
<!--end-navbar-->
<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-10 produti">
        <h4>Đặt hàng</h4>
      </div>
      <div class="col-md-2 cart">
        <h4><a href="index.php?r=cart">Giỏ hàng</a></h4>
        <ul>
          <li><a href="index.php">Trang chủ /</a></li>
          <li><a href="index.php">Đặt hàng</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- shop-page -->
<div class="container checking-area">
  <div class="row">
    <div class="col-md-9 checkout-accordion">
      <div class="col-md-12 white-bg">
        <div class="bs-example">
          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">1. thông tin đặt hàng</a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in panel-body">
               
                  <div class="accordion-list-content" style="overflow: hidden; display: block;">
                    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>
                    
                            
                               <?= $form->field($model, 'name')->textInput(['class'=>'form-control']) ?>
                            
                           
                              <?= $form->field($model, 'phone')->textInput(['class'=>'form-control']) ?>
                            
                          
                              <?= $form->field($model, 'address')->textInput(['class'=>'form-control']) ?>
                            
                          
                              <?= $form->field($model, 'note')->textarea(); ?>
                              <?= $form->field($model, 'amount')->hiddenInput()->label(false); ?>
                            
                      

                      <button type="submit" class="btn btn-danger" style="margin-left: 180px">ĐẶT HÀNG</button>
                    
                    
                    <?php ActiveForm::end(); ?>

                  </div>

                  
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">2. xác nhận đơn hàng</a>
                  </h4>
                </div>
                <div class="row">
                  <div class="col-md-12 cart-area">
                    <div class="sixteen columns cart-section oflow">

                      <!-- Cart -->

                      <div class="row">

                        <div class="col-md-6 cart-totals">

                          <br>

                        </div>

                        <div class="pull-right cart-buttons">

                          <a href="index.php">Tiếp tục mua hàng</a>
                          <a href="index.php?r=cart/index">Xem giỏ hàng</button></a>


                        </div>
                      </div>
                      <br>
                      <br>
                    </div>

                    <!-- Start -->
                    <!-- end -->
                  </div>
                  <!-- Sidebar -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 shop-sidebar">
        <div class="sidebar-widgets">

          <div class="shop-widget">
            <h4>Categories</h4>
            <ul class="category-shop-list">
              <?php $category = backend\models\Category::find()->all();?>
              <?php foreach ($category as $item): ?>
                <?php $count = backend\models\Product::find()->where(['category_id'=>$item->id])->count();?>
                <li>
                  <a class="accordion-link" href="index.php?r=site/category&id=<?=$item->id?>"><?=$item->name?> <span>(<?=$count?>)</span></a>
                  <ul class="accordion-list-content">
                  </ul>
                </li>
              <?php endforeach; ?>


            </ul>
          </div>
          <div class="shop-widget">
                    <h4>được yêu thích</h4>
                    <?php $product = backend\models\Product::find()->limit(4)->all(); ?>
                    <ul class="popular-product">
                        <?php foreach ($product as $item): ?>
                        <li>
                        <img src="/cafe/backend/web/<?=$item->image?>" alt="img" style="width: 50px;height: 50px">
                        <div>
                            <h6><a href="#"><?=$item->name?></a></h6>
                            <span><?php $s= number_format($item->price); echo $s.' VNĐ'; ?></span>
                        </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        </div>
      </div>
    </div>
  </div>
  <!--prize-->

  <!--end-footer-->
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/lightbox.js"></script>
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2196019-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
