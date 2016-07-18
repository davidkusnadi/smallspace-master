<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>My Album</h1>
            
        </div>
        <div class="breadcrumb col-md-4">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">My Account</a>
                </li>
                
            </ul>
        </div>
    </div>
</section>
<!-- END: PAGE TITLE -->


<!-- SHOP PRODUCT PAGE -->
<section id="product-page" class="product-page p-b-0">
    <div class="container">
        <div class="row">

            <!-- Post content -->
            <div class="post-content float-right product col-md-9">
                
            
                <div class="text-center">
                    <div class="pagination-wrap">
                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#">
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>

                                </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li class="active"><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#">
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Blog post-->

                <div class="row">
                    <!-- Post item-->
                    <div class="isotope" data-isotope-item-space="3" data-isotope-col="3" data-isotope-item=".post-item">            
                        <!-- Blog image post-->
                        <?php $content = "Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna." ;?>
                        
                        <?php for($i=0;$i<2;$i++){ ?>

                            <div class="post-item">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="images/space/1.jpg">
                                    </a>
                                </div>
                                <div class="post-content-details">
                                    <div class="post-title">
                                        <h3><a href="space-view.php">Bantam Studio Sofa - Mid Century Modern </a></h3>
                                    </div>
                                    <div class="post-info">
                                        <span class="post-autor">Post by: <a href="#">Kristina Miletieva </a></span>                        
                                    </div>
                                    <div class="post-description">
                                        <p><?php echo substr($content,0,100); ?><br />
                                            <a class="button small green button-3d" href="#">view space</a>
                                            <a class="love-button"><i class="fa fa-heart"></i></a>
                                            
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="post-date-day">16</span>
                                        <span class="post-date-month">Jan</span>
                                        <span class="post-date-year">2015</span>
                                    </div>

                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-comments-o"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog slider post-->
                            <div class="post-item">

                                <div class="post-slider">
                                    <div class="carousel" data-carousel-col="1">
                                        <img alt="image" src="images/space/2.jpg">
                                        <img alt="image" src="images/space/3.jpg">
                                        <img alt="image" src="images/space/17.jpg">
                                    </div>
                                </div>

                                <div class="post-content-details">
                                    <div class="post-title">
                                        <h3><a href="space-view.php">Our Favorite Fixer Upper Kitchen Makeovers</a></h3>
                                    </div>
                                    <div class="post-info">
                                        <span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
                                        
                                    </div>
                                    <div class="post-description">
                                        <p><?php echo substr($content,0,100); ?><br /><a class="button small green button-3d rounded" href="#">view space</a>
                                        <a class="love-button"><i class="fa fa-heart"></i></a></p>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="post-date-day">16</span>
                                        <span class="post-date-month">Jan</span>
                                        <span class="post-date-year">2015</span>
                                    </div>

                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-comments-o"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="post-item">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="images/space/4.jpg">
                                    </a>
                                </div>
                                <div class="post-content-details">
                                    <div class="post-title">
                                        <h3><a href="space-view.php">Xian Horticultural Masterplan - Serie Architects </a></h3>
                                    </div>
                                    <div class="post-info">
                                        <span class="post-autor">Post by: <a href="#">Kristina Miletieva </a></span>                        
                                    </div>
                                    <div class="post-description">
                                        <p><?php echo substr($content,0,100); ?><br /><a class="button small green button-3d" href="#">view space</a><i class="fa fa-heart love-button-active"></i></p>

                                    </div>
                                </div>
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="post-date-day">16</span>
                                        <span class="post-date-month">Jan</span>
                                        <span class="post-date-year">2015</span>
                                    </div>

                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-comments-o"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                    <div class="post-comments">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span class="post-comments-number">324</span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        <?php } ?>  

                    </div>

                </div>


                <div class="text-center">
                    <div class="pagination-wrap">
                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#">
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>

                                </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li class="active"><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#">
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Blog post-->
                
            </div>
            <!-- Post content -->
            <?php include "0_left.php"; ?>
            
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCT PAGE -->




<?php include "0_footer.php"; ?>