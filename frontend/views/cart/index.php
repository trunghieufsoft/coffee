<?php use yii\widgets\ActiveForm; ?>
<script src="js/jquery.min.js"></script>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-10 produti">
                <h4>GIỎ HÀNG</h4>
            </div>
            <div class="col-md-2 cart">
                <h4><a href="index.php?r=cart">Giỏ hàng (<?=$total?> items)</a></h4>
                <ul>
                    <li><a href="index.php">Trang chủ /</a></li>
                    <li><a href="index.php">Giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- shop-page -->
<div class="container checking-area">
    <div class="row">
        <div class="col-md-9 cart-area">
            <div class="sixteen columns cart-section oflow">

                <!-- Cart -->
                <table class="table cart-table responsive-table">
                <tr>
                    <th>
                         Hình ảnh
                    </th>
                    <th>
                         Tên
                    </th>
                    <th>
                         Giá
                    </th>
                    <th>
                         Số lượng
                    </th>
                    <th>
                         Tổng tiền
                    </th>
                    <th>
                    </th>
                </tr>

                <!-- Item #1 -->
                <?php if(!$cartstore):?>
                    <tr>
                        <td> <h3 style="color: red">Chưa có sản phẩm nào được thêm vào giỏ!</h3></td>
                    </tr>
                    
                <?php else: ?>
                <?php foreach($cartstore as $product): ?>
                <tr>
                    <td>
                    	 <img src="/cafe/backend/web/<?=$product->image?>" alt="img" style="width: 80px;height: 76px">
                        
                    </td>
                    <td class="cart-title">
                        <a href="#"><?=$product->name?></a>
                    </td>
                    <td>
                         <?php $s= number_format($product->price); echo $s.' VNĐ'; ?>
                    </td>
                    <td>
                        <form action="index.php?r=cart/update&id=<?=$product->id?>" class="form-inline" method="post">
                            
                            <input type="number" min="1" max="100" name="quantity" value='<?=$product->quantity?>' class="qty"/>
                         
                            <input type="submit" value="Cập nhật" style="margin-left: 5px;height: 32px" class="btn btn-warning">
                        </form>
                    </td>
                    <td class="cart-total">
                         <?php echo number_format($product->price * $product->quantity).' VNĐ'; ?>
                    </td>
                    <td>
                    	
                        <a href="index.php?r=cart/remove&id=<?=$product->id?>" class="glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                
            <?php endforeach; ?>
                <?php endif; ?>
                <!-- Item #2 -->
                
                </table>
                <div class="row">

				<div class="col-md-6 cart-totals">
                    <table class="table cart-table test">
                    <tbody>
                    <tr>
                        <th>
                             Tiền giỏ hàng
                        </th>
                        <td>
                            <strong><?php echo number_format($cost).' VNĐ'; ?></strong>
                        </td>
                    </tr>
                    <tr>
                        <th>
                             Shipping</i>
                        </th>
                        <td>
                            Free Shipping
                             
                        </td>
                    </tr>
                    <tr>
                        <th>
                             Tổng cộng
                        </th>
                        <td>
                        	<?php echo number_format($cost).' VNĐ'; ?>
                            
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    <br>
                    
                </div>

                <div class="pull-right cart-buttons">
                	
                	<a href="index.php">Tiếp tục mua hàng</a>
                	<a href="index.php?r=cart/clear">Xóa giỏ hàng</button></a>
                	<a href="index.php?r=checkout">Đặt hàng</a>

                </div>
                </div>
                <br>
                <br>
            </div>
            
            <!-- Start -->
            <!-- end -->
        </div>
        <!-- Sidebar -->
        <div class="col-md-3 shop-sidebar">
            <div class="sidebar-widgets">
                <div class="shop-widget">
                    <h4>MENU</h4>
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
