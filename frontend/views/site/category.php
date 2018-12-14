
<!--end-navbar-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4>Menu</h4>
            </div>
            <div class="col-md-2 cart">
                <h4><a href="index.php?r=cart">Giỏ hàng (<?=$total?> items)</a></h4>
                <ul>
                    <li><a href="#">Trang chủ /</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- shop-page -->
<div class="container">
    <div class="row content">
        <div class="col-md-9 shop-section">
            <div class="row">
                <div class="col-md-12 latest">
                    <h4 class="pull-left"><?php echo 'Có tổng cộng '.$count.' món'; ?></h4>
                    <ul class="pagination-lít pull-right">
                        
                    </ul>
                </div>
            </div>
            <br>
            <!--articles-->
            <div class="row articles">
                <?php foreach($products as $product):?>
                <div class="col-md-4 col-sm-6">
                    <a href="index.php?r=site/view&id=<?=$product->id?>">
                    <img src="/cafe/backend/web/<?=$product->image?>" alt="img" style="width: 263px;height: 257px">
                    <div class="text">
                        <span>
                        <?=$product->name?> </span>
                        <p>
                             <?php $s= number_format($product->price); echo 'Giá : '.$s.' VNĐ'; ?>
                        </p>
                    </div>
                </a>
                </div>
            <?php endforeach;?>
            </div>
        </div>
        <!--end-articles-->
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
                
            </div>
        </div>
    </div>
</div>
<!--prize-->

<!--end-prize-->
<!--footer-->
