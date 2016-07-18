<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Space Collection</h1>
            
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
                
                <div class="row">

                    
                    <div class="col-md-12">
                        
                        <a href="account-designer-space-add.php" class="button green button-3d small rounded"><span><i class="fa fa-plus"></i> Add Space</span></a>
                        
                        <div class="isotope" data-isotope-item-space="3" data-isotope-col="3" data-isotope-item=".post-item">            
                        <!-- Blog image post-->
                        <?php $content = "Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit. Nulla facilisi. Pellentesque sed nibh a quam accumsan dignissim quis quis urna." ;?>
                            
                            <?php for($i=0;$i<6;$i++) { ?>
                            <div class="post-item">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="images/space/10.jpg">
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

                </div>

                
            </div>
            <!-- Post content -->
            <?php include "0_left.php"; ?>
            
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCT PAGE -->


<div class="modal fade" id="modal-1" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
<form action="purchase-request.php">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="modal-label-3" class="modal-title">Add Show Room</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="name">Show Room Name</label>
                            <input type="text" class="form-control required" placeholder="Enter Show Room Name " id="name" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="email">City</label>
                            <select class="form-control">
                                <option>Jakarta</option>
                                <option>Surabaya</option>
                                
                            </select>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="upper" for="comment">Address</label>
                            <textarea class="form-control required" name="comment" rows="2" placeholder="Enter Address" id="comment" aria-required="true"></textarea>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-chevron-right"></i>&nbsp;Save</button>
            </div>
        </div>
    </div>
</form>
</div>

<?php include "0_footer.php"; ?>