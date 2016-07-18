<?php include "0_header.php"; ?>

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax text-light background-overlay-dark" style="background: url('images/parallax/1.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Work Order History</h1>
            
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
                    
                    

                    <div id="tabs-13" class="tabs tabs-horizontal color">
                        
                            <ul class="tabs-navigation">
                                <li class="active"><a href="#About13"><i class="fa fa-home"></i>In Progress</a> </li>
                                <li><a href="#Services13"><i class="fa fa-home"></i>Finished</a> </li>
                                <li><a href="#Choose13"><i class="fa fa-home"></i>Canceled</a> </li>
                                
                            </ul>
                        <div class="tabs-content">
                            <div class="tab-pane active" id="About13">
                                <h4> Work In Progress</h4>
                        
                                <table class="table table-bordered table-with-style">
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Date</th>
                                        <th width="25%">Space</th>
                                        <th width="25%">Designer</th>
                                        <th>Amount</th>
                                        <th width="20%">Status</th>
                                        <th>Details</th>
                                    </tr>
                                    <?php for($i=0;$i<5;$i++){ ?>
                                    <tr>
                                        <td>7684</td>
                                        <td>2016-04-05</td>
                                        <td>#758</td>
                                        <td>Ale Grande</td>
                                        <td align="right">15,684.999</td>
                                        <td>New Order</td>
                                        <td align="center"><a href="account-wo-det.php"><i class="fa fa-search"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    
                                </table>
                            </div>
                            <div class="tab-pane" id="Services13">
                                <h4> Work Finished</h4>
                                <p>You don't have any finished work order</p>
                                <table class="table table-bordered table-with-style">
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Date</th>
                                        <th width="25%">Space</th>
                                        <th width="25%">Designer</th>
                                        <th>Amount</th>
                                        <th width="20%">Date Finished</th>
                                        <th>Details</th>
                                    </tr>
                                    <tr>
                                        <td>7684</td>
                                        <td>2016-04-05</td>
                                        <td>#758</td>
                                        <td>Ale Grande</td>
                                        <td align="right">15,684.999</td>
                                        <td>2016-04-05</td>
                                        <td align="center"><a href="account-wo-det.php"><i class="fa fa-search"></i></a></td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="tab-pane" id="Choose13">
                                <h4> Work Canceled</h4>
                                <p>You don't have any canceled work order</p>
                                <table class="table table-bordered table-with-style">
                                    <tr>
                                        <th width="1">#</th>
                                        <th>Date</th>
                                        <th width="25%">Space</th>
                                        <th width="25%">Designer</th>
                                        
                                        <th width="30%">Notes</th>
                                        <th>Details</th>
                                    </tr>
                                    <tr>
                                        <td>7684</td>
                                        <td>2016-04-05</td>
                                        <td>#758</td>
                                        <td>Ale Grande</td>
                                        
                                        <td>The price change to high</td>
                                        <td align="center"><a href="account-wo-det.php"><i class="fa fa-search"></i></a></td>
                                    </tr>
                                    
                                </table>
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