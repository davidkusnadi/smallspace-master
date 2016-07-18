<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Become A Designer</h1>
            
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
                        <h3> Become our partner and help our thousands customer to make their dream small room comes true!!</h3>
                        <p>
                            Are you an Interior Design professional? Do you have hard times fulfilling customer expectation? 
                            Or do you think that there must be a way to simplify your work? <br />
                            Congratulasion, you are on the right track! 
                        </p>
                        <img src="images/designer-benefit.jpg" style="width:100%;" />
                    </div>
                </div>
                


                <!-- IF REQUEST NOT SUBMITTED -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tell us about your company</h4>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="name">Company Name</label>
                            <input type="text" class="form-control required" placeholder="Enter Company Name" id="name" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="name">Website</label>
                            <input type="text" class="form-control required" placeholder="Enter Website" id="name" aria-required="true">
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="name">Phone</label>
                            <input type="text" class="form-control required" placeholder="Enter Phone" id="name" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="email">City</label>
                            <select class="form-control">
                                <option>Jakarta</option>
                                <option>Tangerang</option>
                                <option>Bogor</option>
                                <option>Bekasi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="upper" for="comment">Full Address</label>
                            <textarea class="form-control required" name="comment" rows="2" placeholder="Enter Address" id="comment" aria-required="true"></textarea>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       
                        <button class="btn btn-primary" type="submit"><i class="fa fa-chevron-right"></i>&nbsp;Send Request</button>
                       
                    </div>
                </div>
                <!-- IF REQUEST NOT SUBMITTED -->


                <!-- IF REQUEST HAS BEEN SUBMITTED -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Thank you, your request has been submitted!!</h4>
                        <p>We have accept your request and trying to working on your information. <br />We will contact you as soon as possible.</p>
                    </div>
                    
                </div>
                <!-- IF REQUEST HAS BEEN SUBMITTED -->
            </div>
            <!-- Post content -->
            <?php include "0_left.php"; ?>
            
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCT PAGE -->



<?php include "0_footer.php"; ?>