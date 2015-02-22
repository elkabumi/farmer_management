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
                                           <label>Hamparan Tanah</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->location_name." (".get_land_area($row->land_id).")" ?>" readonly="readonly"/>
                                        </div>
                                        
                                           <div class="form-group">
                                           <label>Varietas</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->varieties_name ?>" readonly="readonly"/>
                                        </div>
                                        
                                        
                                           <div class="form-group">
                                        <label>Tanggal Tanam</label>
                                       <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= format_date($row->planting_process_date) ?>" readonly="readonly"/>
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Model Jarak Tanam</label>
                                           <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->planting_distance_model_name ?>" readonly="readonly"/>
                                        </div>
                                        
                                           <div class="form-group">
                                        <label>Estimasi</label>
                                       <input required type="text" name="i_land_name" class="form-control"  value="" readonly="readonly"/>
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Bobot Tebu</label>
                                           <input required type="text" name="i_land_name" class="form-control" value="" readonly="readonly"/>
                                        </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jarak Tanam (cm)</label>
                                            <input required type="text" name="i_planting_distance" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->planting_process_planting_distance ?>" readonly="readonly"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Jenjang Bibit (cm)</label>
                                            <input required type="text" name="i_seedling_stage" class="form-control" placeholder="Masukkan jenjang bibit ..." value="<?= $row->planting_process_seedling_stage ?>" readonly="readonly"/>
                                        </div>
 
                                          <div class="form-group">
                                           <label>Bibit</label>
                                             <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->seed_name ?>" readonly="readonly"/>
                                        </div>
                                        
                                         
                                           <div class="form-group">
                                        <label>Tanggal Panen</label>
                                          <input required type="text" name="i_land_name" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= format_date($row->planting_process_harvest_date) ?>" readonly="readonly"/>
                                    </div><!-- /.form group -->
                                        
                                        <div class="form-group">
                                        <label>Hablur</label>
                                       <input required type="text" name="i_land_name" class="form-control"  value="" readonly="readonly"/>
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Sample</label>
                                           <input required type="text" name="i_land_name" class="form-control" value="" readonly="readonly"/>
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
                </section><!-- /.content -->