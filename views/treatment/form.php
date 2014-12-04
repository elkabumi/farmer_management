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
                                    
                                     
                                        <div class="col-md-12">
                                        
                                        
                                        
                                           <div class="form-group">
                                        <label>Tanggal Treatment</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" required class="form-control pull-right" id="date_picker1" name="i_date" value="<?= format_date($row->treatment_date) ?>"/>
                                           
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Tipe Treatment</label>
                                            <select id="basic" name="i_treatment_type_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                     
                                           <?php
                                     
                                        while($row_treatment_type = mysql_fetch_array($query_treatment_type)){
                                        ?>
                                         <option value="<?= $row_treatment_type['treatment_type_id']?>" <?php if($row->treatment_type_id == $row_treatment_type['treatment_type_id']){ ?> selected="selected"<?php }?>><?= $row_treatment_type['treatment_type_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                        
                                 		  <div class="form-group">
                                            <label>Keterangan</label>
                                             <textarea class="form-control" name="i_description" rows="3" placeholder="Masukkan keterangan ..."><?= $row->treatment_description ?></textarea>
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