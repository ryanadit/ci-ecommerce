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
                <a class="navbar-brand" href="<?php echo base_url().'welcome'?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <!--dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Pemesanan"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'web/penjualan'?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Pemesanan</a></li> 
                        </ul>
                    </li>
                    <!--ending dropdown-->
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Produk kami"><span class="fa fa-cubes" aria-hidden="true"></span> Katalog Produk</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'web/barang/product_material'?>"><span class="fa fa-truck" aria-hidden="true"></span> Bahan Material</a></li> 
                            <li><a href="<?php echo base_url().'web/barang/product_tambahan'?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Bahan Tambahan Bangunan</a></li> 
                            <li><a href="<?php echo base_url().'web/barang/product_peralatan'?>"><span class="fa fa-cubes" aria-hidden="true"></span>Peralatan</a></li> 
                        </ul>
                    </li>
                    
                     <li>
                        <a href="<?php echo base_url().'administrator/login'?>"><span class="fa fa-sign-in"></span> Login</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" method="post" action="<?php echo base_url().'web/barang/search'?>">
                <div class="form-group">
        <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search"> <button class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit"> Search</button>
      </div>
      
    </form>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>