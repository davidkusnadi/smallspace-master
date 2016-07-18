<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Account Setting</h1>
            
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
                        
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Email Notifications</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked="checked"> When a work order requested</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked="checked"> When a private messages is sent to you</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked="checked"> When an activity is done</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked="checked"> Newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Membership</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Current Plan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                       
                            <button class="btn btn-primary" type="submit"><i class="fa fa-chevron-right"></i>&nbsp;Save Configuration</button>
                           
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