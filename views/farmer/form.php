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
                                    
                      
                                      
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Kode Kontrak</label>
                                            <input required type="text" name="i_code" class="form-control" placeholder="Masukan Kode Kontrak..." value="<?= $row->farmer_contract_code ?>"/>
                                        </div>
                                        
                                    
                                        
                                
                                        
                                        <div class="form-group">
                                          <label>Nama</label>
                                                  <input required type="text" name="i_name" class="form-control" placeholder="Masukan Nama ..."  value="<?= $row->farmer_name ?>"/>                                   
                                  		</div>
                                        <div class="form-group">
                                            <label>Nomor KTP</label>
                                            <input required type="text" name="i_no_ktp" class="form-control" placeholder="Masukan Nomor KTP ..." value="<?= $row->farmer_identity_number ?>"/>
                                        </div>
                                      
 								
                                         <div class="form-group">
                                            <label>Alamat</label>
                                           <textarea class="form-control" name="i_alamat" rows="3" placeholder="Masukan Alamat ..."><?= $row->farmer_address ?></textarea>
                                        </div>
                                      
                                        </div>
                                      
                                        
 										<div class="col-md-3">
                                          <div class="form-group">
                                         <label>Images</label>
                                         <?php
                                        if($id){
										?>
                                        <br />
                                        <img src="<?= $row->farmer_identity_img ?>" style="width:100%;"/>
                                        <?php
										}
										?>
                                           <input type="file" name="i_img" id="i_img" />
                                        </div>
                                       </div>
                                      
                                     
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->