<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
              Simpan berhasil
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
                                    
                                   
                                        <div class="col-md-12">
                                        
                                        <!--
                                        <div class="form-group">
                                            <label>No</label>
                                            <input required type="text" name="i_number" class="form-control" placeholder="Masukkan no ..." value="<?= $row->qp2d_number ?>"/>
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label>Nama Petani</label>
                                           <select id="basic" name="i_farmer_id" class="selectpicker show-tick form-control" data-live-search="true">
											<?php
                                            $query_farmer = mysql_query("select * from  farmers order by  farmer_name");
                                            while($row_farmer = mysql_fetch_array($query_farmer)){
                                            ?>
                                            <option value="<?= $row_farmer['farmer_id']?>" <?php if($row_farmer['farmer_id'] == $row->farmer_id){ ?>selected <?php } ?>  ><?= $row_farmer['farmer_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select> 
                                        </div>
                                       
                                       	<div class="form-group"> 
                                                <label>Luas Tanah (m3)</label>
                                            <input required type="text" name="i_luas" class="form-control" placeholder="Masukkan poin ..." value="<?= $row->farmer_land_area ?>"/>             
                                       
                                       
                                    </div>
                                        
                                        </div>
                                       <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-info" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-info" >Close</a>
</div>
                                
                          
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              
            
                </section><!-- /.content -->