
<script>
function load_data_participant(str)
{
	
	if (str=="" || str == 0)
	{
	
	document.getElementById("table_history").innerHTML="";
	
	return;
	} 
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		
		document.getElementById("table_history").innerHTML=xmlhttp.responseText;
		
		
		}
	}
	
	xmlhttp.open("GET","../views/planting_process/data_history.php?land_id="+str,true);
	xmlhttp.send();
	
	
	}
</script>

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
                                           <label>Hamparan Tanah</label>
                                        <select id="basic" name="i_land_id" class="selectpicker show-tick form-control" data-live-search="true" onChange="load_data_participant(this.value)" >
                                      <option value="0">---</option>
                                     	<?php
                                        while($row_land = mysql_fetch_array($query_land)){
                                        ?>
                                         <option value="<?= $row_land['land_id']?>" <?php if( $row->land_id == $row_land['land_id']){ ?> selected="selected"<?php } ?>><?= $row_land['location_name']." (".get_land_area($row_land['land_id']).")" ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>  
                                        </div>
                                        </div>
                                        <div id="table_history">
</div>
                                         <div class="col-md-6">
                                           <div class="form-group">
                                           <label>Varietas</label>
                                            <select id="basic" name="i_varieties_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                     
                                           <?php
                                     
                                        while($row_varieties = mysql_fetch_array($query_varieties)){
                                        ?>
                                         <option value="<?= $row_varieties['varieties_id']?>" <?php if( $row->varieties_id == $row_varieties['varieties_id']){ ?> selected="selected"<?php } ?>><?= $row_varieties['varieties_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                        
                                        
                                           <div class="form-group">
                                        <label>Tanggal Tanam</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" required class="form-control pull-right" id="date_picker1" name="i_date" value="<?= format_date($row->planting_process_date) ?>"/>
                                           
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Model Jarak Tanam</label>
                                            <select id="basic" name="i_planting_distance_model_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                     
                                           <?php
                                     
                                        while($row_planting_distance_model = mysql_fetch_array($query_planting_distance_model)){
                                        ?>
                                         <option value="<?= $row_planting_distance_model['planting_distance_model_id']?>" <?php if( $row->planting_distance_model_id == $row_planting_distance_model['planting_distance_model_id']){ ?> selected="selected"<?php } ?>><?= $row_planting_distance_model['planting_distance_model_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jumlah batang /length (per10 m2)</label>
                                            <input required type="text" name="i_stem_number" class="form-control" placeholder="Masukkan jumlah batang /length ..." value="<?= $row->planting_process_stem_number ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tinggi batang /lenght </label>
                                            <input required type="text" name="i_stem_height" class="form-control" placeholder="Masukkan tinggi batang /lenght ..." value="<?= $row->planting_process_stem_height ?>"/>
                                        </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jarak Tanam (cm)</label>
                                            <input required type="text" name="i_planting_distance" class="form-control" placeholder="Masukkan jarak tanam ..." value="<?= $row->planting_process_planting_distance ?>"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Jenjang Bibit (cm)</label>
                                            <input required type="text" name="i_seedling_stage" class="form-control" placeholder="Masukkan jenjang bibit ..." value="<?= $row->planting_process_seedling_stage ?>"/>
                                        </div>
 
                                          <div class="form-group">
                                           <label>Bibit</label>
                                            <select id="basic" name="i_seed_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                     
                                           <?php
                                     
                                        while($row_seed = mysql_fetch_array($query_seed)){
                                        ?>
                                         <option value="<?= $row_seed['seed_id']?>" <?php if( $row->seed_id == $row_seed['seed_id']){ ?> selected="selected"<?php } ?>><?= $row_seed['seed_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                        
                                         
                                           <div class="form-group">
                                        <label>Tanggal Giling</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" required class="form-control pull-right" id="date_picker2" name="i_milled_date" value="<?= $row->planting_process_milled_date ?>"/>
                                           
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                            <label>Kandungan P2o5 dalam kadar nira batang tebu </label>
                                            <input required type="text" name="i_p2o5_content" class="form-control" placeholder="Masukkan kandungan P2o5 ..." value="<?= $row->planting_process_p2o5_content ?>"/>
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
                
                
                
                
                
                