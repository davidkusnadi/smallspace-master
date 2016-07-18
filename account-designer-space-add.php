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
            <div class="post-content float-right product col-md-9">
                
                <div class="row">

                    
                    <div class="col-md-12">
                        
                        
                        <table class="table table-bordered table-with-style">
                            <tr>
                                
                                <th>Date</th>
                                <th width="25%">With</th>
                                <th>Last Reply</th>
                                <th width="10%">Conversation</th>
                            </tr>
                            <?php for($i=0;$i<10;$i++) { ?>
                            <tr>
                                
                                <td>2016-04-05</td>
                                <td>Alea Grande</td>
                                <td>Alea Grande <em class="text-10">at 15-03-2016 14:24:33</em></td>
                                <td align="center"><a href="account-message-view.php"><i class="fa fa-search"></i></a></td>
                            </tr>
                            <?php } ?>
                            
                        </table>


                    </div>

                </div>
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
            <!-- Post content -->
            <?php include "0_left.php"; ?>
            
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCT PAGE -->



<?php include "0_footer.php"; ?>