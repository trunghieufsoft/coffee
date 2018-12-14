<?php use yii\helpers\Html; ?>
<!--end-navbar-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4><?php echo $product->name ?></h4>
            </div>
            <div class="col-md-2 cart">
                <h4><a href="index.php?r=cart">Giỏ hàng (<?=$total?> items)</a></h4>
                <ul>
                    <li><a href="index.php">Trang chủ /</a></li>
                    <li><a href="index.php">Menu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- shop-page -->
<div class="container content">
    <div class="row">
        <div class="col-md-9 white-bg">
            <!-- Single Product -->
            <div class="single-product cold-md-12">
                <div class="col-md-6">
                    <br>
                   <img src="/backend/web/<?=$product->image?>" alt="img" style="width: 350px;height: 250px">
                </div>
                <div class="product-details col-md-6">
                    <h1><?=$product->name?></h1>
                    <p class="price">
                         <?php $s= number_format($product->price); echo 'Giá : '.$s.' VNĐ'; ?>
                    </p>
                    
                    <p>
                         <?=$product->description?>
                    </p>
                    <form action="index.php?r=cart/add-cart&id=<?=$product->id?>" method="POST">
                       
                        <div class="qtyminus">
                        </div>
                        <input type="number" name="quantity" value="1" class="qty" min="1" max="100">
                        
                           <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-warning" style="margin-left: 10px">
                        

                    </form>
                    
                    <!-- <a href="index.php?r=cart/add-cart&id=<?=$product->id?>">Thêm vào giỏ hàng</a> -->
                    <hr>
                
                    <div class="reviews">
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            <div class="col-md-12 tabs">
                <div class="bs-example">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1" data-loading-text="Loading...">Category</a></li>
                            <li><a data-toggle="tab" href="#tab2" data-loading-text="Loading...">Khuyến mãi</a></li>
                            <li><a data-toggle="tab" href="#tab3" data-loading-text="Loading...">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active fade in">
                                <p>
                                     <?php echo $product->category->name ?>
                                </p>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <p>
                                     Mô tả thêm...
                                </p>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <p>
                                     Mô tả thêm...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--articles-->
            
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

<!--end-prize-->
<!--footer-->
