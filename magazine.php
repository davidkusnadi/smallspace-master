<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Magazines</h1>
            
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
        <div class="row">
            <!-- Blog post-->
            <div class="post-content col-md-9">
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
                
                <div class="isotope" data-isotope-item-space="3" data-isotope-col="2" data-isotope-item=".post-item">
                <?php $content = "Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna." ;?>
                <?php for($i=0;$i<5;$i++){ ?>
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
                                <p><?php echo substr($content,0,100); ?><br /><a class="button small brown-light button-3d" href="#">Read More</a></p>
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
            <!-- Sidebar-->
            <div class="sidebar sidebar-modern col-md-3">
                <!--widget newsletter-->
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

                <!--widget tweeter-->
                <div class="widget clearfix widget-tweeter">
                    <h4 class="widget-title">Recent Tweets</h4>
                    <ul class="list-tweets list-medium">
                        <li>I just closed a deal in 14 minutes on EchoSign eSignature solution <a href="https://t.co/LNw6ludJ3S">https://t.co/LNw6ludJ3S</a>
                            <span class="list-tweets-date">10 days ago</span>
                        </li>
                        <li>
                            I love Dropbox because Simple it is the best for saving all important files that worth! <a href="https://t.co/EQvlz88Xht ">https://t.co/EQvlz88Xht </a>
                            <span class="list-tweets-date">10 days ago</span>
                        </li>
                    </ul>
                </div>
                <!--end: widget tweeter-->

                
                

            </div>
            <!-- END: Sidebar-->
        </div>
    </div>
</section>
<!-- END: SECTION -->


<?php include "0_footer.php"; ?>