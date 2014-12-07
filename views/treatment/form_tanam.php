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

                          
                          <div class="title_page">Data Proses Tanam</div>

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                     
                                        <div class="col-md-6">
                                        
                                            <div class="form-group">
                                           <label>Hamparan Tanah</label>
                                           <input required="required" type="text" name="i_planting_distance2" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row_tanam->location_name; ?>" readonly="readonly"/>
                                           </div>
                                           
                                            <div class="form-group">
                                           <label>Luas Area</label>
                                           <input required="required" type="text" name="i_planting_distance2" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= get_land_area($row_tanam->land_id); ?>" readonly="readonly"/>
                                           </div>
                                        
                                           <div class="form-group">
                                           <label>Varietas</label>
                                           <input required="required" type="text" name="i_planting_distance3" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row_tanam->varieties_name ?>" readonly="readonly"/>
                                           </div>
                                        
                                           <div class="form-group">
                                           <label>Tanggal Tanam</label>
                                           <input type="text" required class="form-control" id="i_date" readonly="readonly" name="i_date" value="<?= format_date($row_tanam->planting_process_date) ?>"/>
                                           </div>
                                           
                                           </div>
                                              <div class="col-md-6">
                                        
                                          <div class="form-group">
                                           <label>Model Jarak Tanam</label>
                                           <input required="required" type="text" name="i_planting_distance5" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row_tanam->planting_distance_model_name ?>" readonly="readonly"/>
                                          </div>
                                        
                                        <div class="form-group">
                                            <label>Jarak Tanam  (cm)</label>
                                            <input required type="text" name="i_planting_distance" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row_tanam->planting_process_planting_distance ?>" readonly="readonly"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Jenjang Bibit (cm))</label>
                                            <input required type="text" name="i_seedling_stage" class="form-control" placeholder="Masukkan jenjang bibit ..." value="<?= $row_tanam->planting_process_seedling_stage ?>" readonly="readonly"/> 
                                        </div>
 
                                          <div class="form-group">
                                           <label>Bibit</label>
                                           <input required type="text" name="i_seedling_stage" class="form-control" placeholder="Masukkan jenjang bibit ..." value="<?= $row_tanam->seed_name ?>" readonly="readonly"/> 
                                        </div>
                                       
                                        </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <a href="<?= $close_button?>" class="btn btn-info" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              