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
                                    <div class="col-md-12">
                                    	<div class="form-group">
                                        <label>Date</label>
                                        	<div class="input-group">
                                            	<div class="input-group-addon">
                                                	<i class="fa fa-calendar"></i>
                                            	</div>
                                            <input type="text" required class="form-control pull-right" id="reservation" name="i_date" value="<?= $date_default?>"/>
                                       		</div><!-- /.input group -->
                                    	</div><!-- /.form group -->
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                         <label>Location </label>
                                        <select name="i_location_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_location = mysql_query("select * from locations");
                                        while($row_location = mysql_fetch_array($query_location)){
                                        ?>
                                        <option value="<?= $row_location['location_id']?>" <?php if($row_location['location_id'] == $i_location_id){ ?> selected="selected"<?php }?>><?= $row_location['location_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                      	</div>
                                         <div class="form-group">
                                         <label>Varietas </label>
                                        <select name="i_varieties_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_varieties = mysql_query("select * from varieties");
                                        while($row_varieties = mysql_fetch_array($query_varieties)){
                                        ?>
                                        <option value="<?= $row_varieties['varieties_id']?>" <?php if($row_varieties['varieties_id'] == $i_varieties_id){ ?> selected="selected"<?php }?>><?= $row_varieties['varieties_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                      	</div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="form-group">
                                         <label>Jarak Tanam </label>
                                        <select name="i_planting_distances_model_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_planting_distances_models = mysql_query("select * from planting_distance_models");
                                        while($row_planting_distances_models = mysql_fetch_array($query_planting_distances_models)){
                                        ?>
                                        <option value="<?= $row_planting_distances_models['planting_distance_model_id']?>" <?php if($row_planting_distances_models['planting_distance_model_id'] == $i_planting_distances_model_id){ ?> selected="selected"<?php }?>><?= $row_planting_distances_models['planting_distance_model_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                      	</div>
                                         <div class="form-group">
                                         <label>Bibit </label>
                                        <select name="i_seed_id"  class="selectpicker show-tick form-control" data-live-search="true"><option value="0">-</option>
                                        <?php
                                        $query_seed = mysql_query("select * from seeds");
                                        while($row_seed = mysql_fetch_array($query_seed)){
                                        ?>
                                        <option value="<?= $row_seed['seed_id']?>" <?php if($row_seed['seed_id'] == $i_seed_id){ ?> selected="selected"<?php }?>><?= $row_seed['seed_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                      	</div>
                                      </div>
                                  	 </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Preview"/>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->