 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'welcome/admin'?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                     <!--dropdown-->
                     <li>
                        <a href="<?php echo base_url().'admin/barang'?>"><span class="fa fa-shopping-cart"></span> Data Produk</a>
                    </li>
                    <!--ending dropdown-->
                    
                    <li>
                        <a href="<?php echo base_url().'admin/penjualan/pemesanan'?>"><span class="fa fa-cubes"></span> Pemesanan</a>
                    </li>
                    <?php }?>
                    
                     <li>
                        <a href="<?php echo base_url().'administrator/logout'?>"><span class="fa fa-sign-out"></span> Logout</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" method="post" action="<?php echo base_url().'admin/barang/search'?>">
                <div class="form-group">
        <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search"> <button class="btn btn-outline-white btn my-0 ml-sm-2" type="submit"> Search</button>
      </div>
      
    </form>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>