<!-- Content Header (Page header) -->      
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Password dan confirm password tidak sama
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                            <div class="title_page"> <?= $title ?></div>
                            

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">                               
                                <div class="box-body">                      
                                    	<div class="col-md-6">
                                        <div class="form-group">
                                           <label>Code</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row['farmer_contract_code'] ?>" readonly="readonly"/>
                                        </div>
                                        
                                           <div class="form-group">
                                           <label>Nama</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row['farmer_name'] ?>" readonly="readonly"/>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Alamat</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row['farmer_address'] ?>" readonly="readonly"/>
                                        </div>
                                        
                                           <div class="form-group">
                                           <label>No KTP</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row['farmer_identity_number'] ?>" readonly="readonly"/>
                                        </div>
                                  	 </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                               <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              