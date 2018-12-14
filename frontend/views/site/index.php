<div class="main-flexslider">
    <ul class="slides">
        <li class="slides"><img src="images/4.jpg" alt="slide 01" style="width: 100%; height: 460px">
        <div class="slide-caption">
        </div>
        </li>

        <li class="slides"><img src="images/2.jpg" alt="slide 01" style="width: 100%; height: 460px">
        <div class="slide-caption">
        </div>
        </li>

        <li class="slides"><img src="images/3.jpg" alt="slide 01" style="width: 100%; height: 460px">
        <div class="slide-caption">
        </div>
        </li>

        <li class="slides"><img src="images/1.jpg" alt="slide 01" style="width: 100%; height: 460px">
        <div class="slide-caption">
        </div>
        </li>
        
    </ul>
</div>
<!--end-flex-slider-->
<!--Icon Blocks-->
<div class="container">
    <div class="icon-blocks">
        <div class="col-md-4">
            <p>
                <i class="fa fa-group"></i>đội ngũ nhân viên nhiệt tình
            </p>
        </div>
        <div class="col-md-4">
            <p>
                <i class="fa fa-coffee"></i>không gian sang trọng
            </p>
        </div>
        <div class="col-md-4">
            <p>
                <i class="fa fa-globe"></i>giao hàng tận nơi
            </p>
        </div>

    </div>
</div>
<!--end Icon Blocks-->
<!--articles-->
<div class="container">
    <div class="row articles">
        <?php foreach($products as $product): ?>
        <div class="col-md-3 col-sm-6">
            <a href="index.php?r=site/view&id=<?=$product->id?>">
            <img src="/backend/web/<?=$product->image?>" alt="img" style="width: 263px;height: 257px">
            <div class="text">
                <span style="font-weight: bold;color: blue">
                <?=$product->name?> </span>
                <p>
                     <?php $s= number_format($product->price); echo 'Giá : '.$s.' VNĐ'; ?>
                </p>
                <button class="btn btn-warning">Order ngay</button>
            </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!--end-articles-->
<!-- partners box -->
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <ul class="partner-list">
                    <li><img alt="" src="images/client1.png"></li>
                    <li><img alt="" src="images/client2.png"></li>
                    <li><img alt="" src="images/client3.png"></li>
                    <li><img alt="" src="images/client4.png"></li>
                </ul>
            </div>
            <div class="item">
                <ul class="partner-list">
                    <li><img alt="" src="images/client1.png"></li>
                    <li><img alt="" src="images/client2.png"></li>
                    <li><img alt="" src="images/client3.png"></li>
                    <li><img alt="" src="images/client4.png"></li>
                </ul>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
    </div>
</div>
<!--end-partners box -->
<!--articles-->
<div class="container">
    <div class="row articles">
        
    </div>
</div>
<!--end-articles-->
<!--prize-->
