<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Search Result</h1>
            <span>"Studio Apartment" </span>
        </div>
        <div class="breadcrumb col-md-4">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Search Result</a>
                </li>
                
            </ul>
        </div>
    </div>
</section>
<!-- END: PAGE TITLE -->


<!-- CONTENT -->
<section class="content">
    <div class="container">
        
            <div class="col-md-9 post-content section-search-result">

                <div class="row">
                <div class="col-md-12" style="padding:50px;">

                    <h4>Search Result For "Studio Apartment" | 56 Space Found</h4>
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

                    <!-- Post item-->
                    <div class="isotope" data-isotope-item-space="3" data-isotope-col="3" data-isotope-item=".post-item">            
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

                </div>
                </div>
                
            </div>
            <!-- END: Blog post-->

            <!-- Sidebar-->
            <div class="sidebar sidebar-modern col-md-3">


                <div class="widget clearfix widget-newsletter">
                
                    <h4 class="widget-title">Search</h4>
                    
                    <div class="input-group">
                        <input type="email" class="form-control required email" placeholder="Enter your keyword">
                        <span class="input-group-btn">
                            <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span> 
                    </div>
                    

                </div>

                <!--widget tags -->
                <div class="widget clearfix widget-tags">
                    <h4 class="widget-title">Popular Tags</h4>
                    <div class="tags">
                        <a href="#">Minimalist</a>
                        <a href="#">Small Space</a>
                        <a href="#">Small Room</a>
                        <a href="#">Studio</a>
                        <a href="#">Apartment</a>
                        <a href="#">Interior Design</a>
                        
                    </div>
                </div>
                <!--end: widget tags -->
               

                <!--widget contact us-->
                <div class="widget clearfix widget-contact-us">
                    <h4 class="widget-title">Useful Tips</h4>
                    <ul>
                        <li>Thoroughly learn design specification and dimension before making decision </li>
                        <li>Explore the designer's profile and portfolio to confirm your interest</li>
                        
                        
                    </ul>
                </div>
                <!--end: widget contact us-->

                <!--widget contact us-->
                <div class="widget clearfix widget-contact-us">
                    <h4 class="widget-title">Standard Unit Size</h4>
                    <table class="table table-bordered">
                        <tr>
                            <th>Studio</th>
                            <td>25 m2</td>
                        </tr>
                        
                        <tr>
                            <th>1-Bed Room</th>
                            <td>40 m2</td>
                        </tr>
                        <tr>
                            <th>2-Bed Room</th>
                            <td>55 m2</td>
                        </tr>
                                                                
                        
                    </table>
                </div>
                <!--end: widget contact us-->

            </div>
            <!-- END: Sidebar-->
        
    </div>
</section>
<!-- END: SECTION -->


<?php include "0_footer.php"; ?>