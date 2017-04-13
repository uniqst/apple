<?php

/* @var $this yii\web\View */

$this->title = 'Продукт нэйм';

$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 description" >

           <div class="col-md-5">

                   <div class="flexslider">
                       <ul class="slides">
                           <li data-thumb="../../web/images/slide-1-image.png">
                               <img src="../../web/images/slide-1-image.png" />
                           </li>
                           <li data-thumb="../../web/images/slide-1-image.png">
                               <img src="../../web/images/slide-1-image.png" />
                           </li>
                           <li data-thumb="../../web/images/slide-1-image.png">
                               <img src="../../web/images/slide-1-image.png" />
                           </li>
                           <li data-thumb="../../web/images/slide-1-image.png">
                               <img src="../../web/images/slide-1-image.png" />
                           </li>
                       </ul>
                   </div>

           </div>
            <div class="col-md-7 single-right">
                <h3>The Best 3GB RAM Mobile Phone</h3>
<!--                <div class="rating1">-->
<!--					<span class="starRating">-->
<!--						<input id="rating5" type="radio" name="rating" value="5">-->
<!--						<label for="rating5">5</label>-->
<!--						<input id="rating4" type="radio" name="rating" value="4">-->
<!--						<label for="rating4">4</label>-->
<!--						<input id="rating3" type="radio" name="rating" value="3" checked>-->
<!--						<label for="rating3">3</label>-->
<!--						<input id="rating2" type="radio" name="rating" value="2">-->
<!--						<label for="rating2">2</label>-->
<!--						<input id="rating1" type="radio" name="rating" value="1">-->
<!--						<label for="rating1">1</label>-->
<!--					</span>-->
<!--                </div>-->
                <div class="description">
                    <h5><i>Description</i></h5>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui
                        ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="color-quality">
                    <div class="color-quality-left">
                        <h5>Color : </h5>
                        <ul>
                            <li><a href="#"><span></span></a></li>
                            <li><a href="#" class="brown"><span></span></a></li>
                            <li><a href="#" class="purple"><span></span></a></li>
                            <li><a href="#" class="gray"><span></span></a></li>
                        </ul>
                    </div>
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                            </div>
                        </div>
                        <!--quantity-->
<!--                        <script>-->
<!--                            $('.value-plus1').on('click', function(){-->
<!--                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;-->
<!--                                divUpd.text(newVal);-->
<!--                            });-->
<!---->
<!--                            $('.value-minus1').on('click', function(){-->
<!--                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;-->
<!--                                if(newVal>=1) divUpd.text(newVal);-->
<!--                            });-->
<!--                        </script>-->
                        <!--quantity-->

                    </div>
                    <div class="clearfix"> </div>
                </div>
<!--                <div class="occasional">-->
<!--                    <h5>RAM :</h5>-->
<!--                    <div class="colr ert">-->
<!--                        <div class="check">-->
<!--                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>3 GB</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="colr">-->
<!--                        <div class="check">-->
<!--                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>2 GB</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="colr">-->
<!--                        <div class="check">-->
<!--                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>1 GB</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clearfix"> </div>-->
<!--                </div>-->
<!--                <div class="simpleCart_shelfItem">-->
<!--                    <p><span>$460</span> <i class="item_price">$450</i></p>-->
<!--                    <form action="#" method="post">-->
<!--                        <input type="hidden" name="cmd" value="_cart">-->
<!--                        <input type="hidden" name="add" value="1">-->
<!--                        <input type="hidden" name="w3ls_item" value="Smart Phone">-->
<!--                        <input type="hidden" name="amount" value="450.00">-->
<!--                        <button type="submit" class="w3ls-cart">Add to cart</button>-->
<!--                    </form>-->
<!--                </div>-->
            </div>

            <div class="clearfix"> </div>

            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Характеристики</a></li>
<!--                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>-->
<!--                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active" id="home">...</div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
<!--                    <div role="tabpanel" class="tab-pane" id="messages">...</div>-->
<!--                    <div role="tabpanel" class="tab-pane" id="settings">...</div>-->
                </div>

            </div>
        </div>
        <div class="col-md-3 categories">
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



    </div>





</div>

