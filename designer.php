<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Designer</h1>
            <span>Designer Name </span>
        </div>
        <div class="breadcrumb col-md-4">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">space</a>
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
           
            <!-- Sidebar-->
            <div class="col-md-3 sidebar">
                <!--widget contact us-->
                <div class="widget clearfix widget-contact-us">
                    
                    <div class="image-box circle-image">
                        <img alt="" src="images/designer/1.jpg" class="">
                    </div>
                    <br />
                    <div class="text-center">
                        <h4><a href="#">Alea Grande</a></h4>
                        <div>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>                                
                            <i class="fa fa-star-o"></i>                                
                            <i class="fa fa-star-o"></i> 
                        </div>
                       
                        
                        <p class="subtitle">10 Works Completed<br />100% On Time<br /><i class="fa fa-map-marker"></i> Jakarta</p>                            
                        <div class="social-icons social-icons-border m-t-10 text-center">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                <!--end: widget contact us-->

                <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
                    <h4 class="widget-title">Contact Information</h4>
                    <ul class="list-large list-icons">
                        <li><i class="fa fa-map-marker"></i>
                        <strong>Office Address:</strong> 795 Folsom Ave, Suite 600
                        <br>San Francisco, CA 94107</li>
                        <li><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890 </li>
                        <li><i class="fa fa-envelope"></i><strong>Email:</strong> alea@grande.com
                        </li>
                        <li><i class="fa fa-link"></i><strong>Website:</strong> <a href="#">www.aleagrande.com</a>
                        </li>
                        <li><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                        <br>Saturday, Sunday: <strong>Closed</strong>
                        </li>
                    </ul>
                </div>

                <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
                    <h4 class="widget-title">Show Room Address</h4>
                    <ul class="list-large list-icons">
                        <li><i class="fa fa-map-marker"></i>
                        <strong>Show Room Name 1</strong> <br />795 Folsom Ave, Suite 600
                        San Francisco, CA 94107</li>
                        <li><i class="fa fa-map-marker"></i>
                        <strong>Show Room Name 2</strong> <br />795 Folsom Ave, Suite 600
                        San Francisco, CA 94107</li>
                        <li><i class="fa fa-map-marker"></i>
                        <strong>Show Room Name 3</strong> <br />795 Folsom Ave, Suite 600
                        San Francisco, CA 94107</li>
                        
                    </ul>
                </div>
                <!--end: widget blog articles-->
            </div>
            <!-- END: Sidebar-->            

            <!-- post content -->
            <div class="post-content float-right col-md-9">



                <div id="tabs-01d1" class="tabs linetriangle triangle-simple">
                
                
                <ul class="tabs-navigation">
                    <li class="active"><a href="#About01d">Space</a> </li>
                    <li><a href="#Services01d">Portfolio</a> </li>                    
                </ul>
                <div class="tabs-content">
                    <div class="tab-pane active" id="About01d">
                        <h2>Featured Space By Alea Grande</h2>

                        <div class="isotope" data-isotope-item-space="3" data-isotope-col="3" data-isotope-item=".post-item">            
                        <!-- Blog image post-->
                        <?php $content = "Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna." ;?>
                            
                            <?php for($i=0;$i<6;$i++) { ?>
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
                            
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="Services01d">
                        <h2>Some Works That Alea Grande Has Done</h2>
                        <br />
                        <?php for($i=0;$i<6;$i++) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="portfolio-item design artwork">
                                <div class="portfolio-image effect social-links portfolio-image-landscape">
                                    <img src="images/space/4.jpg" alt="">
                                    <div class="image-box-content">
                                        <p>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="portfolio-description" style="width:100%">
                                    <h4 class="title"><a href="#">Westvista Apartment Studio Room</a></h4>
                                    <p><i class="fa fa-map-marker"></i> Jakarta <span style="float:right;"><i class="fa fa-calendar-o"></i> April 26, 2015</span></p>
                                </div>                                                
                            </div>
                        </div>
                        <?php } ?>
                        

                    </div>
                    
                    
                </div>

                
            </div>
        </div>
    </div>
</section>
<!-- END: SECTION -->



<?php include "0_footer.php"; ?>