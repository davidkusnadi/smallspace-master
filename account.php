<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>MY ACCOUNT</h1>
            
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
<section>
    <div class="container">
        <div class="row">
            <!-- Post content -->
            <div class="float-right product col-md-9">
                <div class="row">
                    <div role="alert" class="alert alert-success"> <strong>Well done!</strong> You successfully update your profile. </div>
                </div>
                <div class="row">

                    <div class="col-xs-12 col-md-4">
                        <div class="image-box"> <img src="images/user/1.jpg" alt=""> </div>
                        <div class="image-box-description ">
                            <h4>David Kusnadi <i class="fa fa-mars"></i></h4>
                            
                            <a href="#" data-target="#modal-1" data-toggle="modal" class="button green button-3d fullwidth rounded"><span>Change Profile</span></a>
                            <a href="#" data-target="#modal-2" data-toggle="modal" class="button red-dark button-3d fullwidth rounded"><span>Change Picture</span></a>
                            <a href="#" data-target="#modal-3" data-toggle="modal" class="button blue-dark button-3d fullwidth rounded"><span>Change Password</span></a>
                            
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-md-8">
                        
                        <h4> Welcome Back David !</h4>
                        
                        <table class="table table-bordered">
                            <tr>
                                <td width="50%">Email</td>
                                <td>kusnadi.david90@ymail.com</td>
                            </tr>
                            <tr>
                                <td width="50%">Birthday</td>
                                <td>4 Apr 1990</td>
                            </tr>
                            <tr>
                                <td width="50%">Member Since</td>
                                <td>4 Apr 1990</td>
                            </tr>
                            <tr>
                                <td width="50%">Last Login</td>
                                <td>4 Apr 1990</td>
                            </tr>
                        </table>
                        <div class="accordion toggle fancy radius clean">
                            <div class="ac-item ac-active">
                                <h5 class="ac-title"><i class="fa fa-envelope"></i>You Have 3 Unread Messages </h5>
                                <div class="ac-content">
                                    <a href="#">Receive 2 new messages from Adrian</a><br />
                                    <a href="#">Receive 1 new message from Alea Grande</a>
                                </div>
                            </div>
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-money"></i>You Have 1 Unpaid Order</h5>
                                <div style="display: none;" class="ac-content">
                                    <a href="#">Order #67 has not been paid</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

                 <div class="row">
                    <div class="accordion toggle fancy radius clean">
                        <div class="ac-item ac-active">
                            <h5 class="ac-title"><i class="fa fa-info-circle"></i>3 Notifications</h5>
                            <div class="ac-content">
                                <div role="alert" class="alert alert-warning alert-warning-2"> <strong>Love!</strong> Febri loved your design - Bantam Studio Sofa - Mid Century Modern (#675)</div>
                                <div role="alert" class="alert alert-warning alert-warning-2"> <strong>Work Order!</strong> Marry approved final work order #785</div>
                                <div role="alert" class="alert alert-warning alert-warning-2"> <strong>Work Order!</strong> Marry approved final work order #785</div>
                                <a href="#" style="margin-top:10px;float:left">View all notifications &raquo;</a>
                            </div>
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
                <h4 id="modal-label-3" class="modal-title">Change Profile</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="upper" for="name">Full Name</label>
                            <input type="text" class="form-control required" placeholder="Enter Full Name " id="name" aria-required="true">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="email">Gender</label>
                            <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="company">Birtday</label>
                            <input type="text" class="form-control required" placeholder="Enter Birthday" id="roomSize" aria-required="true">
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


<div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
<form action="purchase-request.php">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="modal-label-3" class="modal-title">Change Picture</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="upper" for="name">File</label>
                            <input type="file" class="form-control required" placeholder="File Name" id="name" aria-required="true">
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


<div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
<form action="purchase-request.php">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="modal-label-3" class="modal-title">Change Password</h4>
            </div>
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="upper" for="email">Old Password</label>
                            <input type="password" class="form-control required" placeholder="Enter Old Password" id="roomSize" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="upper" for="email">New Password</label>
                            <input type="password" class="form-control required" placeholder="Enter New Password" id="roomSize" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="upper" for="email">Confirm Password</label>
                            <input type="password" class="form-control required" placeholder="Confirm New Password" id="roomSize" aria-required="true">
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