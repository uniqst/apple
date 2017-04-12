<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 categories">
            <ul>
                <h3>Categories</h3>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Desktop</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Sports &amp; Fitness</a></li>
                <li><a href="#">Footwear</a></li>
                <li><a href="#">Jewellery</a></li>
                <li><a href="#">Clothing</a></li>
                <li><a href="#">Home Decor &amp; Kitchen</a></li>
                <li><a href="#">Beauty &amp; Healthcare</a></li>
                <li><a href="#">Toys, Kids &amp; Babies</a></li>
            </ul>
        </div>

        <div class="col-sm-9 slider">
            <div class="slide-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/new-pic4.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img_chania2.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img_flower.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="img_flower2.jpg" alt="Flower">
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <div class="content_top">
        <div class="heading">
            <h3>New Products</h3>
        </div>

        <div class="see pull-right">
            <p><a href="#">See all Products</a></p>
        </div>
    </div>

    <div class="row products">
        <div class="col-sm-6 col-md-3">
            <div class="product">

                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$620.87</span></p>
                    </div>
                    <div class="add-cart">
                        <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">

                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$620.87</span></p>
                    </div>
                    <div class="add-cart">
                        <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">

                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$620.87</span></p>
                    </div>
                    <div class="add-cart">
                        <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">

                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$620.87</span></p>
                    </div>
                    <div class="add-cart">
                        <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>

    </div>



    <!--    <div class="content">-->
    <!--        <div class="section group">-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$620.87</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic2.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$899.75</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic3.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$599.00</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic4.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$679.87</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!---->
    <!--        </div>-->
    <!--    </div>-->


</div>

