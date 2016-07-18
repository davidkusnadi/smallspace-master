<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Messages</h1>
            
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
            <div class="post-content float-right col-md-9">
                
                <div class="row">

                    
                    <div class="col-md-12">
                        <h4> Your Message With Alea Grande</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    
                                    <textarea class="form-control required" name="comment" rows="2" placeholder="Enter Messages" id="comment" aria-required="true"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                                <button class="btn btn-primary" type="submit"><i class="fa fa-chevron-right"></i>&nbsp;Send Messages</button>
                               
                            </div>
                        </div>
                        <br />

                        <div class="content-messages content-messages-style">
                            <?php for($i=0;$i<3;$i++) { ?>
                            <div class="comment">
                                <a href="#" class="pull-left">
                                    <img alt="" src="images/designer/1.jpg" class="avatar avatar-comment">
                                </a>
                                <div class="media-body media-body-green">
                                    <h4 class="media-heading">Alea Grande</h4>
                                    <p class="time">Feb 25, 2015 at 9:30 PM</p>
                                    <p>Maecenas nec iaculis turpis, eget congue massa.</p>
                                    
                                </div>
                            </div>

                            <div class="comment">
                                <a href="#" class="pull-right">
                                    <img alt="" src="images/designer/1.jpg" class="avatar avatar-comment">
                                </a>
                                <div class="media-body media-body-right media-body-cream">
                                    <h4 class="media-heading">You</h4>
                                    <p class="time">Feb 25, 2015 at 9:30 PM</p>
                                    <p>Maecenas nec iaculis!</p>
                                    
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



<?php include "0_footer.php"; ?>