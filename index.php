<?php include "0_header.php"; ?>

<!-- CONTENT -->
<section class="content" style="padding-top:30px!important">
    <div class="container">
        <!-- Blog post-->
        <div class="isotope" data-isotope-item-space="3" data-isotope-col="4" data-isotope-item=".post-item">            
			<!-- Blog image post-->
            <?php $content = "Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna." ;?>
            
            <?php for($i=0;$i<5;$i++){ ?>

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
                            <span style="color:#f00;font-weight:bold;">1,500,000 / m<sup>2</sup></span><br />
                            <span class="post-autor">Post by: <a href="#">Kristina Miletieva </a></span>                        
                        </div>
                        <div class="post-description">
                            <p><?php echo substr($content,0,100); ?><br />
                                <a class="button small green button-3d" href="#">view space</a>
                                <a class="love-button"><i class="fa fa-heart-o"></i></a>
                                
                                
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
                            <a class="love-button"><i class="fa fa-heart-o"></i></a></p>
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


                <div class="post-item">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="images/blog/1.jpg">
                        </a>
                    </div>
                    <div class="post-content-details">
                        <div class="post-title">
                            <h3><a href="magazine-view.php">5 Kitchens and Baths Display Texture and Taste</a></h3>
                        </div>
                        <div class="post-info">
                            <span class="post-autor">Post by: <a href="#">Georgina McWhirter</a></span>                        
                        </div>
                        <div class="post-description">
                            <p><?php echo substr($content,0,100); ?><br /><a class="button small brown-light button-3d" href="magazine-view.php">Read More</a></p>
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
                        
                    </div>
                </div>  
            <?php } ?>  

        </div>

        <!-- pagination nav -->
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
</section>
<!-- END: SECTION -->

<?php include "0_footer.php"; ?>